<body>
    @extends('layouts.app')

    @section('content')

    <div>
        <form method="POST" action="{{ route('createuser') }}" class="homeContent">
            @csrf
            <h2 class="headerText">Register</h2>
            <x-input-label-wrapper labelValue="Name" inputType="text" inputName="name" inputValue="{{ old('name') ?? ''}}" inputPlcHolder="John Doe"></x-input-label-wrapper>
            <x-input-label-wrapper labelValue="Email" inputType="email" inputName="userEmail" inputValue="{{ old('userEmail') ?? ''}}" inputPlcHolder="example@mail.com" ></x-input-label-wrapper>
            <x-input-label-wrapper labelValue="Password" inputType="password" inputName="userPassword" inputValue="{{ old('userPassword') ?? ''}}" inputPlcHolder="example123"></x-input-label-wrapper>
            {{-- Validation --}}
            @if($errors->any())
                <ul class='errors'>
                    @foreach ($errors -> all() as $error )
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <x-button btnText="Submit" typeOfButton="submit" btnAction="submit"></x-button>
            <p class="subText">You already have an account?</p>
            <p class="link"><a href={{ route('login') }}'>Log in here</a></p>
        </form>
    </div>
    @endsection
</body>