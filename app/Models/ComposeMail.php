<?php

namespace App\Models;

use App\Traits\Uuid\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComposeMail extends Model
{
    use HasFactory, UuId;
}
