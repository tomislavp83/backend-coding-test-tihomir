<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="w-full overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex flex-col items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <x-named-route-button :text="'Create casino'" :route-name="'casinos.create'"/>

            <x-casino-list :casinos="$casinos"/>

            <x-named-route-button :text="'Create casino'" :route-name="'casinos.create'"/>
        </div>
    </div>
@endsection
