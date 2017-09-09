<!-- 檔案目錄：resources/views/transaction/listUserTransaction.blade.php -->

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
                        <th>商品名稱</th>
                        <th>圖片</th>
                        <th>單價</th>
                        <th>數量</th>
                        <th>總金額</th>
                        <th>購買時間</th>
                    </tr>
                    @foreach($TransactionPaginate as $Transaction)
                        <tr>
                            <td>
                                <a href="/merchandise/{{ $Transaction->Merchandise->id }}">
                                    {{ $Transaction->Merchandise->name }}
                                </a>
                            </td>
                            <td>
                                <a href="/merchandise/{{ $Transaction->Merchandise->id }}">
                                    <img src="{{ $Transaction->Merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                                </a>
                            </td>
                            <td>{{ $Transaction->price }}</td>
                            <td>{{ $Transaction->buy_count }}</td>
                            <td>{{ $Transaction->total_price }}</td>
                            <td>{{ $Transaction->created_at }}</td>
                        </tr>
                    @endforeach
                </table>

                {{-- 分頁頁數按鈕 --}}
                {{ $TransactionPaginate->links() }}
            </div>
        </div>
    </div>
@endsection