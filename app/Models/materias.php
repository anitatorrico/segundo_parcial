<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    use HasFactory;
    protected $table = "materias";
    protected $fillable = ['Id', 'name', 'state', 'created_at', 'updated_at'];
}