@if(Request::route()->getname()!='home' )
<a href="{{url('/')}}">home</a>
@endif

@if(Request::route()->getname()!='contact' )
<a href="{{url('/contact')}}">contact</a>
@endif

@if(Request::route()->getname()!='abot' )
<a href="{{url('/abot')}}">abot</a>
@endif