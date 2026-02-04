@extends('layouts.admin_base')
@section('title', 'アカウント新規登録')
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
                <a itemprop="item" href="/users">
                    <span itemprop="name">アカウント一覧</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>

            <!-- 3つめ -->
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/users/create">
                    <span itemprop="name">アカウント新規登録</span>
                </a>
                <meta itemprop="position" content="3" />
            </li>
        </ol>
    </div>
    <div class="contentHome">
        <div class="contentContainer">
        <h2>アカウント新規登録</h2>
        </div>
    
        <div class="HomeBox touroku">
            <section>
                <div>
                <form action="{{route('users.store')}}"method="POST">
                    @csrf
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="name">名前</label>
                            @error('name')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="name" name="name" value="{{old('name')}}" placeholder="例）山田太郎">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="name_kana">フリガナ</label>
                            @error('name_kana')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="name_kana" name="name_kana" value="{{old('name_kana')}}" placeholder="例）ヤマダタロウ">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="mail">メールアドレス</label>
                            @error('mail')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="email" id="mail" name="mail" value="{{old('mail')}}" placeholder="例）example@gmail.com">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="password">パスワード</label>
                            @error('password')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="password" id="password" name="password" value="" placeholder="Password" minlength="8">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="phone">電話番号</label>
                            @error('phone')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="tel" id="phone" name="phone" value="{{old('phone')}}" placeholder="例）00000000000" pattern="\d*">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="zipcode">郵便番号</label>
                            @error('zipcode')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="zipcode" name="zipcode" value="{{old('zipcode')}}" placeholder="例）0000000" pattern="\d*">
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
                            <option id="prefecture" name="prefecture" value="" selected>お選びください</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
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
                        <input class="signupInput" type="text" id="city" name="city" value="{{old('city')}}" placeholder="例）〇〇市〇〇区〇〇町">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <span class="signupRequired">必須</span>
                            <label class="signupLabel" for="address">番地・アパート名</label>
                            @error('address')
                                <span class="errorMessage">{{$message}}</span>
                            @enderror
                        </div>
                        <input class="signupInput" type="text" id="address" name="address" value="{{old('address')}}" placeholder="例）〇丁目〇〇-〇〇 〇〇アパート〇号室">
                    </div>
                    <div class="signupContainer">
                        <div class="signupItem">
                            <label class="signupLabel" for="remarks">備考欄</label>
                        </div>
                        <textarea class="signupRemarks" id="remarks" name="remarks">{{old('remarks')}}</textarea>
                    </div>
                    <div class="signupContainer">
                        <button type="submit" class="signupButton">登録する</button>
                    </div>
                </form>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection