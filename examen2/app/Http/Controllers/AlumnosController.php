<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Municipios;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $alumnos = Alumnos::with('Municipio')->paginate(10); // 10 por página
    return view('alumnos.lista', compact('alumnos'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $municipios = Municipios::all();
        return view('alumnos.crear', [
            'municipios' => $municipios
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Alumnos::create([
            'carnet'=>$request->carnet,
            'nombre'=>$request->nombre,
            'apellidos'=>$request->apellido,
            'telefono'=>$request->telefono,
            'correo'=>$request->correo,
            'direccion'=>$request->direccion,
            'municipioId'=>$request->municipioId
        ]);

        return redirect()->action([AlumnosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumno = Alumnos::find($id);
        return view('alumnos.ver', ['alumno'=> $alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     */


     public function edit(string $id)
    {
        $alumno = Alumnos::find($id);
        $municipios = Municipios::all(); 

        return view('alumnos.editar', [
            'alumno' => $alumno,
            'municipios' => $municipios
        ]);
    }


     /*
    public function edit(string $id)
    {
        $municipios=Municipios::find($id);
        $alumno = Alumnos::find($id);
        return view('alumnos.editar', ['alumno'=>$alumno, 'municipios'=>$municipios]);
    }
*/
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $alumno = Alumnos::find($id);
        $alumno->fill($request->all());
        $alumno->save();

        return redirect()->action([AlumnosController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno = Alumnos::find($id);
        $alumno->delete();
        return redirect()->action([AlumnosController::class, 'index']);
    }
}
