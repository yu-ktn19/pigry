@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div>
    <div>
        <div>
            <h2>Weight Log</h2>
        </div>
        <form action="">
        @csrf
        <div>
            <p>日付</p>
            <input type="date" name="trip" value="">
        </div>
        <div>
            <p>体重</p>
            <input type="number" name="current"  value="" />
            <span>kg</span>
        </div>
        <div>
            <p>摂取カロリー</p>
            <input type="number" name=""  value="" />
            <span>cal</span>
        </div>
        <div>
            <p>運動時間</p>
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
            <input type="submit" value="更新" />
        </div>
        <div>
            <input type="submit" value="ゴミ" />
        </div>
        </form>
    </div>
</div>
@endsection