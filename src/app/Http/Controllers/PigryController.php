<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightTarget;
use App\Models\WeightLog;

class PigryController extends Controller
{
    public function index(Request $request)
   {
      $users = User::all();
      $weighttargets = WeightTarget::all();
      $weightlogs = WeightLog::all();
      return view('index', compact('users', 'weighttargets', 'weightlogs'));
   }

   public function create1()
   {
        
      return view('register1');
   }

   public function create2()
   {
        
      return view('register2');
   }

   public function create3()
   {
        
      return view('login');
   }

   public function create4()
   {
        
      return view('detail');
   }

   public function create5()
   {
        
      return view('setting');
   }

   public function create6()
   {
        
      return view('create');
   }
}
