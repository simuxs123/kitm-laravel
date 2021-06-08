<?php

namespace App\Exports;

use App\SelfAssessment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\KitmUsers;

class SelfAssessmentExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;

    //     return SelfAssessment::where(['user_id' => $id])->get();
    // }

    public function view(): View
    {
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        $info = SelfAssessment::where(['user_id' => $id])->first();
        $projects = SelfAssessment::where(['user_id' => $id])->pluck('2_1');
        return view('admin.pages.download', compact('info', 'projects'));
    }
}
