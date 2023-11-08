<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['catalog','category' , 'gallery' ,'status' , 'p_name' ,'image' , 'b_name' ,'m_name'  , 'price' , 'discount' , 'emi_cost' , 'r_time' , 'w_policy' , 'desc'];

}
