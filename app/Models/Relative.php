<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{

    protected $fillable = [
        'document',
        'full_name',
        'address',
        'phone',
        'email',
        'city',
    ];

    use HasFactory;

    public function patients() {
        return $this->hasMany(MedicalHistory::class);
    }
}
