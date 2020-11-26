@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
   <a href="/hello/other">カウントアップ</a>
   <a href="/hello/other2">ToDOリスト</a>
   <a href="/jissyu12">ユーザメニュー</a>
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->age}}</td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
