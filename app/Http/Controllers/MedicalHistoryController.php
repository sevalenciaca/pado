<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\MedicalHistory;

use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    public function show(Patient $patient)
    {
        return view('medical-histories.show', compact('patient'));
    }
}
