<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    /** @use HasFactory<\Database\Factories\TestimoniFactory> */
    use HasFactory;

    protected $fillable = ['customer_name', 'rating', 'comment'];
}
