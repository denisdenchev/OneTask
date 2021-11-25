<body>
    @extends('layouts.app')

    @section('content')
    <div>
        <form method="POST" action="{{ route('loginauth') }}" class="homeContent">
            @csrf
            <h2 class="headerText">Log in</h2>
            <x-input-label-wrapper labelValue="Email" inputType="email" inputValue="{{ old('email') ?? '' }}" inputName="email" inputPlcHolder="example@mail.com" ></x-input-label-wrapper>
            <x-input-label-wrapper labelValue="Password" inputType="password" inputValue='' inputName="password" inputPlcHolder="example123"></x-input-label-wrapper>
            {{-- Validation --}}
            @if($errors->any())
                <ul class='errors'>
                    @foreach ($errors -> all() as $error )
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <x-button btnText="Submit" typeOfButton="submit" btnAction="submit"></x-button>
            <p class="subText">You do not have an account?</p>
            <p class="link"><a href={{ route('register') }}>Create one here</a></p>
        </form>
    </div>
    @endsection
</body>

