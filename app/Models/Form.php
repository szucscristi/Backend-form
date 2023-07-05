<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';
    protected $primary_key = ['id'];
    protected $fillable = ['Nume', 'Prenume', 'Data_de_nastere', 'Comentariu'];
}
