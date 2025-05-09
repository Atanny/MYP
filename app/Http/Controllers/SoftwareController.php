<?php

namespace App\Http\Controllers;

use App\Models\Software;
use App\Models\Software2;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function index()
    {
        return Software::all();
    }

    public function index2()
    {
        return Software2::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $response = Software::create($data);

        return response()->json([
            'status' => 'sucesss',
            'data'  => $response
        ], 200);
    
    }

    public function storeDev(Request $request)
    {
        $data = $request->all();

        $response = Software2::create($data);

        return response()->json([
            'status' => 'sucesss',
            'data'  => $response
        ], 200);
    
    }

}
