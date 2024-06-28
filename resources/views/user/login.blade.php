@extends('layouts.index')
@section('title', 'ログイン')
@section('content')
<p>ログイン</p>
<form action="{{ route('user.login') }}" method="post">
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