<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['user_id', 'phone', 'birth_date'];

    protected $casts = [
        'birth_date' => 'date',
    ];

                public function user(): mixed
    {
        return $this->belongsTo(User::class);
    }

    public function appointments(): mixed
    {
        return $this->hasMany(Appointment::class);
    }
}
