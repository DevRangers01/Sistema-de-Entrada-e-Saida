<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        $post = new Post();
        $post->name= 'Faxineira';
        $post->description= "Limpar o estabelecimento";
        

        $post->save();
    }
}