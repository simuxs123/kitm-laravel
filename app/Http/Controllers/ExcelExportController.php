<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SelfAssessmentExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    public function export() {
        return Excel::download(new SelfAssessmentExport, '─«sivertinimo_anketa.xlsx');
    }
}
