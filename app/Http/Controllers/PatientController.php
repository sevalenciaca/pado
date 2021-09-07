<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\MedicalHistory;
use App\Models\Nurse;
use App\Models\VitalSign;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest('id')->where('status',1)->paginate(10);
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        $nurses = Nurse::all();
        return view('patients.create', compact('doctors', 'nurses'));
    }

    public function store(Request $request)
    {
        $patient = Patient::create($request->all());
        return redirect()->route('patients.show', $patient);
    }

    public function show(Patient $patient)
    {
        // $vital_signs = VitalSign::where('patient_id', $patient->id)->orderBy('register_date','desc')->get();
        // $vital_sign_actually = VitalSign::where('patient_id', $patient->id)->orderBy('register_date','desc')->first();
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        $doctors = Doctor::all();
        $nurses = Nurse::all();
        return view('patients.edit', compact('patient', 'doctors', 'nurses'));
    }

    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('patients.show', $patient);
    }

    public function status(Patient $patient)
    {
        $patient->status = 0;
        $patient->save();
        return redirect()->route('patients.index');
    }

    public function medical_history(Patient $patient)
    {
        $medical_history = MedicalHistory::where('id', $patient->medical_history_id)->first();
        return view('patients.medical_history', compact('medical_history', 'patient'));
    }
}
