<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'level',
        'description',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'level' => 'integer',
    ];
}
