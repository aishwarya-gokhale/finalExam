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


    <form method="get" >
        {{ csrf_field() }}
    <select>
        @foreach($staffdiretory as $staff)



        <option value="{{$staff->id}}">{{$staff->department}}


        </option>



    @endforeach




    </select>

        <input type="submit" value="Search" />

    </form>

</div>

<footer>
    <br> <br>this is my footer
</footer>
</body>
</html>