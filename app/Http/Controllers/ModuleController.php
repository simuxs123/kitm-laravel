<?php

namespace App\Http\Controllers;

use App\Module;
use App\Survey;
use Illuminate\Http\Request;
use App\KitmUsers;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        $teachers = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->get();

        return view('admin/pages/modules', compact('modules', 'teachers'));
    }

    public function createModule(Request $request)
    {
        $validateData = $request->validate([
            'moduleName' => 'required|max:255|min:3',
            'groupName' => 'required'
        ]);
        
        $name = KitmUsers::where(['id' => request('surname')])->first();

        Module::create([
            'module_name' => request('moduleName'),
            'teacher_id' => request('surname'),
            'teacher_surname' => $name->name . ' ' . $name->surname,
            'group_name' => request('groupName')
        ]);

        return back();
    }

    public function deleteModule(Module $module)
    {
        Module::where(['id' => $module->id])->delete();

        return back();
    }

    public function updateModule(Module $module)
    {
        $teachers = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->get();

        return view('admin.pages.update-module', compact('module', 'teachers'));
    }

    public function update(Request $request, Module $module)
    {
        $name = KitmUsers::where(['id' => request('surname')])->first();

        $validateData = $request->validate([
            'moduleName' => 'required|max:255|min:3',
            'groupName' => 'required'
        ]);

        if (isset($request->updatecheck)) {
            Module::where('id', $module->id)->update([
                'module_name' => request('moduleName'),
                'teacher_id' => request('surname'),
                'teacher_surname' => $name->name . ' ' . $name->surname,
                'group_name' => request('groupName'),
            ]);

            Survey::where('module_id', $module->id)->update([
                'module_name' => request('moduleName'),
                'teacher_id' => $name->id,
                'group' => request('groupName')
            ]);
        }

        Module::where('id', $module->id)->update([
            'module_name' => request('moduleName'),
            'teacher_id' => request('surname'),
            'teacher_surname' => $name->name . ' ' . $name->surname,
            'group_name' => request('groupName'),
        ]);

        return redirect('/modules');
    }
}
