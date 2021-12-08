<body>
    @extends('layouts.app')

    @section('content')
    

    <div class="dashboard">
        @if(Auth::user())
            <a href='{{ route('tasks.create') }}'><x-button btnText="Create New Task" typeOfButton="create" btnAction="submit"></x-button></a>
            @if($message = Session::get('success'))
                <h2>{{ $message }}</h2>
            @endif    
            @if(count($tasks) > 0)
                <h2 class="heading">Tasks</h2>
                <div class="tasksWrapper">
                    @foreach ($tasks as $task)
                        <x-task-card title="{{ $task->title }}" details="{{ $task->details }}" cardStatus="{{ $task->completed }}" editTask="{{ route('tasks.edit', $task->id) }}" viewTask="{{ route('tasks.show', $task->id) }}" deleteTask="{{ route('tasks.destroy', $task->id) }}"></x-task-card>
                    @endforeach
                </div>
                @else
                <p></p>
                <h2 class="heading">It's time to create some tasks</h2>
            @endif
        @endif
    </div>
    @endsection
</body>
