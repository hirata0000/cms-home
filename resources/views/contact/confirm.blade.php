@extends('layouts.user_base')
@section('title','内容確認')
@section('content')

    <section class="confirm">
        <div class="contactMainBox">
            <div class="dataContentItem">
                <p class="dataContentItemP">会社名:{{ $contact['company'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">氏名:{{ $contact['name'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">電話番号:{{ $contact['phone'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">メールアドレス:{{ $contact['mail'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">生年月日:{{ $contact['birthday'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">性別:{{ $contact['sex'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">職業:{{ $contact['job'] }}</p>
            </div>
            <div class="dataContentItem">
                <p class="dataContentItemP">お問い合わせ内容:{{ $contact['contact'] }}</p>
            </div>

            <form action="{{route('contact.send')}}" method="POST">
                @csrf
                    @foreach ($contact as $key => $value)
                    <input type="hidden" name="{{$key}}" value="{{$value}}">
                    @endforeach
                <button type="submit" class="submitButton">送信する</button>
            </form>
            <button type="button" class="submitButton" onclick="history.back()">戻る</button>
        </div>
    </section>
@endsection
