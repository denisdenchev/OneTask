{{-- btnAction = Type of button (submit,button,ect) --}}
{{-- btnText = Text on the button, click me, exit, submit, ect --}}
{{-- buttonType = Determines the class of the button for styling purposes, please check components.scss and button.php in App/View/Components --}}

<input type="{{ $btnAction }}" value="{{ $btnText }}" class="button {{ $buttonClass() }}">