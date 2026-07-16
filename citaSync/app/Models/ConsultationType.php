<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConsultationType extends Model
{
    /** @use HasFactory<\Database\Factories\ConsultationTypeFactory> */
    use HasFactory;

    protected $fillable = [
        'consultation_name',
        'price',
    ];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
