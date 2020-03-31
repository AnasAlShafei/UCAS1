<?php

namespace App\Http\Controllers;

use App\pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = pool::all();
        return view('control.pool.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = pool::all();
        return view('control.pool.create', compact('data'));
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
        $user_id =Auth::user()->id;
        $status = "0";
        $data = [
            'name' => $request->name,
            'timea' => $request->timea,
            'timeb' => $request->timeb,
            'status' => $status,
            'user_id'=>$user_id,
        ];
        pool::create($data);
        return redirect("pool");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function show(pool $pool)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = pool::find($id);
        return view('control.pool.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $status = "0";
        $user_id =Auth::user()->id;
        $data = [
            'name' => $request->name,
            'timea' => $request->timea,
            'timeb' => $request->timeb,
            'status' => $status,
            'user_id'=>$user_id,
        ];
        pool::where('id', $id)->update($data);
        return redirect('pool');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pool  $pool
     * @return \Illuminate\Http\Response
     */
    public function destroy(pool $pool)
    {
        //
        $pool = pool::find($id);
        $pool->delete();
        return redirect('pool');
    }
    public function updatestatus(Bodybuilding $Bodybuilding,Request $request)
    {
        $Bodybuilding->update($request->all());
        return redirect('Bodybuilding');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $data = pool::where('timea', 'LIKE', '%' . $keyword . '%')->get();
        return view('control.pool.search', compact('data', 'keyword'));
    }
}
