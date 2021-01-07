<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['first_name', 'last_name', 'mobile', 'dob', 'gender', 
    'address', 'city', 'password', 'qn1', 'qn2', 'qn3', 'ans1', 'ans2', 'ans3'];
}
