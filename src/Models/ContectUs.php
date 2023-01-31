<?php

namespace Impruthvi\Contact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContectUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'content'
    ];
}
