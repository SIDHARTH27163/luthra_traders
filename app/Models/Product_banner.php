<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_banner extends Model
{
    use HasFactory;
    protected $fillable = ['discount','p_name' , 'image' , 'status' ];
}
