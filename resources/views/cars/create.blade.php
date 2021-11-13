<head>
<link rel="stylesheet" href="{{asset('css/style.css')}}"></head>
@extends('layouts.app1')

@section('content')
    <div>
        <div class="red">
        <h2>Add car into the table</h2>
        <form action ="/cars" method ="POST"> 
            @csrf
            <input type = "text" name = "name" placeholder="Brand Name">
            <input type = "text" name = "founded" placeholder="Founded">
            <button type="submit">Submit</button>
        </form>

        
        </div>
        
    </div>
@endsection
