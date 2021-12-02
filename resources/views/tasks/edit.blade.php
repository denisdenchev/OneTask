@extends('layouts.task')

@section('content')
<div class="createTask">
    <a href='{{ route('tasks.index') }}'><x-button btnText="Go Back" typeOfButton="submit" btnAction="button"></x-button></a>
    <div class="createTaskForm">
        <h2 class="heading">Edit this task</h2>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <x-input-label-wrapper labelValue="Task title" inputType="text" inputName="title" inputValue="{{ old('title') ?? $task->title }}" inputPlcHolder="Take the dog to the vets."></x-input-label-wrapper>
            <x-textarea-label-wrapper labelValue="Task Details" textAreaName="taskDetails" textAreaValue="{{ old('taskDetails') ?? $task->details }}" textAreaPlaceholder="I will take my dog to the vets on Wednesday"  cols="40" rows="5"></x-textarea-label-wrapper>
            @if ($errors->any())
            <h2>Whoops, there was an issue with this request.</h2>
            @foreach ($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
            @endforeach
            @endif
            <x-button btnText="Submit" typeOfButton="submit" btnAction="submit"></x-button>
        </form>
    </div>
</div>

@endsection