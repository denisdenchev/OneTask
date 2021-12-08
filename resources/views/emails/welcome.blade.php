@component('mail::message')
# Welcome

Thank you for registering with OneTask!

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Login Here
@endcomponent

Thanks,<br>
Team {{ config('app.name') }}
@endcomponent
