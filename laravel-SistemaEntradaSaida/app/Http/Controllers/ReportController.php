<?php

namespace App\Http\Controllers;

class ReportController
{
    public function index(){
        return view('relatorio\entradaesaida');
    }
}