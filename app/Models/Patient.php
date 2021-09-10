<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'name',
        'last_name',
        'gender',
        'born_date',
        'eps',
        'address',
        'phone',
        'email',
        'city',
        'doctor_id',
        'nurse_id'
    ];


    public function medical_history() {
        return $this->belongsTo(MedicalHistory::class);
    }

    public function relative() {
        return $this->belongsTo(Relative::class);
    }

    public function diagnostic() {
        return $this->belongsTo(Diagnostic::class);
    }

    public function vital_sings() {
        return $this->hasMany(VitalSign::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function nurse() {
        return $this->belongsTo(Nurse::class);
    }
}
