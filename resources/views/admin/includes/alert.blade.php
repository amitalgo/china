@if(session()->has('message'))
    <div class="alert {{session('class')}}">
        {{session('message')}}
    </div>
@endif