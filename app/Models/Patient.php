<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name','surname','age','sex','ci','type_blood','phone','email','address'];

    protected $hidden = ['created_at', 'updated_at'];
}
