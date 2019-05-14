@extends('layouts.index')

@section('title', '新規予約')

@section('content')
<a href="/reslist">
  <input type="submit" value="戻る">
</a>
<table border="1" align="center">
  <form action="/newres" method="post">
    {{ csrf_field() }}
    <tr>
      <th>予約者</th>
      <td>
        <input type="text" name="name" maxlength="10" autofocus value="{{old('name')}}">
      </td>
    </tr>
    <tr>
      <th>予約日</th>
      <td>
        <input type="date" name="date" value="{{old('date')}}">
      </td>
    </tr>
    <tr>
      <th>開始時間</th>
      <td>
        <input type="time" name="starttime" step="1800" min="10:00" max="22:00" value="{{old('starttime')}}">
      </td>
    </tr>
    <tr>
      <th>終了時間</th>
      <td>
        <input type="time" name="endtime" step="1800" min="11:00" max="23:00" value="{{old('endtime')}}">
      </td>
    </tr>
    <tr>
      <th><label for="court">コートの種類</label></th>
      <td>
        <select id="court" name="court">
          <option>{{old('court')}}</option>
          <option>全面1番</option>
          <option>全面2番</option>
          <option>オートテニス1番</option>
          <option>オートテニス2番</option>
          <option>オートテニス3番</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>予約しますか</th>
      <td><input type="submit" value="予約"></td>
    </tr>
  </form>
</table>
@endsection
