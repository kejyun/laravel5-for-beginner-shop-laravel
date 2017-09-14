<!-- 檔案目錄：resources/views/merchandise/listMerchandise.blade.php -->

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
                <table class="table">
                    <tr>
                        <th>{{ trans('shop.merchandise.fields.name') }}</th>
                        <th>{{ trans('shop.merchandise.fields.photo') }}</th>
                        <th>{{ trans('shop.merchandise.fields.price') }}</th>
                        <th>{{ trans('shop.merchandise.fields.remain-count') }}</th>
                    </tr>
                    @foreach($MerchandisePaginate as $Merchandise)
                        <tr>
                            <td>
                                <a href="/merchandise/{{ $Merchandise->id }}">
                                    {{ $Merchandise->name }}
                                </a>
                            </td>
                            <td>
                                <a href="/merchandise/{{ $Merchandise->id }}">
                                    <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                                </a>
                            </td>
                            <td> {{ $Merchandise->price }}</td>
                            <td> {{ $Merchandise->remain_count }}</td>
                        </tr>
                    @endforeach
                </table>

                {{-- 分頁頁數按鈕 --}}
                {{ $MerchandisePaginate->links() }}
            </div>
        </div>
    </div>
@endsection