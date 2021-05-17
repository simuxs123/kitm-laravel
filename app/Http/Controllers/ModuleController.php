<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('mazer.pages.modules', compact('modules'));
    }

    public function createModule(Request $request) {
        Module::create([
            'module_name' => request('moduleName'),
            'teacher_name' => request('name'),
            'teacher_surname' => request('surname'),
            'group_name' => request('groupName')
        ]);

        return back();
    }

    public function deleteModule(Module $module) {
        Module::where(['id' => $module->id])->delete();

        return back();
    }

    public function updateModule(Module $module) {
        return view('mazer.pages.update-module', compact('module'));
    }

    public function update(Request $request, Module $module) {
        Module::where('id', $module->id)->update(['module_name' => request('moduleName'), 'teacher_name' => request('name'), 'teacher_surname' => request('surname'), 'group_name' => request('groupName')]);
        return redirect('/modules');
    }
}
