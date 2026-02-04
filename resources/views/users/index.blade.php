@extends('layouts.admin_base')
@section('title', 'アカウント一覧')
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
                <a itemprop="item" href="/users" class="pankuzucontent">
                    <span itemprop="name">アカウント一覧</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>

            <!-- 3つめ -->
            <!-- <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="子カテゴリーのURL" class="pankuzucontent">
                    <span itemprop="name">子カテゴリー名</span>
                </a>
                <meta itemprop="position" content="3" />
            </li> -->
        </ol>
    </div>
    <div class="contentHome">
        <div class="contentContainer">
            <h2>HOME</h2>
            <a href="{{route('users.create')}}">
                <button class="btn_signup">
                    <i class="fa fa-plus" aria-hidden="true"></i>新規登録
                 </button>
            </a>
        </div>
        <div class="HomeBox">
            <div class="adminTableArea">
                <table class="table">
                    <thead class="tableThead">
                        <tr>
                            <th scope="col">編集</th>
                            <th scope="col">名前</th>
                            <th scope="col">メールアドレス</th>
                            <th scope="col">電話番号</th>
                            <th scope="col">都道府県</th>
                            <th scope="col">市町村</th>
                            <th scope="col">番地・アパート名</th>
                        </tr>
                    </thead>
                    <tbody class="tableTbody">
                        @foreach($users as $user)
                        <tr>
                            <td><a href="{{route('users.edit',$user->id)}}" class="tableCreateLink">編集</a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->prefecture}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->address}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection