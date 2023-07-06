<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorii extends Model
{
    use HasFactory;

    protected $table = 'categorii';
    protected $primary_key = ['id'];
    protected $fillable = ['nume','subcategorie'];
}