<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spastic extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
        return 'name';
    }

    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
    ];
}
