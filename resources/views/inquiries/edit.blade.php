@extends('layouts.admin_base')
@section('title', 'お問い合わせ詳細')
@section('content')
<div>
    <div class="pankuzu">
        <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="pankuzulist">
            <!-- 1つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="http://localhost:8000/admin" class="pankuzucontent">
                    <span itemprop="name">TOP</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>

            <!-- 2つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="">
                    <span itemprop="name">お問い合わせ一覧</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>

            <!-- 3つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="子カテゴリーのURL">
                    <span itemprop="name">お問い合わせ詳細</span>
                </a>
                <meta itemprop="position" content="3" />
            </li>
        </ol>
    </div>
    <div class="contentHome">
        <h2>HOME</h2>
    
        <div class="HomeBox">
            <div class="HomeTitleBox">
                <h3 class="HomeTitle">アカウント</h3>
                <a href="">アカウント一覧</a>
            </div>
            <div class="HomeTitleBox">
                <h3 class="HomeTitle">お問い合わせ</h3>
                <a href="">お問い合わせ一覧</a>
            </div>
        </div>
    </div>
</div>
@endsection