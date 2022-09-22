{{-- @extends('layouts.app',['tittle' => 'About'] )
@section('content')

<h1>Halaman <strong style="color: red">About</strong> </h1>

@endsection --}}

{{-- anonymous componen --}}

<x-app-layout tittle="About Page">

    @slot('styles')

        <style>
            body {
                background-color: yellow;
            }
        </style>
       

    @endslot


   <h1> About Page</h1>
</x-app-layout>