<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tittle }} | Belajar Laravel</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="/css/app.css">

    {{-- @if(isset($styles))

      {{ $styles }}
        
    @endif --}}
    
    {{ $styles }}



</head>
<body>
    {{-- @include('layouts.navbar') --}}

    <x-navbar>
      
    </x-navbar>

  
    {{-- @yield('content') --}}

    {{-- component berjalan pake slot --}}

    <div class="pt-4">
      {{ $slot }}

    </div>

  
    
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="/js/app.js"></script>
</body>
</html>