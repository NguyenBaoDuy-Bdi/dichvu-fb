<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    public $table = 'supports';

    protected $fillable = [
        'username',
        'text',
        'reply',
        'status',
        'domain',
    ];

}
