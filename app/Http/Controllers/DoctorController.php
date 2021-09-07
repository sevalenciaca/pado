<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::latest('id')->paginate(10);
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all());
        return redirect()->route('doctors.show', $doctor);
    }

    public function show(Doctor $doctor)
    {
        $patients = Patient::where('doctor_id', $doctor->id)->get();
        return view('doctors.show', compact('patients', 'doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        return redirect()->route('doctors.show', $doctor);
    }
}
