@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection
@section('content')
    <livewire:auth.login-form />
@endsection