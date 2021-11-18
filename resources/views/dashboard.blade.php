<body>
    @extends('layouts.app')

    @section('content')

    <div class="dashboard">
        <h3 class="greeting">Hello <b>User User</b>, I hope you are having a great day! :)</h3>
        <x-button btnText="Create New Task" typeOfButton="create" btnAction="submit"></x-button>
            <h2 class="heading">Tasks</h2>
            <div class="tasksWrapper">
                <x-task-card></x-task-card>
                <x-task-card></x-task-card>
                <x-task-card></x-task-card>
                <x-task-card></x-task-card>
                <x-task-card></x-task-card>
                <x-task-card></x-task-card>
            </div>
    </div>
    @endsection
</body>