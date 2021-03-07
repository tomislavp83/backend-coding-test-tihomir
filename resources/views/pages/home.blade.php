<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex flex-col items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <x-casino-create-button :text="'Create casino'" :route-name="'casino.create'"/>

            <x-casino-list :casinos="$casinos"/>

            <x-casino-create-button :text="'Create casino'" :route-name="'casino.create'"/>
        </div>
    </div>
@endsection
