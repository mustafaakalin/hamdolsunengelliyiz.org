<?php

namespace App\View\Components;

use App\Models\Orthopedic;
use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class readme extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $name = Str::slug(request()->parameter('name'));
        $title = Str::slug(request()->parameter('title'));

        $orthopedic = Orthopedic::where('name', $name)->where('title', $title)->first()

        
        if ($name.'-'.$title == Str::slug($orthopedic->name).'-'.Str::slug($orthopedic->title)) {
            return view('components.readme', compact('orthopedics'));
        }
        // tüm verileri çek
        $ortho = \App\Models\Orthopedic::all();

        // verileri tek tek çek
        $ortopedik = \App\Models\Orthopedic::where('name', $name)->first();
        return view('components.readme', compact('ortho', 'ortopedik'));
    }
}
