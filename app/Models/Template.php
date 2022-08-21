<?php

namespace App\Models;

use App\Traits\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory, Uuid;
    protected $fillable = [
        'name',
    ];
}
