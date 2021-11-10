<body>
    @extends('layouts.app')

    @section('header')
    <div>
        <x-header linkUrl="/" linkText="Log in"></x-header>
    </div>
    @endsection

    @section('content')
    <div class="homeContent">
        <h2 class="headerText">Register</h2>
        <x-input-label-wrapper labelValue="Name" inputType="text" inputName="name" inputPlcHolder="John Doe"></x-input-label-wrapper>
        <x-input-label-wrapper labelValue="Email" inputType="email" inputName="userEmail" inputPlcHolder="example@mail.com" ></x-input-label-wrapper>
        <x-input-label-wrapper labelValue="Password" inputType="password" inputName="userPassword" inputPlcHolder="example123"></x-input-label-wrapper>
        <x-button btnText="Submit" typeOfButton="submit"></x-button>
        <p class="subText">You already have an account?</p>
        <p class="link"><a href='/'>Log in here</a></p>
    </div>
    @endsection
</body>