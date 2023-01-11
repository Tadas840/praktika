<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
    
    <title>Document</title>
</head>
<body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@include ('navbar')
<div id="list" class="container">
    <form action="{{url("edit/".$cattles->id)}}" method="POST">
        @csrf 
        @method('PUT')
        <table id="edit" class="styled-table">
            <thead>
                <tr>
                    <th>Galvijo ID</th>
                    <th>Motinos ID</th>
                    <th>Tipas</th>
                    <th>Gimimo Data</th>
                    <th>Amžius</th>
                    <th>Veislė</th>
                    <th>Pieninis/Mėsinis</th>
                    <th>Ar veršinga?</th>
                    <th>Sėklinimo data</th>
                    <th>Veršiavimosi data</th>
                    <th></th>
                
                   
                </tr>
            </thead>

            <tbody>
                <tr>
                <td><input type="text" style="width: 80px" name="GalvijoNr" value="{{$cattles['GalvijoNr']}}"></td>
                    <td><input type="text" style="width: 80px" name="MotinosNr" value="{{$cattles['MotinosNr']}}"></td>
                    <td>
                        <select name="Tipas" value="{{$cattles['Tipas']}}">
                          <option value="Karve">Karve</option>
                          <option value="Jautis">Buliukas</option>
                          <option value="Telycaite">Telycaite</option>
                        </select>
                    </td>
                    <td><input type="date" name="GimimoData" value="{{$cattles['GimimoData']}}"></td>
                    <td>{{$cattles['Amzius']}}</td>
                    <td>
                        <select name="Veisl">
                            @foreach($spec as $spd)
                           <option value="{{$spd['veislname']}}">{{$spd['veislname']}}</option>
                            @endforeach
                           </select>
                    
                    </td>
                    <td>
                        <select name="PM" value="{{$cattles['PM']}}">
                            <option value="Pieninis">Pieninis</option>
                            <option value="Mesinis">Mesinis</option>
                        </select>
                    </td>
                    <td>
                        <select name="versing" value="{{$cattles['Versing']}}">
                            <option value="Ne">Ne</option>
                            <option value="Taip">Taip</option>
                        </select>
                    </td>
                    <td><input type="date" name="SeklData" value="{{$cattles['SeklData']}}"></td>
                    <td><input type="date" name="VersData" value="{{$cattles['VersData']}}"></td>
                    <td> <button type="submit"><i style="font-size:16px; color:green;" class="fa fa-check"></i></button></td>
                </tr>
            </tbody>
        </table>
    
    </form>
    
</div>

</body>
</html>