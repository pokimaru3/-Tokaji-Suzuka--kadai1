@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>Confirm</h2>
    </div>
    <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="{{ $data['last_name'] . ' ' . $data['first_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="@if($data['gender'] == 1) 男性 @elseif($data['gender'] == 2) 女性 @else その他 @endif" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $data['email'] }}" readonly>

                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel" value="{{ $data['tel1'] }} - {{ $data['tel2'] }} - {{ $data['tel3'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $data['address'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $data['building'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="text" name="category_id" value="{{ $data['category_id'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__title">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $data['detail'] }}" readonly>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </form>
    </div>
    <a href="{{ url('/?edit=1') }}" class="form__button-submit">修正</a>
        {{-- <a href="/edit=1" class="form__button-submit">修正</a> --}}
@endsection