{{-- @extends('layouts.app',['tittle' => 'Homepage'] )

@section('content') --}}

{{-- @component('components.layouts.app') --}}

{{-- <x-layouts.app>

</x-layouts.app> --}}
    

{{-- @include('components.alert') --}}

{{-- @component('components.alert')

    @slot('tittle')

    Header component with <strong>strong</strong>

    @endslot

    ini adalah children

    @slot('footer')

    Footer component with <strong>strong</strong>

    @endslot


@endcomponent --}}

{{-- <x-app-layout>

    
</x-app-layout> --}}

{{-- <p>
<h1>Halaman <strong style="color: red">Page</strong> </h1>
</p>

@endsection --}}


{{-- anonymous component --}}

<x-app-layout tittle="Home Page">

    <div class="container">
        <div class="row">
         <div class="col-md-6">
            @if(session()->has('success'))
            
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}

                </div>

               

            @endif
          

                <div class="card">
                    <div class="card-header">Welcom to my workspace</div>
                    <div class="card-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non quia, reiciendis voluptas delectus, aspernatur explicabo eveniet molestias voluptatum dolor dicta cum beatae architecto harum distinctio ea. Possimus numquam officia reprehenderit.</p>
                        <p>Velit cumque molestiae sequi sint. Laborum eaque rem aliquam corrupti quidem praesentium tenetur, dolores magnam! Error architecto placeat provident, tempore ut adipisci explicabo dolor odit! Odit consequuntur veniam laboriosam repudiandae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>