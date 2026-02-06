@extends('layouts.admin_base')
@section('title', '管理画面TOP')
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
            <!-- <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="">
                    <span itemprop="name">カテゴリー名</span>
                </a>
                <meta itemprop="position" content="2" />
            </li> -->

            <!-- 3つめ -->
            <!-- <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="子カテゴリーのURL">
                    <span itemprop="name">子カテゴリー名</span>
                </a>
                <meta itemprop="position" content="3" />
            </li> -->
        </ol>
    </div>
    <div class="contentHome">
        
        <div class="contentContainer">
            <h2>HOME</h2>
        </div>
    
        <div class="HomeBox">
            <div class="HomeTitleBox">
                <h3 class="HomeTitle">アカウント</h3>
                <a href="/users">アカウント一覧</a>
            </div>
            <div class="HomeTitleBox">
                <h3 class="HomeTitle">お問い合わせ</h3>
                <a href="/inquiries">お問い合わせ一覧</a>
            </div>
        </div>
    </div>
</div>
@endsection