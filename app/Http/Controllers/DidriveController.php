<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DidriveController extends Controller
{

    /**
     * Показ инфы о дидрайве showInfo
     *
     * @OA\Get(
     *     path="/api/didrive-info",
     *     tags={"didrive"},
     *     operationId="didriveInfo",
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     * )
     * @return \Illuminate\Http\Response
     */
    public function showInfo()
    {
        return response()->json([
            'version' => 0.1,
            'name' => 'Didrive',
        ]);
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
