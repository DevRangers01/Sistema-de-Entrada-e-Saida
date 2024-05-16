<?php

namespace App\Http\Controllers;

use App\Models\Editar;
use Illuminate\Http\Request;

class EditarController extends Controller
{
    public function create(){
        return view('editar.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'max:45'],
        ]);

        $editar = new Editar();
        $editar->name = $request->name;
        $editar->description = $request->description;

        $editar->save();

        return redirect()->route('editar.create')->with('success', 'Função salva com sucesso');
    }

    public function update($id){
        $editar = Editar::find($id);

        return view('editar.create', compact('editar'));
    }

    public function edit(Request $request, $id){
            $request->validate([
                'name' => ['required', 'max:45'],
            ]);
    
            $editar = new Editar();
            $editar->name = $request->name;
            $editar->description = $request->description;
    
            $editar->save();
    
            return redirect()->route('editar.create')->with('success', 'Função salva com sucesso');
        }
    
    public function delete($id){
        $editar = Editar::find($id);

        $editar->delete();

        return view('editar.create')->with('success', 'Função excluída com sucesso');
    }

    public function deleteColumn($id)
    {
        $record = Editar::find($id);
        if ($record) {
            $record->delete(); 
            return redirect()->back()->with('success', 'Registro excluído com sucesso.');
        }

        return redirect()->back()->with('error', 'Registro não encontrado.');
}
}
