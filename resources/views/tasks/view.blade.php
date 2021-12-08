@extends('layouts.task')

@section('content')

<div class="viewTask">
    <a href='{{ route('tasks.index') }}'><x-button btnText="Go Back" typeOfButton="submit" btnAction="button"></x-button></a>
    <div class="cardView">
        <div class="viewCard">
            <h2 class="heading">{{ $task->title }}</h2>
            <h3 class="cardDetails">{{ $task->details }}</h3>
        </div>
    </div>    
    <a href='{{ route('tasks.edit', $task->id) }}'><x-button btnText="Edit" typeOfButton="edit" btnAction="button"></x-button></a>
</div>

@endsection