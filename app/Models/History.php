<?php

namespace App\Models;

use App\Traits\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use HasFactory,Uuid;
    protected $fillable = [
        'to',
        'template',
        'subject',
        'message'

    ];

    protected $hidden = ['created_at', 'updated_at'];
}
