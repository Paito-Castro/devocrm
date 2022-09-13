<?php

namespace App\Http\Controllers;

use App\Models\EstadoSolicituds;
use Illuminate\Http\Request;


/**
 * Class EstadosolicitudController
 * @package App\Http\Controllers
 */
class EstadosolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadosolicitud = EstadoSolicituds::paginate(8);

        return view('estadosolicitud.index', compact('estadosolicitud'))
            ->with('i', (request()->input('page', 1) - 1) * $estadosolicitud->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadosolicitud = new EstadoSolicituds();
        return view('estadosolicitud.create', compact('estadosolicitud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstadoSolicituds::$rules);

        $estadosolicitud = EstadoSolicituds::create($request->all());

        return redirect()->route('estadosolicitud.index')
            ->with('mensaje', 'Estado solicitud created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadosolicitud = EstadoSolicituds::find($id);

        return view('estadosolicitud.show', compact('estadosolicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit($id)
    {
        $estadosolicitud = EstadoSolicituds::find($id);

        return view('estadosolicitud.edit', compact('estadosolicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadosolicitud $estadosolicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadosolicitud $estadosolicitud)
    {
        request()->validate(EstadoSolicituds::$rules);

        $estadosolicitud->update($request->all());

        return redirect()->route('estadosolicitud.index')
            ->with('mensaje', 'Estado solicitud updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadosolicitud = EstadoSolicituds::find($id)->delete();

        return redirect()->route('estadosolicitud.index')
            ->with('mensaje', 'Estado solicitud deleted successfully');
    }
}
