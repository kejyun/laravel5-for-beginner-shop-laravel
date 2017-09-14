<!-- 檔案目錄：resources/views/merchandise/manageMerchandise.blade.php -->

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
                        <th>{{ trans('shop.merchandise.fields.id') }}</th>
                        <th>{{ trans('shop.merchandise.fields.name') }}</th>
                        <th>{{ trans('shop.merchandise.fields.photo') }}</th>
                        <th>{{ trans('shop.merchandise.fields.status-name') }}</th>
                        <th>{{ trans('shop.merchandise.fields.price') }}</th>
                        <th>{{ trans('shop.merchandise.fields.remain-count') }}</th>
                        <th>{{ trans('shop.merchandise.edit') }}</th>
                    </tr>
                    @foreach($MerchandisePaginate as $Merchandise)
                        <tr>
                            <td> {{ $Merchandise->id }}</td>
                            <td> {{ $Merchandise->name }}</td>
                            <td>
                                <img src="{{ $Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                            </td>
                            <td>
                                @if($Merchandise->status == 'C')
                                    <span class="label label-default">
                                        {{ trans('shop.merchandise.fields.status.create') }}
                                    </span>
                                @else
                                    <span class="label label-success">
                                        {{ trans('shop.merchandise.fields.status.sell') }}
                                    </span>
                                @endif
                            </td>
                            <td> {{ $Merchandise->price }}</td>
                            <td> {{ $Merchandise->remain_count }}</td>
                            <td>
                                <a href="/merchandise/{{ $Merchandise->id }}/edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{-- 分頁頁數按鈕 --}}
                {{ $MerchandisePaginate->links() }}
            </div>
        </div>
    </div>
@endsection