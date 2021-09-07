<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'document',
        'full_name',
        'specialty'
    ];

    use HasFactory;

    public function patients() {
        return $this->hasMany(Patient::class);
    }
}
