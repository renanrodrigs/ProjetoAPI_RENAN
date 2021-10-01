<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\controle;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
class controlecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            "itens" => controle::pluck('nome'),
            "total_value" => controle::sum('valor')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['update_at'] = date('Y-m-d H:i:s');
        $controle = new controle();
        $controle->create($data);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function show(controle $controle)
    {
        return response()->json($controle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function edit(controle $controle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, controle $controle)
    {
        $controle->update($request->all());                        
        return $controle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controle  $controle
     * @return \Illuminate\Http\Response
     */
    public function destroy(controle $controle)
    {
        $controle->delete();
        return response()->json('apagado');
    }
}
