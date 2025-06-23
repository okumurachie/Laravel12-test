@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/verify-email.css') }}">
@endsection


@section('content')
<div class="verify-email__content">
    <div class="message">
        <p>ご登録ありがとうございます。メールアドレスの確認リンクをクリックしてください。下記リンクにてメール認証後、本登録となります。
            メールが届いていない場合は、下のボタンから再送信できます。
        </p>
    </div>
    @if(Auth::check() && is_null(Auth::user()->email_verified_at))
    <div class="sent-message">
        <p>確認メールを送信しました。"メール認証はこちら"からメールをご確認いただき、認証リンクをクリックしてください。</p>
        <a href="http://localhost:8025" class="verify-email__link">
            <button class="verify-email__button" type="submit">
                メール認証はこちら
            </button>
        </a>
    </div>
    @endif
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div>
            <button class="resend" type="submit">
                確認メールを再送信する
            </button>
        </div>
    </form>
    @endsection