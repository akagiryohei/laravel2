@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>

                    <a href="{{ route('products.index') }}">商品一覧</a>
                    <a href="{{ route('products.create') }}">商品登録</a>

                    

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
