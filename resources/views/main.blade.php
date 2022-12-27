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
            <tbody>
                <tr>
                    <td>3216549</td>
                    <td>5469992</td>
                    <td>Karvė</td>
                    <td>9/12/2018</td>
                    <td>4 Metai</td>
                    <td>Simentalas</td>
                    <td>Mėsinis</td>
                    <td>Taip</td>
                    <td>14/01/2023</td>
                    <td>14/01/2024</td>
                    <td>29/11/2020</td>
                    <td>2</td>
                    
                </tr>
                <tr>
                    <td>6168787</td>
                    <td>5469992</td>
                    <td>Jautis</td>
                    <td>9/12/2018</td>
                    <td>4 Metai</td>
                    <td>Simentalas</td>
                    <td>Mėsinis</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>6214984</td>
                    <td>3216549</td>
                    <td>Veršiukas</td>
                    <td>25/09/2021</td>
                    <td>1 Metai</td>
                    <td>Simentalas</td>
                    <td>Pieninis</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>5168971</td>
                    <td>3215495</td>
                    <td>Telyčaitė</td>
                    <td>25/12/2020</td>
                    <td>2 Metai</td>
                    <td>Žalmargis</td>
                    <td>Pieninis</td>
                    <td>Taip</td>
                    <td>29/10/2023</td>
                    <td>05/11/2024</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

        
        

    </div>
            
</body>
</html>