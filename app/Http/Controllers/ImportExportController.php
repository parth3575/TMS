<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\BulkExport;
use App\Imports\BulkImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
    public function importExportView()
    {
       return view('admin.upload_excel');
    }

    public function import(Request $request)
    {
        // $path = $request->file('file')->getRealPath();
        // Excel::import(new BulkImport, $path);
        // return view('admin.questions');

        $file = $request->file('file')->getRealPath();
        Excel::import(new BulkImport, $file);

        // Excel::import(new BulkImport, request()->file('file'));

        // return back();
        return view('admin.questions');
    }
}
