<?php
/**
 * Created by PhpStorm.
 * User: Aishwarya
 * Date: 2016-12-13
 * Time: 8:18 AM
 */
$staff=null;
?>



        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    @section('navbar')
        Navigation bar<br> <br>
    @show
</nav>
<div>




    <ul>
        @foreach($deptNames as $deptName)
            <li><a href="{{ url('home/list3', $name->deptName) }}">{{ $name->deptName }}</a></li>
        @endforeach
    </ul>



</div>

<footer>
    <br> <br>this is my footer
</footer>
</body>
</html>