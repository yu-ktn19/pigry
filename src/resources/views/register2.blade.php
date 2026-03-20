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
        <input type="number" name="current" placeholder="現在の体重を入力" value="" />
        <span>kg</span>
    </div>
    <div>
        <p>目標の体重</p>
        <input type="number" name="goal" placeholder="目標の体重を入力" value="" />
        <span>kg</span>
    </div>
    <div> 
        <input  type="submit" value="アカウント作成">
    </div>
</form>
@endsection