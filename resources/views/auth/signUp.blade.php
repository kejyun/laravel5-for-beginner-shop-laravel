<!-- 檔案目錄：resources/views/auth/signUp.blade.php -->

<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        {{-- 錯誤訊息模板元件 --}}
        @include('components.validationErrorMessage')

        <div class="row">
            <div class="col-md-12">
                <form action="/user/auth/sign-up" method="post">
                    <div class="form-group">
                        <label for="nickname">暱稱</label>
                        <input type="text"
                               class="form-control"
                               id="nickname"
                               name="nickname"
                               placeholder="暱稱"
                               value="{{ old('nickname') }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="Email"
                               value="{{ old('email') }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">密碼</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="密碼"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">確認密碼</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password_confirmation"
                               placeholder="確認密碼"
                        >
                    </div>
                    <div class="form-group">
                        <label for="type">帳號類型</label>
                        <select class="form-control"
                                name="type"
                                id="type"
                        >
                            <option value="G"
                                    @if(old('type')=='G') selected @endif
                            >
                                一般會員
                            </option>
                            <option value="A"
                                    @if(old('type')=='A') selected @endif
                            >
                                管理者
                            </option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-default">註冊</button>

                    {{-- CSRF 欄位--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection