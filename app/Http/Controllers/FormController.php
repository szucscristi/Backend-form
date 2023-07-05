<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('forms');
    }
    public function store(Request $request)
    {
    
       $form = new Form();
       $form-> Nume = $request->input('Nume');
       $form-> Prenume = $request->input('Prenume');
       $form-> Data_de_nastere = $request->input('Data_de_nastere');
       $form-> Comentariu = $request->input('Comentariu');
       $form-> save();
       return true;
    }
}
