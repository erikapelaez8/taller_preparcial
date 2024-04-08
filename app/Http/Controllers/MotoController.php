<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;
use Illuminate\Support\Facades\Log as FacadesLog;
use Log;
use App\Http\Requests\MotoRequest;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motos.index', [
            'motos' => Moto::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        FacadesLog::debug('MotoController@create');
        return view('motos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MotoRequest $request)
    {
        $moto = new Moto($request->all());
        $moto->save();
        FacadesLog::debug($request->all());
        //dd($request->all());
        return redirect()->route('motos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Moto $moto)
    {
        //Implementar método show
        Log::debug('MotoController@show');
        Log::debug($moto);
        return view('motos.show', [
            'moto' => $moto
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moto $moto)
    {
        //Mirar los logs en storage/logs/laravel.log
        Log::debug('MotoController@edit');
        Log::debug($moto);
        return view('motos.edit', [
            'moto' => $moto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MotoRequest $request, Moto $moto)
    {
        Log::debug('MotoController@update');
        Log::debug('Tarea original');
        Log::debug($moto);
        Log::debug('Datos del formulario');
        Log::debug($request->all());
        //Actualizar en BD el registro
        $moto->update($request->all());
        Log::debug('Tarea actualizada');
        Log::debug($moto);
        return redirect()->route('motos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moto $moto)
    {
        $moto->delete();
        return back();
    }
}
