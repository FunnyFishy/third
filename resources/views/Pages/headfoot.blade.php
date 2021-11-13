<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ABC Traders</title>

    <style>
    
        .fixed-header, .fixed-footer{
            width: 100%;
            position: fixed;        
            background: #525;
            padding: 10px 0;
            color: #fff;
        }
        .fixed-header{
            top: 0;
        }
        .fixed-footer{
            bottom: 0;
        }    
        .container{
            width: 90%;
            margin: 0 auto;
        }

        nav a{
            color: #85f;
            text-decoration: none;
            padding: 10px 45px;
            display: inline-block;
        }
        
        .active{
            color: red;
        }
</style>
    
</head>

<header>
    <div class="fixed-header">
        <div class="container">
            <nav>
                <a href="/" class= "{{request()->is('/') ? 'active':''}}">Home</a>
                <a href="product" class= "{{request()->is('product') ? 'active':''}}">Products</a>
                <a href="service" class= "{{request()->is('service') ? 'active':''}}">Services</a>
                <a href="about" class= "{{request()->is('about') ? 'active':''}}">About</a>
                <a href="contact" class= "{{request()->is('contact') ? 'active':''}}">Contact Us</a>
            </nav>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2016 Your Company</div>        
    </div>
</footer>
    
