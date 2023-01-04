<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Galvijų apskaitos kompiuterizuota sistema</title>
</head>
<body>
    @csrf
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   @include('navbar')
   
    <div id="list" class="container">
        <div id="meniu">
          <a data-bs-toggle="modal" data-bs-target="#Modal">Pridėti Galviją</a>
        </div>
            <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="ModalLabel">Galvijų Pridėjimas</h1>
                    </div>
                <form action="main" method="POST">
                    @csrf
                    <div class="modal-body">
        
                            <div class="form-group">
                              <label>Galvijo Nr </label>
                              <input type="number" name="GalvijoNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Motinos Nr </label>
                              <input type="number" name="MotinosNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Tipas</label>
                              <select name="Tipas">
                                <option value="Karve">Karve</option>
                                <option value="Jautis">Jautis</option>
                                <option value="Telycaite">Telycaite</option>
                                <option value="Versiukas">Jautukas</option>
                             </select>
                            </div>
        
                            <div class="form-group">
                                <label>Gimimo Data</label>
                                <input type="date" name="GimimoData" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Veislė</label>
                                <select name="Veisl">
                                     @foreach($specdata as $spd)
                                    <option value="{{$spd['veislname']}}">{{$spd['veislname']}}</option>
                                     @endforeach
                                    </select>
                                 </select>
                            </div>
        
                            <div class="form-group">
                                <label>Pieninis/Mesinis</label>
                                <select name="PM">
                                    <option value="Pieninis">Pieninis</option>
                                    <option value="Mesinis">Mesinis</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label>Ar veršinga?</label>
                                <select name="versing">
                                    <option value="Taip">Taip</option>
                                    <option value="Ne">Ne</option>
                                </select>
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
                    
                  </div>
                </div>

        </div>
        <div class="container">
            @if(count($errors)>0)
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li id="error">{{$error}}</li>
                @endforeach
            </ul>
            </div>
             @endif
            @if(\Session::has('success'))
            <div class="alert alert-success">
                <p id="success">{{\Session::get('success')}}</p>
                </div>
            @endif
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
                    <th>Sėklinimo data</th>
                    <th>Veršiavimosi data</th>
                    <th>Paskutinis veršiavimasis</th>
                    <th>Kiek atsivesta veršiuku</th>
                    <th></th>
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
                    <td>{{$cat['SeklData']}}</td>
                    <td>{{$cat['VersData']}}</td>
                    <td>{{$cat['LastVers']}}</td>
                    <td>{{$cat['AtsivestVers']}}</td>
                    <td>
                        <a class="fa fa-edit" style="font-size:20px;" href="{{url("edit/".$cat->id)}}"></a>
                        <a class="fa fa-times" style="font-size:24px;color:red" onclick="return confirm('Ar tikrai norite ištrinti įrašą?')" href="{{url("delete/".$cat->id)}}"></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
        </table>

    </div>
    </div>
            
</body>
</html>