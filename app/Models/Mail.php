<?php

namespace App\Models;

use App\Traits\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mail extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'name',
        'message',

    ];
    protected $hidden = ['created_at', 'updated_at'];
}
