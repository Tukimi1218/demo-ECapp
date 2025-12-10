@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <!-- 成功メッセージ -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- エラーメッセージ -->
            @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                <!-- フィルターボタン -->
                <div class="mb-3">
                    <div class="d-flex me-3">
                        <button id="filterToggleButton" class="mb-3 product-filter-button">
                            <i class="fa-solid fa-list"></i>
                        </button>
                    </div>

                    <div class="row">
                        <form id="filterForm" action="">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-product-wrap d-flex flex-wrap justify-content-start">
        @foreach ($products as $product)
            <div class="index-product-card position-relative">
                {{-- 商品画像 --}}
                <a href="">

                </a>

                <div class="card-body d-flex flex-column">
                    {{-- 商品名 --}}
                    <h6></h6>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
