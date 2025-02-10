<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Concesionario;
class controllerConcesionario extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $colorCoche= Concesionario::color()->get();
        return view('concesionario',compact('colorCoche',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearCoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca'=>'required',
            'modelo'=>'required',
            'color'=>'required',
            'matricula'=>'required|max:7',
        ]);
        Concesionario::create($request->all());
        return redirect()->route('concesionario')->with('success','Coche creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coche=Concesionario::findOrFail($id);
        return view('mostrarCoche',compact('coche'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coche=Concesionario::findOrFail($id);
        return view('editarCoche',compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { $request->validate([
        'marca'=>'required',
        'modelo'=>'required',
        'color'=>'required',
        'matricula'=>'required|max:7',
    ]);
        $coche=Concesionario::findOrFail($id);
        $coche->update($request->all());
        return redirect()->route('concesionario')->with('success','Coche actualizado correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $coche=Concesionario::findOrFail($id);
        $coche->delete();
        return redirect()->route('concesionario', $coche->id)->with('success','Coche eliminado correctamente');
    }
}
