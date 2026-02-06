@extends('layouts.admin_base')
@section('title', 'アカウント編集')
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
                <a itemprop="item" href="/users" class="pankuzucontent">
                    <span itemprop="name">アカウント一覧</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>

            <!-- 3つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <span itemprop="name">アカウント編集</span>
                <meta itemprop="position" content="3" />
            </li>
        </ol>
    </div>
    <div class="contentHome">
        <div class="contentContainer">
        <h2>アカウント編集</h2>
        </div>

        <div class="HomeBox touroku">
            <section>
                <div>
                <form action="{{route('users.update', $user->id)}}" method="POST">
                @csrf
                @method('PUT')
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="name">名前</label>
                            @error('name')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="name" name="name" value="{{old('name', $user->name)}}" placeholder="例）山田太郎">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="name_kana">フリガナ</label>
                            @error('name_kana')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="name_kana" name="name_kana" value="{{old('name_kana', $user->name_kana)}}" placeholder="例）ヤマダタロウ">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="mail">メールアドレス</label>
                            @error('mail')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="email" id="mail" name="mail" value="{{old('mail',$user->email)}}" placeholder="例）example@gmail.com">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">任意</span>
                            <label class="signupLabel" for="password">パスワード（変更する場合のみ入力）</label>
                        </div>
                        <input class="signupInput" type="password" id="password" name="password" value="" placeholder="新しいパスワード" minlength="8">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="phone">電話番号</label>
                            @error('phone')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="tel" id="phone" name="phone" value="{{old('phone',$user->phone)}}" placeholder="例）00000000000" pattern="\d*">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="zipcode">郵便番号</label>
                            @error('zipcode')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="zipcode" name="zipcode" value="{{old('zipcode',$user->zipcode)}}" placeholder="例）0000000" pattern="\d*">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="prefecture">都道府県</label>
                            @error('prefecture')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <select class="signupSelect" name="prefecture">
                            <option value="">お選びください</option>
                            @foreach([
                                '北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
                                '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県',
                                '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県',
                                '静岡県', '愛知県', '三重県', '滋賀県', '京都府', '大阪府', '兵庫県',
                                '奈良県', '和歌山県', '鳥取県', '島根県', '岡山県', '広島県', '山口県',
                                '徳島県', '香川県', '愛媛県', '高知県', '福岡県', '佐賀県', '長崎県',
                                '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'
                            ] as $pref)
                                <option value="{{ $pref }}" {{ old('prefecture', $user->prefecture) == $pref ? 'selected' : '' }}>
                                    {{ $pref }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="city">市町村</label>
                            @error('city')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="city" name="city" value="{{old('city',$user->city)}}" placeholder="例）〇〇市〇〇区〇〇町">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="address">番地・アパート名</label>
                            @error('address')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="address" name="address" value="{{old('address',$user->address)}}" placeholder="例）〇丁目〇〇-〇〇 〇〇アパート〇号室">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <label class="signupLabel" for="remarks">備考欄</label>
                        </div>
                        <textarea class="signupRemarks" id="remarks" name="remarks">{{old('remarks',$user->remarks)}}</textarea>
                    </div>
                    <div class="signupContainer">
                        <button type="submit" class="signupButton">更新する</button>
                    </div>
                </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
