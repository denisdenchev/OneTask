<body>
    @extends('layouts.app')

    @section('content')
    <div class="homeContent">
        <h2 class="headerText">Log in</h2>
        <x-input-label-wrapper labelValue="Email" inputType="email" inputName="userEmail" inputPlcHolder="example@mail.com" ></x-input-label-wrapper>
        <x-input-label-wrapper labelValue="Password" inputType="password" inputName="userPassword" inputPlcHolder="example123"></x-input-label-wrapper>
        <x-button btnText="Submit" typeOfButton="submit"></x-button>
        <p class="subText">You do not have an account?</p>
        <p class="link"><a href='/register'>Create one here</a></p>
    </div>
    @endsection
</body>