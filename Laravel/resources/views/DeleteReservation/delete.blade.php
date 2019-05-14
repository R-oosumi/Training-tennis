@extends('layouts.index')

@section('title', '削除')

@section('content')
<a href="/reslist">
  <input type="submit" value="戻る">
</a>
<table border="1" align="center">
  <form action="deleteres" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$item->id}}">
    <tr>
      <th>予約者</th>
      <td>{{$item->name}}様</td>
    </tr>
    <tr>
      <th>予約日</th>
      <td>{{$item->date}}</td>
    </tr>
    <tr>
      <th>開始時間</th>
      <td>{{$item->starttime}}</td>
    </tr>
    <tr>
      <th>終了時間</th>
      <td>{{$item->endtime}}</td>
    </tr>
    <tr>
      <th>コートの種類</th>
      <td>{{$item->court}}</td>
    </tr>
    <tr>
      <th>削除しますか</th>
      <td>
        <input type="submit" value="削除">
      </td>
    </tr>
  </form>
</table>
@endsection
