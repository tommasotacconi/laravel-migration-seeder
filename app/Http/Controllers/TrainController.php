<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //

  public function index() {
    // All trains data
    $trains = Train::all();
    return view('trains.trains-table', compact('trains'));
  }
}
