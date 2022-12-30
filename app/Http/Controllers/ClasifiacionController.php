<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacion;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Solutions\GenerateAppKeySolution;


class ClasifiacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $clasificacion=DB::table('clasificaciones')
            ->select('id_clasificacion','desc_c')
            ->where('desc_c','LIKE','%'.$texto.'%')
            ->orWhere('id_clasificacion','LIKE','%'.$texto.'%')
            ->orderBy('id_clasificacion','asc')
            ->paginate(100);
        return view('clasificacion.index',compact('clasificacion','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clasificacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clasificacion= new Clasificacion;
        $clasificacion->id_clasificacion=$request->input('id_clasificacion');
        $clasificacion->desc_c=$request->input('desc_c');
        $clasificacion->save();
        return redirect()->route('clasificacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clasificacion=Clasificacion::find($id);
        return view('clasificacion.edit',['clasificacion'=>$clasificacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

    public function edit($id_clasificacion)
    {
        $clasificacion=$clasificacion::findOrfail($id_clasificacion);
        return view('clasificacion.edit',compact('clasificacion'));
    }
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_clasificacion)
    {
        $clasificacion=Clasificacion::find($id_clasificacion);
        $clasificacion->desc_c=$request->input('desc_c');

        $clasificacion->save();
        return redirect()->route('clasificacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
