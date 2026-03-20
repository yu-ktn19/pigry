@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register1.css') }}">
@endsection

@section('content')
<div>
    <h2>新規会員登録</h2>
    <p>STEP1 アカウント情報の登録</p>
</div>
<form action="/register/step2" method="post">
@csrf
    <div>
        <p>お名前</p>
        <input type="text" name="name" placeholder="名前を入力" value="" />
    </div>
    <div>
        <p>メールアドレス</p>
        <input type="email" name="email" placeholder="メールアドレスを入力" value="" />
    </div>
    <div>
        <p>パスワード</p>
        <input type="password" name="password" placeholder="パスワードを入力" value="" />
    </div>
    <div>
        <input  type="submit" value="次に進む">
    </div>
    <div>
        <a href="/login">ログインはこちら</a>
    </div>
</form>
@endsection