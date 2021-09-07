<?php

namespace App\Http\Controllers;
use App\Models\Relative;
use App\Models\Patient;

use Illuminate\Http\Request;

class RelativeController extends Controller
{
    public function index()
    {
        $relatives = Relative::latest('id')->paginate(10);
        return view('relatives.index', compact('relatives'));
    }

    public function create()
    {
        return view('relatives.create');
    }

    public function store(Request $request)
    {
        Relative::create($request->all());
        return redirect()->route('relatives.index');
    }

    public function edit(Relative $relative)
    {
        return view('relatives.edit', compact('relative'));
    }

    public function update(Request $request, Relative $relative)
    {
        $relative->update($request->all());
        return redirect()->route('relatives.index');
    }

    public function assignment(Relative $relative)
    {
        return view('relatives.assignment', compact('relative'));
    }

    public function assign(Relative $relative, Request $request)
    {
        $patient_document = $request->document;
        $patient = Patient::where('document', $patient_document)->first();
        $patient->relative_id = $relative->id;
        $patient->save();
        return $patient;
    }
}
