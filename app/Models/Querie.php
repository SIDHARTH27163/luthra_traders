<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Querie extends Model
{
    use HasFactory;
    protected $fillable = ['fname' , 'lname' , 'email' , 'phone' , 'description' , 'status' , 'service_id' ];
}
