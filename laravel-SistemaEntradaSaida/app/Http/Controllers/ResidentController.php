<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function create(){
        $resident = new Resident();
        $resident->name= 'Maria Eduarda';
        $resident->apartment_number= 12;
        $resident->floor= 5;
        

        $resident->save();
    }
}
