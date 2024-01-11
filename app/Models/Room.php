<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['gallery' , 'desc' , 'category' , 'available' , 'food' , 'parking' , 'tenants' ,'beds' , 'period','maintenance' , 'electrcity' ,'amount', 'status' ,'price' ];
}
