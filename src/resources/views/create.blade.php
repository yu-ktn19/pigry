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
            <input type="date" name="date" value="">
            @if ($errors->has('date'))
                 @foreach ($errors->all() as $error)
                    <li>{{$error->first('date')}}</li>
                 @endforeachr
            @endif
        </div>
        <div>
            <p>体重<span>必須</span></p>
            <input type="number" name="body_weight"  value="" />
            <span>kg</span>
            @if ($errors->has('body_weight'))
                 @foreach ($errors->all() as $error)
                    <li>{{$error->get('body_weight')}}</li>
                 @endforeachr
            @endif
        </div>
        <div>
            <p>摂取カロリー<span>必須</span></p>
            <input type="number" name="calorie"  value="" />
            <span>cal</span>
            @if ($errors->has('calorie'))
                 @foreach ($errors->all() as $error)
                    <li>{{$error->get('calorie')}}</li>
                 @endforeachr
            @endif
        </div>
        <div>
            <p>運動時間<span>必須</span></p>
            <input type="time" name="time">
            @if ($errors->has('time'))
                 @foreach ($errors->all() as $error)
                    <li>{{$error->first('time')}}</li>
                 @endforeachr
            @endif
        </div>
        <div>
            <p>運動内容</p>
            <textarea id="" name="contact" placeholder="運動内容を追加">
            </textarea>
            @if ($errors->has('contact'))
                 @foreach ($errors->all() as $error)
                    <li>{{$error->first('contact')}}</li>
                 @endforeachr
            @endif
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