@extends('layouts.task')

@section('content')

<div>
    <a href='{{ route('tasks.index') }}'><x-button btnText="Go Back" typeOfButton="submit" btnAction="button"></x-button></a>
        <p>{{ $task->title }}</p>
        <p>{{ $task->details }}</p>
</div>

@endsection