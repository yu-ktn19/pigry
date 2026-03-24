@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/setting.css') }}">
@endsection

@section('content')
<div>
    <div>
        <h2>目標体重設定</h2>
    </div>
    <form action="">
     @csrf
    <div>
        <input type="number" name=""  value="" />
        <span>kg</span>
    </div>
    <div>
        <input type="submit" value="戻る" />
    </div>
    <div>
        <input type="submit" value="更新" />
    </div>
    </form>
</div>
@endsection