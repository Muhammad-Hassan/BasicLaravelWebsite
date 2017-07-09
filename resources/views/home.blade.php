
@extends('layouts.app')


@section('content')
<h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eligendi in magnam nobis similique. Adipisci animi cumque in ipsam magni! Accusamus alias aliquid delectus dolorem illo ipsam, nobis pariatur similique.</p>
    @endsection

@section('sidebar')
    @parent
    <p>This is an appended sidebar!</p>
    @endsection