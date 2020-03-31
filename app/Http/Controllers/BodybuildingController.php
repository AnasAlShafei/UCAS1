<?php

namespace App\Http\Controllers;

use App\bodybuilding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BodybuildingController extends Controller
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
        $data = bodybuilding::all();
        return view('control.Bodybuilding.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = bodybuilding::all();
        return view('control.Bodybuilding.create', compact('data'));
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
            'name_machine' => $request->name_machine,
            'timea' => $request->timea,
            'timeb' => $request->timeb,
            'status' => $status,
            'user_id' => $user_id,
        ];
        bodybuilding::create($data);
        return redirect("Bodybuilding");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bodybuilding  $bodybuilding
     * @return \Illuminate\Http\Response
     */
    public function show(bodybuilding $bodybuilding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bodybuilding  $bodybuilding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = bodybuilding::find($id);
        return view('control.Bodybuilding.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bodybuilding  $bodybuilding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $status = "0";
        $user_id = Auth::user()->id;
        $data = [
            'name_machine' => $request->name_machine,
            'timea' => $request->timea,
            'timeb' => $request->timeb,
            'status' => $status,
            'user_id' => $user_id,
        ];
        bodybuilding::where('id', $id)->update($data);
        return redirect('Bodybuilding');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bodybuilding  $bodybuilding
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Bodybuilding = bodybuilding::find($id);
        $Bodybuilding->delete();
        return redirect('Bodybuilding');
    }
    public function updatestatus(bodybuilding $bodybuilding, Request $request)
    {
        $bodybuilding->update($request->all());
        return redirect('Bodybuilding');
    }
    public function search(Request $request)
    {
        if (Auth::user()->id != 1) {
            return redirect('Bodybuilding');
        } else {
            $keyword = $request->input('search');
            $data = bodybuilding::where('timea', 'LIKE', '%' . $keyword . '%')->get();
            return view('control.Bodybuilding.search', compact('data', 'keyword'));
        }
    }
}
