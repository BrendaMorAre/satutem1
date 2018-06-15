<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Declaration;

class DeclarationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declaration = Declaration::orderBy('id', 'DESC')->paginate(3);
        return view ('Declaration.index', compact('declarations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Declaration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,['periodicity' => 'required', 'period' => 'required', 'date' => 'required', 'operation' => 'required', 'declaration_type' => 'required', 'capture' => 'required']);
        Declaration::create($request->all());
        return redirect()->route('declaration.index')->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $declaration = Declaration::find($id);
        return view('declaration.show', compact('declarations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $declaration = Declaration::find($id);
        return view('declaration.edit', compact('declaration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['periodicity' => 'required', 'period' => 'required', 'date' => 'required', 'operation' => 'required', 'declaration_type' => 'required', 'capture' => 'required']);

        Declaration::find($id)->update($request->all());
        return redirect()->route('declaration.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Declaration::find($id)->delete();
        return redirect()->route('declaration.index')->with('success','Registro eliminado correctamente');
    }
}
