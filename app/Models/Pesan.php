<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory, HasUlids;

    protected $table = 'pesan';

    // protected $guarted = ['id'];

    protected $fillable = [
        'rate',
        'ulasan',
        'nama',
        'no',
    ];

}
