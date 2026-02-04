@extends('layouts.user_base')
@section('title','送信完了')
@section('content')

    <section class="send">
        <div class="contactMainBox">
            <div class="sendMessageBox">
                <p class="sendMessageText">送信完了しました。</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">会社名:{{$contact->company}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">氏名:{{$contact->name}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">電話番号:{{$contact->phone}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">メールアドレス:{{$contact->mail}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">生年月日:{{$contact->birthday}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">性別:{{$contact->sex}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">職業:{{$contact->job}}</p>
            </div>
            <div class="sendContentItem">
                <p class="sendMessageText">お問い合わせ内容:{{$contact->contact}}</p>
            </div>

            <a href="{{route('contact.index')}}" class="submitButton">戻る</a>
        </div>
    </section>
@endsection