<?php

namespace App\Http\Controllers;

use App\stadium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StadiumController extends Controller
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
        $data = stadium::all();
        return view('control.stadium.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = stadium::all();
        return view('control.stadium.create', compact('data'));
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
        $user_id = Auth::user()->id;
        $status = "0";
        $data = [
            'name_stadium' => $request->name_stadium,
            'timea' => $request->timea,
            'timeb' => $request->timeb,
            'status' => $status,
            'user_id' => $user_id,
        ];
        stadium::create($data);
        return redirect("stadium");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function show(stadium $stadium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = stadium::find($id);
        return view('control.stadium.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user_id = Auth::user()->id;
        $status = "0";

        $data = [
            'name_stadium' => $request->name_stadium,
            'timea' => $request->timea,
            'timeb' => $request->timeb,
            'status' => $status,
            'user_id' => $user_id,
        ];
        stadium::where('id', $id)->update($data);
        return redirect('stadium');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stadium  $stadium
     * @return \Illuminate\Http\Response
     */
    public function destroy(stadium $stadium, $id)
    {
        //
        $stadium = stadium::find($id);
        $stadium->delete();
        return redirect('stadium');
    }
    public function updatestatus(stadium $stadium, Request $request)
    {
        $stadium->update($request->all());
        return redirect('stadium');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $data = stadium::where('timea', 'LIKE', '%' . $keyword . '%')->get();
        return view('control.stadium.search', compact('data', 'keyword'));
    }
}
