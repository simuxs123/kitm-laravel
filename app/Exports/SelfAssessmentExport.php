<?php

namespace App\Exports;

use App\SelfAssessment;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use App\KitmUsers;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SelfAssessmentExport implements FromView, WithStyles
{

    public function view(): View
    {
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        $info = SelfAssessment::where(['user_id' => $id])->first();
        $projects = SelfAssessment::where(['user_id' => $id])->pluck('2_1');
        return view('admin.pages.download', compact('info', 'projects'));
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getColumnDimension('A')->setWidth(100);
        $sheet->getStyle('A')->getAlignment()->setWrapText(true);
    }
}
