<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boxCofee;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.userProfile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.box.boxForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'torra' => 'required',
            'graos' => 'required',
            'capsula' => 'required',
            'espresso' => 'required',
            'irish' => 'required',
            'latte' => 'required',
            'macchiato' => 'required',
            'mocha' => 'required',
            'cappuccino' => 'required',
            'cGelado' => 'required',
            'observacoes' => 'required',
          ]);

          boxCoffee::create($data);
          return route('pages.userProfile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, boxCoffee $box)
    {
          $request->validate([
            'torra' => 'required',
            'graos' => 'required',
            'capsula' => 'required',
            'espresso' => 'required',
            'irish' => 'required',
            'latte' => 'required',
            'macchiato' => 'required',
            'mocha' => 'required',
            'cappuccino' => 'required',
            'cGelado' => 'required',
            'observacoes' => 'required',
          ]);
          
            $box->torra = $request->torra;
            $box->graos = $request->graos;
            $box->capsula = $request->capsula;
            $box->espresso = $request->espresso;
            $box->irish = $request->irish;
            $box->latte = $request->latte;
            $box->macchiato = $request->macchiato;
            $box->mocha = $request->mocha;
            $box->cappuccino = $request->cappuccino;
            $box->cGelado = $request->cGelado;
            $box->observacoes = $request->observacoes;
            $box->save();

            return redirect()->route('pages.userProfile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(boxCoffee $box)
    {
        $box->delete();

        return back();
    }
}
