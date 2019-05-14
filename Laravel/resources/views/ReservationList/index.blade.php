@extends('layouts.index')
<style>
.pagination {font-size: 20pt;}
.pagination li {display: inline-block;}
</style>

@section('title', '予約一覧')

@section('content')
<p align="right">
  <a href="/newres">
    <input type="submit" value="新規予約">
  </a>
</p>
<table border="1" align="center">
  <tr>
    <th>予約者</th>
    <th>
      <a href="/reslist?sort=date">
        予約日
      </a>
    </th>
    <th>開始時間</th>
    <th>終了時間</th>
    <th>コートの種類</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->name}}様</td>
    <td>{{$item->date}}</td>
    <td>{{$item->starttime}}</td>
    <td>{{$item->endtime}}</td>
    <td>{{$item->court}}</td>
    <td>
      <a href="/editres?id={{$item->id}}">
        <input type="submit" value="編集">
      </a>
    </td>
    <td>
      <a href="/deleteres?id={{$item->id}}">
        <input type="submit" value="削除">
      </a>
    </td>
  </tr>
  @endforeach
</table>
{{ $items->appends(['sort' => $sort])->links() }}
<p align="center">
  <a href="/login">
    <input type="submit" value="戻る">
  </a>
  <a href="/reslist">
    <input type="submit" value="ページトップ">
  </a>
</p>
@endsection
