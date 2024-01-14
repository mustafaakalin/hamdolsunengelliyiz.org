<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use App\Models\Hearing;
use App\Models\Spastic;
use App\Models\Orthopedic;
use App\Models\Spinalcord;
use Illuminate\Http\Request;

class ReadmeController extends Controller
{



    public $orthopedic;
    public $spinalcord;
    public $vision;
    public $hearing;
    public $spastic;








    public function show($slug)
    {
        // dd(request()->route()->parameters());


        $this ->orthopedic = Orthopedic::where('slug',$slug)->get();
        $this ->spinalcord = Spinalcord::where('slug',$slug)->get();
        $this ->vision = Vision::where('slug',$slug)->get();
        $this ->hearing = Hearing::where('slug',$slug)->get();
        $this ->spastic = Spastic::where('slug',$slug)->get();


        return view('readme', [
            'orthopedic' => $this ->orthopedic,
            'spinalcord' => $this ->spinalcord,
            'vision' => $this ->vision,
            'hearing' => $this ->hearing,
            'spastic' => $this ->spastic,
        ]);

    }
}
