<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Another extends Model
{
    use HasFactory;
     protected $fillable = ['col'];

    protected $table = 'another';
}
