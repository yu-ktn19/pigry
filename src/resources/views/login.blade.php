@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div>
    <h2>ログイン</h2>
</div>
<form action="/weight_logs" action="post">
    <div>
        <p>メールアドレス</p>
        <input type="email" name="email" placeholder="メールアドレスを入力" value="" />
    </div>
    <div>
        <p>パスワード</p>
        <input type="password" name="password" placeholder="パスワードを入力" value="" />
    </div>
    <div>
        <button>ログイン</button>
    </div>
    <div>
        <a href="/register/step1">アカウント作成はこちら</a>
    </div>
</form>
@endsection