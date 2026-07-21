<?php

namespace App\Models;

use Database\Factories\PatientsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    /** @use HasFactory<PatientsFactory> */
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'telefono',
        'dni',
    ];

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
