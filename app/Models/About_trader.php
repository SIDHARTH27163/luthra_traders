<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_trader extends Model
{
    use HasFactory;
    protected $fillable = ['heading' , 'description' , 'image'  ];
}
