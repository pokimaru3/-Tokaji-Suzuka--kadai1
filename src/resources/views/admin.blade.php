@extends('layouts.app')

@section('css')
<link rel='stylesheet' href="{{ asset('css/admin.css') }}">
@endsection

@section('header-nav')
<nav class="header-nav">
    <a href="/login" class="login-link">logout</a>
</nav>
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>Admin</h2>
    </div>
    <form class="form" action="/admin" method="get">
        <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ request('keyword') }}">
    </form>