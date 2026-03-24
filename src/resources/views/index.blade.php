@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div>
    <div class="weight-summary">
        <div class="weight-summary__item">
            <p class="weight-summary__label">目標体重</p>
            <p class="weight-summary__value">
                {{ old('name', $fruit->name) }} <span class="weight-summary__unit">kg</span>
            </p>
        </div>

        <div class="weight-summary__divider"></div>

         <div class="weight-summary__item">
            <p class="weight-summary__label">目標まで</p>
            <p class="weight-summary__value">
                 -1.5 <span class="weight-summary__unit">kg</span>
            </p>
        </div>

        <div class="weight-summary__divider"></div>

        <div class="weight-summary__item">
            <p class="weight-summary__label">最新体重</p>
            <p class="weight-summary__value">
                46.5 <span class="weight-summary__unit">kg</span>
            </p>
        </div>
    </div>
    <div>
        <div>
            <input type="date" name="trip-start" value="">
            <span>~</span>
            <input type="date" name="trip" value="">
        </div>
        <div>
            <input type="submit" value="検索">
        </div>
        <div>
            <!--if文を書く。リセット-->
        </div>
        
        <div>
            <button>データを追加</button>
        </div>
        <div>
            <!--if文を書く。ヒット件数-->
        </div>
        <div>
            <table>
                <tr>
                    <th>日付</th>
                    <th>体重</th>
                    <th>食事摂取カロリー</th>
                    <th>運動時間</th>
                </tr>
                <!--foreach文を書く。-->
                <tr>
                    <td>年/月/日</td>
                    <td>〇〇.○kg</td>
                    <td>〇〇○○col</td>
                    <td>時間：分 
                        <button>
                            <a href="">✏</a>
                        </button>
                    </td>
                </tr>
            </table>
            <!--ベネジデーション8件。-->
        </div>
    </div>
</div>
@endsection