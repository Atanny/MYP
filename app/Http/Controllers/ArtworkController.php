<?php

namespace App\Http\Controllers;
use App\Models\artwork;

use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index()
    {
        return artwork::all();
    }


    public function store(Request $request){
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('artworks', 'public');
        }

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoPath = $video->store('videos', 'public');  // Store video
            $data['video'] = $videoPath;  // Save video path in the database
        }


        $response = artwork::create($data);
    
        return response()->json([
            'status' => 'sucesss',
            'data'  => $response
        ], 200);
    }
}
