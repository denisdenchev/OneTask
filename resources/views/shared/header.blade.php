<div class="headerWrapper">
    
    <div class="header">
        <img src="{{ asset('img/logo.png') }}" alt="Logo Image" class="logo"/>
        <div>
            @if(Auth::user())
            <h3 class="headerGreeting">{{ Auth::user()->name }}</h3>
            @endif
            @if($linkText == "Log out")
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
                <x-button btnAction="submit" btnText="Log out" typeOfButton="cancel"></x-button>
            </form>
            @else
            <p><a href="{{ $linkUrl }}" class="CTA">{{ $linkText }}</a></p>
            @endif 
        </div>
    </div>
</div>