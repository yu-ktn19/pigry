@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<div>
    <div>
        <div>
            <h2>Weight Logを追加</h2>
        </div>
        <form action="">
        @csrf
        <div>
            <p>日付<span>必須</span></p>
            <input type="date" name="trip" value="">
        </div>
        <div>
            <p>体重<span>必須</span></p>
            <input type="number" name="current"  value="" />
            <span>kg</span>
        </div>
        <div>
            <p>摂取カロリー<span>必須</span></p>
            <input type="number" name=""  value="" />
            <span>cal</span>
        </div>
        <div>
            <p>運動時間<span>必須</span></p>
            <input type="time">
        </div>
        <div>
            <p>運動内容</p>
            <textarea id="" name="" placeholder="運動内容を追加">
            </textarea>
        </div>
        <div>
            <input type="submit" value="戻る" />
        </div>
        <div>
            <input type="submit" value="登録" />
        </div>
        </form>
    </div>
</div>
@endsection