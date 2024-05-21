<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fungus;

class Fungus_Controller extends Controller
{
    //
    public function index()
    {
        $fungi = Fungus::all();
        return response()->json($fungi);
    }
    public function show($id)
    {
        $fungus = Fungus::find($id);
        if ($fungus) {
            return response()->json($fungus);
        } else {
            return response()->json(['message' => 'Fungus not found'], 404);
        }
    }
    public function store(Request $request)
    {        
        $fungus = Fungus::create([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Pileo' => $request->input('Pileo'),
            'Lamela' => $request->input('Lamela'),
            'Forma_del_pie' => $request->input('Forma_del_pie'),
        ]);

        return response()->json($fungus, 201);
    }

    public function update(Request $request, $id)
    {

        $fungus = Fungus::find($id);

        
        if (!$fungus) {
            return response()->json(['message' => 'Hongo no encontrado'], 404);
        }
        $fungus->update([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Pileo' => $request->input('Pileo'),
            'Lamela' => $request->input('Lamela'),
            'forma_del_pie' => $request->input('forma_del_pie'), // Asegúrate de incluir 'forma_del_pie' si es necesario
        ]);
        return response()->json($fungus);
    }
}
