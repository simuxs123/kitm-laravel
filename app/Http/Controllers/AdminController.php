<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;
use App\Datepicker;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{

    public function moduleSurveys()
    {
        Module::where('date', '<=', Carbon::now())->update([
            'date' => null,
            'active' => 0,
        ]);

        $modules = Module::where('date', '>', Carbon::now())->get();

        return view('admin/pages/module-surveys', compact('modules'));
    }

    public function auth()
    {
        return view('admin/pages/dashboard');
    }

    public function restriction()
    {
        return view('admin.pages.restriction');
    }

    public function employeeView()
    {
        Module::where('date', '<=', Carbon::now())->update([
            'date' => null,
            'active' => 0,
        ]);
        $activated = Datepicker::exists();
        $data = '';
        $modules = Module::all();

        $activeModules = Module::where('date', '>', Carbon::now())->get();

        if ($activated) {
            $data = Datepicker::first();
        }

        return view('admin.pages.employee', compact('activated', 'data', 'modules', 'activeModules'));
    }

    public function activateModule(Request $request)
    {

        if ($request->date . ' ' . $request->time > Carbon::now()) {
            if (Module::where(['id' => request('module')])->first()['active'] == 0) {
                Module::where(['id' => request('module')])->update([
                    'date' => $request->date . ' ' . $request->time,
                    'active' => 1,
                ]);

                return back();
            } else {
                return back()->with('danger', 'Modulis jau aktyvuotas');
            }
        } else {
            return back()->with('danger', 'Pasirinkote praeities datą');
        }
    }

    public function cancelActivation(Module $item) {
        Module::where(['id' => $item->id])->update([
            'date' => null,
            'active' => 0
        ]);

        return back();
    }
}
