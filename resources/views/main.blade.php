<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <nav>
        <header class="navbar">
            <div class="container">
                <a id='pav' href=".">ĮMONĖS PAVADINIMAS</a>
            </div>
        </header>
    </nav>

    <div id="list" class="container">
        <div id="meniu">
          <a data-bs-toggle="modal" data-bs-target="#exampleModal">Pridėti Galviją</a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Galvijų Pridėjimas</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <form action="{{route('cattle.form')}}" method="POST">
                    @csrf
                    <div class="modal-body">
        
                            <div class="form-group">
                              <label>Galvijo Nr</label>
                              <input type="number" name="GalvijoNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Motinos Nr</label>
                              <input type="number" name="MotinosNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Tipas</label>
                              <input type="text" name="Tipas" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Gimimo Data</label>
                                <input type="date" name="GimimoData" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Amzius</label>
                                <input type="number" name="Amzius" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Veislė</label>
                                <input type="text" name="Veisl" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Pieninis/Mesinis</label>
                                <input type="text" name="PM" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Ar veršinga?</label>
                                <input type="string" name="versing" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Veršiavimosi Data</label>
                                <input type="date" name="VersData" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Sėklinimo Data</label>
                                <input type="date" name="SeklData" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Paskutinis Veršiavimasis</label>
                                <input type="date" name="LastVers" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Atsivesta veršiuku</label>
                                <input type="number" name="AtsivestVers" class="form-control">
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Uždaryti</button>
                      <button type="submit" class="btn btn-primary">Išsaugoti</button>
                    </div>
                </form>
                <div class="container">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    </div>
                     @endif
                    @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success')}}</p>
                        </div>
                    @endif
                        </div>
                    
                  </div>
                </div>
              </div>
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