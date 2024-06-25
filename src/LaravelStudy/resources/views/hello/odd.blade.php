<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Odd</title>
    <style>
        body {font-size:16px;color:#999;}
        h1{font-size:100px;text-align:right;color:#eee;margin:-40px 0px -50px 0px;}
    </style>
</head>
<body>
    <h1>Odd</h1>
    @for($i = 1; $i < 11; $i++)
    @if($i % 2 == 1)
    <h3>{{$i}}</h3>
    @endif
    @endfor
    <h1>even</h1>
    @php
    for($j = 1; $j < 11; $j++){
        if($j % 2 == 0){
            echo "<h3>$j</h3>";
        }
    }
    @endphp
</body>
</html>