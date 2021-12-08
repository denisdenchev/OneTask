<div class="card">
    <h3 class="cardTitle">{{ $title }}</h3>
    <p class="cardDetails"> {{ $details }}</p>
    <div class="cardAction">
        <a href='{{ $viewTask }}'><x-button btnText="View" typeOfButton="view" btnAction="button"></x-button></a>
        <a href='{{ $editTask }}'><x-button btnText="Edit" typeOfButton="edit" btnAction="button"></x-button></a>
        @if(Auth::user()->is_admin)
            <form action='{{ $deleteTask }}' method="POST">
                @csrf
                @method('DELETE')
                <a href='{{ $deleteTask }}'><x-button btnText="Delete" typeOfButton="delete" btnAction="submit"></x-button></a>
            </form>
        @endif
    </div>
        @if($cardStatus === "1")
        <p class="{{ $cardStatusClass() }}">Status: Completed</p>
        @else
        <p class="{{ $cardStatusClass() }}">Status: Not Completed</p>
        @endif
</div>