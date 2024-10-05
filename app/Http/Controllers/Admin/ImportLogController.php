<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\ImportLog;

class ImportLogController extends Controller
{
    public function index()
    {
        $logs = ImportLog::with('admin')->get();
        return view('admin.import_logs.index', compact('logs'));
    }
}
