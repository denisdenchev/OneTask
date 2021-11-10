<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OneTask</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
    <div class="content">
        <h2 class="headerText">Log in</h2>
        <x-input-label-wrapper labelValue="Email" inputType="email" inputName="userEmail" inputPlcHolder="example@mail.com" ></x-input-label-wrapper>
        <x-input-label-wrapper labelValue="Password" inputType="password" inputName="userPassword" inputPlcHolder="example123"></x-input-label-wrapper>
        <x-button btnText="Submit" typeOfButton="submit"></x-button>
        <p class="subText">You do not have an account?</p>
        <p class="link"><a href='/register'>Create one here</a></p>
    </div>
    @endsection
</body>
</html>