@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(session('danger'))
    <p style="color: #f00;">{{ session('danger') }}</p>
@endif
