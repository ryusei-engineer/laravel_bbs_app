@extends('layouts.index')
@section('title', 'ユーザー登録')
@section('content')
<p>ユーザー登録</p>
<form action="{{ route('user.register') }}" method="post">
  @csrf
  <label>
    ユーザー名<input type="text" name="name">
  </label>
  <label>
    メールアドレス<input type="text" name="email">
  </label>
  <label>
    パスワード<input type="text" name="password">
  </label>
  <input type="submit" value="登録">
</form>
@endsection