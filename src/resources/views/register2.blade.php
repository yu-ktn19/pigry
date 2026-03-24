@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register2.css') }}">
@endsection

@section('content')
<div>
    <h2>新規会員登録</h2>
    <p>STEP2 体重データの入力</p>
</div>
<form action="/login" method="post">
@csrf
    <div>
        <p>現在の体重</p>
        <input type="number" name="weight" placeholder="現在の体重を入力" value="" />
        <span>kg</span>
        @if ($errors->has('weight'))
            @foreach ($errors->all() as $error)
                <li>{{$error->get('weight')}}</li>
            @endforeachr
        @endif
    </div>
    <div>
        <p>目標の体重</p>
        <input type="number" name="target_weight" placeholder="目標の体重を入力" value="" />
        <span>kg</span>
        @if ($errors->has('target_weight'))
            @foreach ($errors->all() as $error)
                <li>{{$error->get('target_weight')}}</li>
            @endforeachr
        @endif
    </div>
    <div>
        <input type="hidden"  name="name" value="{{ $contact['name'] }}" />
        <input type="hidden"  name="email" value="{{ $contact['email'] }}" />
        <input type="hidden"  name="password" value="{{ $contact['password'] }}" />
    </div>
    <div> 
        <input  type="submit" value="アカウント作成">
    </div>
</form>
@endsection