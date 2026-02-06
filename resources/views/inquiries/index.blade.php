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
                <span itemprop="name">お問い合わせ一覧</span>
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
            <h2>お問い合わせ一覧</h2>
        </div>

        <div class="HomeBox">
            <div class="adminTableArea">
                <table class="table">
                    <thead class="tableThead">
                        <tr>
                            <th scope="col">編集</th>
                            <th scope="col">ステータス</th>
                            <th scope="col">会社名</th>
                            <th scope="col">氏名</th>
                            <th scope="col">電話番号</th>
                        </tr>
                    </thead>
                    <tbody class="tableTbody">
                        @foreach($contacts as $contact)
                        <tr>
                            <td><a href="{{route('inquiries.edit',$contact->id)}}" class="tableCreateLink">編集</a></td>
                            <td>{{$contact->status}}</td>
                            <td>{{$contact->company}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="nextPage">
            {{ $contacts->links() }}
        </div>
    </div>
</div>
@endsection
