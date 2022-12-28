<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <title></title>
</head>
<body>
    <nav>
        <header class="navbar">
            <div class="container">
                <a id='pav' href=".">ĮMONĖS PAVADINIMAS</a>
            </div>
        </header>
    </nav>

    <div id="list" class="container">
        <div id="meniu">
           <a href=".">Meniu</a>
        </div>
        
    <div>
        <table class="styled-table">
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
                    <th>Numatoma veršiavimosi data</th>
                    <th>Numatoma sėklinimo data</th>
                    <th>Paskutinis veršiavimasis</th>
                    <th>Kiek atsivesta veršiuku</th>
                </tr>
            </thead>
            @foreach ($cattle as $cat)
            <tbody>
                <tr>
                  <td>{{$cat['GalvijoNr']}}</td>
                  <td>{{$cat['MotinosNr']}}</td>
                  <td>{{$cat['Tipas']}}</td>
                  <td>{{$cat['GimimoData']}}</td>
                  <td>{{$cat['Amzius']}}</td>
                  <td>{{$cat['Veisl']}}</td>
                  <td>{{$cat['PM']}}</td>
                  <td>{{$cat['Versing']}}</td>
                  <td>{{$cat['VersData']}}</td>
                  <td>{{$cat['SeklData']}}</td>
                  <td>{{$cat['LastVers']}}</td>
                  <td>{{$cat['AtsivestVers']}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
    </div>
            
</body>
</html>