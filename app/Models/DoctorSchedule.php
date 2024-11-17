<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class DoctorSchedule extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'doctor_schedules';

    protected $fillable = ['doctor_id', 'day', 'start_time', 'end_time'];

    // app/Models/DoctorSchedule.php
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = Str::uuid(); // Generate UUID untuk kolom id
            }
        });
    }
}
