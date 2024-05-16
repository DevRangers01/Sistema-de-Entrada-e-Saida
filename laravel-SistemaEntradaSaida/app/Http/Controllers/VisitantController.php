<?php

namespace App\Http\Controllers;
use App\Models\Visitant;

class VisitantController extends Controller
{
    public function create(){
        $visitant = new Visitant();
        $visitant->name= ('Ana Luiza');
        $visitant->cpf= 4740480206;
        $visitant->place_of_visit= ('Apartamento de Júlia');
        

        $visitant->save();
}
}