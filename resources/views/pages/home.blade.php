<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')

@section('content')
    <x-casino-list :casinos="$casinos"/>
@endsection
