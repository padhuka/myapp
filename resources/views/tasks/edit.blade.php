
<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Task</h1>
    
    

        {{-- <form action="/tasks/{{ $task->id }}" method="post"> --}}
        <form action="{{ route('tasks.update', $task->id)}}" method="post">
    
            {{-- html blm kenal put/delete --}}

            @method('put')

            @csrf
            
            @include('tasks._form')
        
        </form>
            </div>
        </div>
    </div>

    
   
</x-app-layout>