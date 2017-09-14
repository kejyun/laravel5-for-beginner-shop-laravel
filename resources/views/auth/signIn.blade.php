<!-- 檔案目錄：resources/views/auth/signIn.blade.php -->

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
                <form action="/user/auth/sign-in" method="post">
                    <div class="form-group">
                        <label for="email">{{ trans('shop.user.fields.email') }}</label>
                        <input type="text"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="{{ trans('shop.user.fields.email') }}"
                               value="{{ old('email') }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">{{ trans('shop.user.fields.password') }}</label>
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="{{ trans('shop.user.fields.password') }}"
                        >
                    </div>

                    <button type="submit" class="btn btn-default">{{ trans('shop.auth.sign-in') }}</button>

                    {{-- CSRF 欄位--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection