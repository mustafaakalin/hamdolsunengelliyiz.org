<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadmeController extends Controller
{



    public $orthopedics;
    public $spinalcord;
    public $vision;
    public $hearing;
    public $spastic;




    public function show()
    {


        $slug = request()->slug;


        $this -> orthopedics = \App\Models\Orthopedic::where('slug', $slug)->firstOrFail();
        $this -> spinalcord = \App\Models\Spinalcord::where('slug', $slug)->firstOrFail();
        $this -> vision = \App\Models\Vision::where('slug', $slug)->firstOrFail();
        $this -> hearing = \App\Models\Hearing::where('slug', $slug)->firstOrFail();
        $this -> spastic = \App\Models\Spastic::where('slug', $slug)->firstOrFail();



        return view('readme', [
            'orthopedic' => $this -> orthopedics,
            'spinalcord' => $this -> spinalcord,
            'vision' => $this -> vision,
            'hearing' => $this -> hearing,
            'spastic' => $this -> spastic,

        ]);

    }
}
