

@extends('Pages.headfoot')
@section('content')

<body>
    
<br>
<br>
<br>
<br>
<br>
<h1> Home page </h1>
<script>alert("Added successfully")</script>
<div>
    <img src="{{URL('image/f1.jpg')}}">
     {{ print_r(URL('')) }}
</div>


@endsection
    
</body>
</html>