<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Train;

class TrainListController extends Controller
{
    public function getTrainsFromDatabase() {
        $trains = Train::where('departure_date', '=', '2022/09/29')->get();
        return view('trains_list', compact('trains'));
    }
}