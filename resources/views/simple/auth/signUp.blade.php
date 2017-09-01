<!-- 檔案目錄：resources/views/auth/signUp.blade.php -->

<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

<!-- 傳送資料到母模板，並指定變數為 title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>
        @include('components.validationErrorMessage')
        <form action="/user/auth/sign-up" method="post">
            <label>
                暱稱：
                <input type="text"
                       name="nickname"
                       placeholder="暱稱"
                       value="{{ old('nickname') }}"
                >
            </label>

            <label>
                Email：
                <input type="text"
                       name="email"
                       placeholder="Email"
                       value="{{ old('email') }}"
                >
            </label>

            <label>
                密碼：
                <input type="password"
                       name="password"
                       placeholder="密碼"
                >
            </label>

            <label>
                確認密碼：
                <input type="password"
                       name="password_confirmation"
                       placeholder="確認密碼"
                >
            </label>
            <label>
                帳號類型：
                <select name="type">
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
            </label>

            <button type="submit">註冊</button>
            {{ csrf_field() }}
        </form>
    </div>
@endsection