@extends('layouts.admin_base')
@section('title', '管理画面TOP')
@section('content')
<div>
    <div class="pankuzu">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="pankuzulist">
            <!-- 1つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/admin" class="pankuzucontent">
                    <span itemprop="name">TOP</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <!-- 2つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/inquiries" class="pankuzucontent">
                    <span itemprop="name">お問い合わせ一覧</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>

            <!-- 3つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="name">お問い合わせ詳細</span>
                <meta itemprop="position" content="3" />
            </li>
        </ol>
    </div>
    @if (session('message'))
    <div class="updateMessage">
        {{ session('message') }}
    </div>
    @endif
    <div class="contentHome">

        <div class="contentContainer">
            <h2>お問い合わせ詳細</h2>
        </div>

        <div class="inquiryBox">
            <form action="{{ route('inquiries.update', $contact['id']) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="inquiryEditContainer">
                <div class="inquiryEditTitle">
                    <label>ステータス</label>
                </div>
                <div class="inquiryEditItem">
                    <select name="status" class="inquiryBoxItem">
                    <option value="未対応" {{ $contact->status == '未対応' ? 'selected' : '' }}>未対応</option>
                    <option value="対応中" {{ $contact->status == '対応中' ? 'selected' : '' }}>対応中</option>
                    <option value="完了" {{ $contact->status == '完了' ? 'selected' : '' }}>完了</option>
                </select>
                </div>
            </div>
            <div class="inquiryEditContainer">
                <div class="inquiryEditTitle">
                    <label>お問い合わせ内容</label>
                </div>
                <div class="inquiryEditItem">
                    <label>{{ $contact['contact'] }}</label>
                </div>
            </div>
            <div class="inquiryEditContainer">
                <div class="inquiryEditTitle">
                    <label>備考欄</label>
                </div>
                <div class="inquiryEditItem">
                    <textarea name="remarks" class="inquiryEditText">{{ $contact['remarks'] }}</textarea>
                </div>
            </div>
            <div class="inquiryEditContainer">
                <div class="inquiryEditTitle">
                    <label>お問い合わせ情報</label>
                </div>
                <div class="inquiryEditItem">
                    <label>会社名：{{ $contact['company'] }}</label>
                    <label>氏名：{{ $contact['name'] }}</label>
                    <label>電話番号：{{ $contact['phone'] }}</label>
                    <label>メールアドレス：{{ $contact['mail'] }}</label>
                    <label>生年月日：{{ $contact['birthday'] }}</label>
                    <label>性別：{{ $contact['sex'] }}</label>
                    <label>職業：{{ $contact['job'] }}</label>
                </div>
            </div>

            <div class="inquiryEditContainer">
                <button type="submit" class="submitButton">登録する</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
