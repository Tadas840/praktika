<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@include ('navbar')
<div id="list" class="container">
    <form action="{{url("editspec/".$spec->id)}}" method="POST">
        @csrf 
        @method('PUT')
        <table id="edit" class="styled-table">
            <thead>
                <tr>
                    <th>Veislės Pavadinimas</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="text" name="veislname" value="{{$spec['veislname']}}"></td>
                    <td> <button style="" type="submit"><i style="font-size:16px; color:green;" class="fa fa-check"></i></button></td>
                </tr>
            </tbody>
        </table>
    
    </form>
    
</div>

</body>
</html>