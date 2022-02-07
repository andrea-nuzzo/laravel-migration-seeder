<?php

namespace App\Http\Controllers;

//Collego il controller al modello
use App\travel_package;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Assegno ad una variabile tutta la tabella del DB travel_packages
        $travel_package = travel_package::all();

        return view ('home', compact("travel_package"));
    }
}
