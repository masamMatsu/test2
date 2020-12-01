@extends('layouts.helloapp')

@section('title', 'Image Input')

@section('menubar')
    画像入力
   @parent
@endsection


@section('content')
    <form action="image_confirm" method="post" enctype="multipart/form-data" id="form">
        @csrf
        ファイル：
        <input type="file" name="imagefile" value=""/><br /><br />

        商品名：<br />
        <input type="text" name="product_name" size="50" value="{{ old('name') }}"/><br /><br />

        <input type="submit" name="confirm" id="button" value="確認" />
    </form>
@endsection

@section('footer')
copyright 2020 MasayaMatsumiya.
@endsection
