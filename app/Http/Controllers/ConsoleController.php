<?php

namespace App\Http\Controllers;

use App\Models\Console;
use App\Models\Image;
use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function index()
    {
        // Get all consoles with their manufacturers and generations
        $consoles = Console::with([
            'manufacturer',
            'generation',
            'models.primaryVariants.frontImages',
        ])->get();

        // Get console images through the variants > model_variants > model > consoles table
        // $consoleImages = Image::with([
        //     'imageType'
        // ])->where('type', 'console')->get();

        return view('consoles.index', [
            'consoles' => $consoles,
            // 'consoleImages' => $consoleImages
        ]);
    }

    public function show(Console $console)
    {
        return view('consoles.show', [
            'console' => $console
        ]);
    }
}
