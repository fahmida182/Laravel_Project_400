@extends('shop.account.layout')
@section('account')

<h1>{{ Auth::user()->name }}</h1>

@endsection