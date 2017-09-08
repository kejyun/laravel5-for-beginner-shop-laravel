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
                        <label for="type">商品狀態</label>
                        <select class="form-control"
                                name="status"
                                id="status"
                        >
                            <option value="C"
                                    @if(old('status', $Merchandise->status)=='C') selected @endif
                            >
                                建立中
                            </option>
                            <option value="S"
                                    @if(old('status', $Merchandise->status)=='S') selected @endif
                            >
                                可販售
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">商品名稱</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="商品名稱"
                               value="{{ old('name', $Merchandise->name) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="name_en">商品英文名稱</label>
                        <input type="text"
                               class="form-control"
                               id="name_en"
                               name="name_en"
                               placeholder="商品英文名稱"
                               value="{{ old('name_en', $Merchandise->name_en) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="introduction">商品介紹</label>
                        <input type="text"
                               class="form-control"
                               id="introduction"
                               name="introduction"
                               placeholder="商品介紹"
                               value="{{ old('introduction', $Merchandise->introduction) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="introduction_en">商品英文介紹</label>
                        <input type="text"
                               class="form-control"
                               id="introduction_en"
                               name="introduction_en"
                               placeholder="商品英文介紹"
                               value="{{ old('introduction_en', $Merchandise->introduction_en) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="photo">商品照片</label>
                        <input type="file"
                               class="form-control"
                               id="photo"
                               name="photo"
                               placeholder="商品照片"
                        >
                        <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                    </div>

                    <div class="form-group">
                        <label for="price">商品價格</label>
                        <input type="text"
                               class="form-control"
                               id="price"
                               name="price"
                               placeholder="商品價格"
                               value="{{ old('price', $Merchandise->price) }}"
                        >
                    </div>
                    <div class="form-group">
                        <label for="remain_count">商品剩餘數量</label>
                        <input type="text"
                               class="form-control"
                               id="remain_count"
                               name="remain_count"
                               placeholder="商品剩餘數量"
                               value="{{ old('remain_count', $Merchandise->remain_count) }}"
                        >
                    </div>
                    <button type="submit" class="btn btn-default">更新商品資訊</button>
                    {{-- CSRF 欄位--}}
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection