<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function create(){
        $card = new Card();
        $card->number= 576;
        $card->cpf= 4740158726;
        $card->rg= 479501623;
        $card->name= ('Júlia Macedo');
        $card->type= ('Jardineiro');

        

        $card->save();
    }
}
