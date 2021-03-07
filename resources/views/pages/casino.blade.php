<!-- resources/views/pages/casino.blade.php -->
@extends('layouts.app')

@section('content')
    <x-named-route-button :text="'Back to home'" :route-name="'home'"/>
    <div class="w-full bg-white shadow-md rounded my-6">
        <casino-create-edit :casino-id.number="{{ $id ?? 0}}"></casino-create-edit>
    </div>
@endsection
