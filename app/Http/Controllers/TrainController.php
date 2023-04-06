<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\train;

class TrainController extends Controller
{

  public function index()
  {
       $trains = train::all();
  }









}