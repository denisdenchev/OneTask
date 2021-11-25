
<div class="header">
    <img src="{{ asset('img/logo.png') }}" alt="Logo Image" class="logo"/>
    <div>
        @if(isset(Auth::user()->name))
        <h3 class="headerGreeting">Hello {{ Auth::user()->name }}</h3>
        @endif
        <p><a href="{{ $linkUrl }}" class="CTA">{{ $linkText }}</a></p>
    </div>
</div>