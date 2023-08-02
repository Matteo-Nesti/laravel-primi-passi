<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <h1>Il primo giorno di Laravel!!</h1>
    <p>{{$data}}</p>
    <ul>
        @forelse ($array as $item)
            <li>
               <a href="{{route('link')}}">{{$item}}</a> 
            </li>
        @empty
            <p>non ci sono dati</p>
        @endforelse
    </ul>
</body>
</html>