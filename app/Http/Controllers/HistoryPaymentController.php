<?php

namespace App\Http\Controllers;

use App\Models\HistoryPayment;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;

class HistoryPaymentController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $history= HistoryPayment::where('user_id',auth('api')->user()->id)->paginate(10);
        return response()->json($history,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $history= HistoryPayment::create($request->all());
        return response()->json($history,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $history= HistoryPayment::find($id);
        return response()->json($history,200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $history= HistoryPayment::find($id)->update($request->all());
        return response()->json($history,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $history= HistoryPayment::find($id)->delete();
        return response()->json($history,200);
    }
}
