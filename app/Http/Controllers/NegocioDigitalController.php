<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\NegocioDigital;
use Illuminate\Support\Str;

class NegocioDigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $negocios = NegocioDigital::all();
        return view('');
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

        // Si el modelo de NegocioDitial indica que hay una imagen subida, y por tanto devuelve la ruta, si no devuelve FALSE. Por tanto, si no llegó nada, no se agrega al request
        if ($foto = NegocioDigital::setImagen($request->imagen)) {
            // Agrego al request la URL de la imagen
            $request->request->add(['imagen' => $foto]);
        }

        $this->validate($request, [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'orden' => 'required',
        ]);
        try {
            $usuario = Auth::user();
            if (!is_null($usuario)) {
                NegocioDigital::create([
                    'titulo' => $request->get('titulo'),
                    'descripcion' => $request->get('descripcion'),
                    'imagen' => $request->get('imagen'),
                    'orden' => $request->get('orden'),
                ]);
            } else {
                $msg_error = 'You are probably NOT LOGGED into the system yet. Please login and try again.';
                return back()->with('msg_error', $msg_error);
            }
        } catch (\Throwable $th) {
            $msg_error = $th->getMessage();
            if (strpos($msg_error, 'non-object') !== false) {
                $msg_error = $msg_error . '. You are probably NOT LOGGED into the system yet. Please login and try again.';
            }
            return back()->with('msg_error', $msg_error);
        }
        return back()->with('msg_success', 'El negocio fue creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
