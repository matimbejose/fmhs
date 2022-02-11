<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
  public function index(){
      return view("Schedules.index");
  }

  public function edit() {
      return view("Schdeules.edit");
  }
}
