<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\MedicalAppointment;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MedicalAppointment>
 */
class MedicalAppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => Doctor::factory(),
            'patient_id' => Patient::factory(),
            'appointment_at' => fake()->dateTimeBetween('now', '+7 days'),

            'status' => fake()->randomElement(['pending', 'confirmed', 'completed']),

            'ai_notes' => null,
        ];
    }
}
