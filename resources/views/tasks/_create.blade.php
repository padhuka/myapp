           
            {{-- {{ print_r($errors->all()) }} --}}

               


                <div class="card">
                    <div class="card-header"> Create New Task </div>
                    <div class="card-body">
{{--      
                        <form action="/tasks" method="post" class="d-flex"> --}}

                            {{-- @foreach ($errors->all() as $error)

                            <div class="alert alert-danger">

                            {{ $error }}
                             </div>
                            @endforeach --}}

                            {{-- @if ($errors->all())

                            <div class="alert alert-danger">

                                Your Data Invalid

                             </div>
                            @endif --}}


                        <form action="{{ route('tasks.store') }}" method="post">
                
                            @csrf
                                
                            @include('tasks._form')

                        </form>
                    </div>
            
                </div>