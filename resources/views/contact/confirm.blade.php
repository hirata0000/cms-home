@extends('layouts.user_base')
@section('title','内容確認')
@section('content')

    <section class="confirm">
        <div class="contactMainBox">
            <div class="dataContentItem">
                <p class="dataContentItemP">会社名:〇〇株式会社</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">氏名</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">電話番号</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">メールアドレス</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">生年月日</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">性別</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">職業</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">お問い合わせ内容</p>
            </div>

            <form action="{{route('contact.send')}}" method="POST">
                @csrf
                    @foreach ($validated as $key => $value)
                    <input type="hidden" name="{{$key}}" value="{{$value}}">
                    @endforeach
                <button type="submit" class="submitButton">送信する</button>
            </form>
            <button type="button" class="submitButton" onclick="history.back()">戻る</button>
        </div>
    </section>
@endsection
