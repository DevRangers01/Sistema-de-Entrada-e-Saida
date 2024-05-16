<?php

namespace App\Http\Controllers;

use App\Models\Employeer;
use Illuminate\Http\Request;
class EmployeerController extends Controller
{
    public function create(){
        $employeer = new Employeer();
        $employeer->name= ('Cauã Lopes');
        $employeer->card= 12982356798;
    
        


        $employeer->save();
    }
}