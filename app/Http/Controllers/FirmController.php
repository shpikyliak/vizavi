<?php

namespace App\Http\Controllers;

use App\Firm;
use Illuminate\Http\Request;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firms = Firm::all();

        $header = 'Firms';
        return view('index', compact('firms', 'header'));
    }

    public function getByPhonesCount(Request $request)
    {
        $firms = Firm::getByPhonesCount($request->phones, $request->param);
        $header = 'Phones '.$request->param.' '.$request->phones;
        return view('index', compact('firms', 'header'));
    }

    public function maxium()
    {
        $firm = Firm::maxium();
        $max = $firm->phones->count();
        $header = 'Maxium';
        $firms = collect([$firm]);

        return view('index', compact('firms', 'header' , 'max'));
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
        //
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
