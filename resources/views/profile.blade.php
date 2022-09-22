{{-- @extends('layouts.app',['tittle' => 'Profile'] )

@section('content')

<h1>Halaman <strong style="color: red">Profile</strong> </h1>

@endsection --}}


<x-app-layout tittle="{{ $username }}">

    
    @slot('styles')

        <style>
            body {
                background-color: rgb(4, 255, 0);
            }
        </style>

    @endslot


 <h1>{{ $username ?? 'Profile' }}</h1>
 
 </x-app-layout>