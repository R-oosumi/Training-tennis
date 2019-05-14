@extends('layouts.index')

@section('title', '編集')

@section('content')
<a href="/reslist">
  <input type="submit" value="戻る">
</a>
<table border="1" align="center">
  <form action="/editres" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$item->id}}">
    <tr>
      <th>予約者</th>
      <td>
        <input type="text" name="name" value="{{$item->name}}">
      </td>
    </tr>
    <tr>
      <th>予約日</th>
      <td>
        <input type="date" name="date" value="{{$item->date}}">
      </td>
    </tr>
    <tr>
      <th>開始時間</th>
      <td>
        <input type="time" name="starttime" step="1800" min="10:00" max="22:00" value="{{$item->starttime}}">
      </td>
    </tr>
    <tr>
      <th>終了時間</th>
      <td>
        <input type="time" name="endtime" step="1800" min="11:00" max="23:00" value="{{$item->endtime}}">
      </td>
    </tr>
    <tr>
      <th><label for="court">コートの種類</label></th>
      <td>
        <select id="court" name="court">
          <option>{{$item->court}}</option>
          <option>全面1番</option>
          <option>全面2番</option>
          <option>オートテニス1番</option>
          <option>オートテニス2番</option>
          <option>オートテニス3番</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>変更しますか</th>
      <td><input type="submit" value="変更"></td>
    </tr>
  </form>
</table>
@endsection
