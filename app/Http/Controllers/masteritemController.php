<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\masteritem;

class masteritemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masteritem = masteritem::all();
        return view('masteritem.index', ['masteritem' => $masteritem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masteritem.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'um' => 'required'
        ]);

        masteritem::create($validated);
        return redirect('/masteritem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $masteritem = masteritem::where('kodebarang','LIKE','%'.$request->kodebarang.'%')->get();
        return view('masteritem.index', ['masteritem' => $masteritem, 'input' => $request->kodebarang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = masteritem::All()->firstWhere('id', $id);
        return view('masteritem.edit', ['masteritem' => $data]);
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
        masteritem::where('id', $id)
            ->update ([
                'kodebarang' => $request->kodebarang,
                'namabarang' => $request->namabarang,
                'um' => $request->um
            ]);
            return redirect('/masteritem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        masteritem::destroy('id', $id);
        return redirect('/masteritem');
    }
}
