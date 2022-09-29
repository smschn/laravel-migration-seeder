<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class TrainListController extends Controller
{
    public function getTrainsFromDatabase() {
        $trains = Train::all();
        return view('trains_list', compact('trains'));
    }
}