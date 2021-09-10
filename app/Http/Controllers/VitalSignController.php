<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\VitalSign;

use Illuminate\Http\Request;

class VitalSignController extends Controller
{
    public function show(Patient $patient)
    {
        $vital_signs = VitalSign::where('patient_id', $patient->id)->orderBy('register_date','desc')->get();
        $vital_sign_actually = VitalSign::where('patient_id', $patient->id)->orderBy('register_date','desc')->first();
        return view('vital-signs.show', compact('vital_signs', 'vital_sign_actually', 'patient'));
    }
}
