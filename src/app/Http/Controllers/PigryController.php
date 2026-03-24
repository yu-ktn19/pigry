<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PigryRequest;
use App\Http\Requests\WeightRequest;
use App\Http\Requests\ContactRequest;
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

   public function create1(PigryRequest $request) 
   {
        
      return view('register1');
   }

   public function create2(WeightRequest $request)
   {
      $contact = $request->only(['name', 'email', 'password']);
      return view('register2',compact('contact'));
   }

   public function store(Request $request)
   {
      $contact = $request->only(['name', 'email', 'password']);
      $weight = $request->only(['weight']);
      $target = $request->only(['target_weight']);
      User::create($contact);
      WeightLog::create($weight);
      WeightTarget::create($target);
      return view('login');
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

   public function create6(ContactRequest $request)
   {
        
      return view('create');
   }
}
