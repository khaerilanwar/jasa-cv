<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    /** @use HasFactory<\Database\Factories\CVFactory> */
    use HasFactory;

    public function scopeByCategory($query, $category)
    {
        $query->where('category', $category);
    }
}
