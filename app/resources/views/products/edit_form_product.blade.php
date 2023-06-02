@extends('layouts.app')
@section('content')
<form action="{{ route('products.update',['product' => $result['id']]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for='product_name'>商品名</label>
    <input type='text' class='form-control' name='product_name' id='product_name' value="{{ $result['product_name']}}" />
    <label for='money' class='mt-2'>金額</label>
    <input type='text' class='form-control' name='money' id='money' value="{{ $result['money']}}" />
    <label for='img' class='mt-2'>画像</label>
    <input type="file" class='form-control' name="img" id='img' value=""><!--仮画像リンク-->

    <label for='explanation' class='mt-2'>商品説明文</label>
    <textarea class='form-control' name='explanation'>{{ $result['explanation']}}</textarea>
    <!-- 画像は後で登録 -->
    <div class='row justify-content-center'>
        <button type='submit' class='btn btn-primary w-25 mt-3'>編集登録</button>
    </div>

</form>

@endsection