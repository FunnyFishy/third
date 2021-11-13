<head>
<link rel="stylesheet" href="{{asset('css/style.css')}}"></head>
@extends('layouts.app1')

@section('content')
<body background="light blue">
    <div>
        <div class="blue">
        <h2>Update car into the table</h2>
        <form action ="/cars/{{$car->id}}" method ="POST"> 
            @csrf
            @method('PUT')
            <input type = "text" name = "name" value="{{$car->name}}">
            <input type = "text" name = "founded" value="{{$car->founded}}">
            <button type="submit">Submit</button>
        </form>

        
        </div>
        
    </div>
</body>
@endsection
