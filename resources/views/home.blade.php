<body>
    @extends('layouts.app')

    @section('content')
    <div class="homeContent">
        <h2 class="headerText">Log in</h2>
        <x-input-label-wrapper labelValue="Email" inputType="email" inputValue='' inputName="userEmail" inputPlcHolder="example@mail.com" ></x-input-label-wrapper>
        <x-input-label-wrapper labelValue="Password" inputType="password" inputValue='' inputName="userPassword" inputPlcHolder="example123"></x-input-label-wrapper>
        <x-button btnText="Submit" typeOfButton="submit" btnAction="submit"></x-button>
        <p class="subText">You do not have an account?</p>
        <p class="link"><a href={{ route('register', ['linkUrl'=>'/','linkText'=>'Log in']) }}>Create one here</a></p>
    </div>
    @endsection
</body>