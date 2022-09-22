<x-app-layout tittle="User Page">

    <div class="container">
       <h1> All User </h1>
    
        @foreach ($users as $user)

        {{-- <li> <a href="{{ route('users.show', $user->username) }}"> {{ $user->name }}</a> </li> --}}

        {{-- menghilangkan username hasil sama saja --}}
        
        <li> <a href="{{ route('users.show', $user) }}"> {{ $user->name }}</a> </li>
        @endforeach

    </div>
   
</x-app-layout>