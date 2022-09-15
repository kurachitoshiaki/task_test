@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        氏名
                        <input type="text" name="your_name">
                        <br>
                        件名
                        <input type="text" name="title">
                        <br>
                        メールアドレス
                        <input type="email" name="email">
                        <br>
                        ホームページ
                        <input type="url" name="url">
                        <br>
                        性別
                        <input type="radio" name="gender" value="0">男性</input>
                        <input type="radio" name="gender" value="1">女性</input>
                        <br>
                        年齢
                        <select name=age>
                            <option value="">選択してください</option>
                            @for($i = 0;$i <= 100; $i++)
                            <option value="{{$i}}">{{$i}}歳</option>
                            @endfor
                        </select>
                        <br>
                        お問い合わせ内容
                        <br>
                        <textarea name="contact"></textarea>
                        <br>
                        <input type="checkbox" name="caution" value="1">注意事項に同意する
                        <br>
                        <input class="btn btn-info" type="submit" value="登録する">
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
