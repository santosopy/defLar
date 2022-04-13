<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json( Reserve::all() );
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
        $reserve = new Reserve;
        $reserve->name = $request->name;
        $reserve->price = $request->price;
        $reserve->save();

        return response()->json([
            "message"=> "added"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserve = Reserve::find($id);
        if(!empty($reserve)){
            return response()->json($reserve);
        }
        else{
            return response()->json([
                "message"=> "not found"
            ], 404);
        }
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
        if( Reserve::where("id", $id)->exists() ){
            $reserve = Reserve::find($id);
            $reserve->name = is_null($request->name) ? $reserve->name : $request->name;
            $reserve->price = is_null($request->price) ? $reserve->price : $request->price;
            $reserve->save();

            return response()->json([
                "message"=> "update"
            ], 404);
        }
        else{
            return response()->json([
                "message"=> "not round"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Reserve::where("id", $id)->exists() ){
            $reserve = Reserve::find($id);
            $request->delete();

            return response()->json([
                "message"=> "deleted"
            ], 202);
        }
        else{
            return response()->json([
                "message"=> "not found"
            ], 404);
        }
    }
}
