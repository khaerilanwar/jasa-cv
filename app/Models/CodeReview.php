<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeReview extends Model
{
    protected $fillable = ['code', 'used', 'used_at', 'testi_id'];
}
