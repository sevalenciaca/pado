<?php

namespace App\Http\Controllers;

use App\Models\Diagnostic;
use App\Models\Patient;

use Illuminate\Http\Request;

class DiagnosticController extends Controller
{
    public function show(Patient $patient)
    {
        // $diagnostic = Diagnostic::where('id', $patient->diagnostic_id)->first();
        return view('diagnostics.show', compact('patient'));
    }
}
