<!-- 檔案目錄：resources/views/merchandise/editMerchandise.blade.php -->

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
                <form action="/merchandise/{{ $Merchandise->id }}"
                      method="post"
                      enctype="multipart/form-data"
                >
                    {{-- 隱藏方法欄位 --}}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="type">{{ trans('shop.merchandise.fields.status-name') }}</label>
                        <select class="form-control"
                                name="status"
                                id="status"
                        >
                            <option value="C"
                                    @if(old('status', $Merchandise->status)=='C') selected @endif
                            >
                                {{ trans('shop.merchandise.fields.status.create') }}
                            </option>
                            <option value="S"
                                    @if(old('status', $Merchandise->status)=='S') selected @endif
                            >
                                {{ trans('shop.merchandise.fields.status.sell') }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('shop.merchandise.fields.name') }}</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="{{ trans('shop.merchandise.fields.name') }}"
                               value="{{ old('name', $Merchandise->name) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="name_en">{{ trans('shop.merchandise.fields.name-en') }}</label>
                        <input type="text"
                               class="form-control"
                               id="name_en"
                               name="name_en"
                               placeholder="{{ trans('shop.merchandise.fields.name-en') }}"
                               value="{{ old('name_en', $Merchandise->name_en) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="introduction">{{ trans('shop.merchandise.fields.introduction') }}</label>
                        <input type="text"
                               class="form-control"
                               id="introduction"
                               name="introduction"
                               placeholder="{{ trans('shop.merchandise.fields.introduction') }}"
                               value="{{ old('introduction', $Merchandise->introduction) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="introduction_en">{{ trans('shop.merchandise.fields.introduction-en') }}</label>
                        <input type="text"
                               class="form-control"
                               id="introduction_en"
                               name="introduction_en"
                               placeholder="{{ trans('shop.merchandise.fields.introduction-en') }}"
                               value="{{ old('introduction_en', $Merchandise->introduction_en) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="photo">{{ trans('shop.merchandise.fields.photo') }}</label>
                        <input type="file"
                               class="form-control"
                               id="photo"
                               name="photo"
                               placeholder="{{ trans('shop.merchandise.fields.photo') }}"
                        >
                        <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                    </div>

                    <div class="form-group">
                        <label for="price">{{ trans('shop.merchandise.fields.price') }}</label>
                        <input type="text"
                               class="form-control"
                               id="price"
                               name="price"
                               placeholder="{{ trans('shop.merchandise.fields.price') }}"
                               value="{{ old('price', $Merchandise->price) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="remain_count">{{ trans('shop.merchandise.fields.remain-count') }}</label>
                        <input type="text"
                               class="form-control"
                               id="remain_count"
                               name="remain_count"
                               placeholder="{{ trans('shop.merchandise.fields.remain-count') }}"
                               value="{{ old('remain_count', $Merchandise->remain_count) }}"
                        >
                    </div>
                    <button type="submit" class="btn btn-default">{{ trans('shop.merchandise.update') }}</button>
                    {{-- CSRF 欄位--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection