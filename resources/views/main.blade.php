<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> --}}
    <link href="./dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1674944402" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
          --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
          font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>

    <title>Galvijų apskaitos kompiuterizuota sistema</title>
</head>
<body>
    @csrf

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   @include('navbar')
 


   <div class="page">
    <div class="container-xl">
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h2 class="page-title">
                    
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Pridėti Galviją</a><br>
                   
                  </h2><br>
                  @include('datatable')
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>
   </div>
          
          <div class="container">
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
                              <input type="text" name="GalvijoNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Motinos Nr </label>
                              <input type="text" name="MotinosNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Tipas</label>
                              <select name="Tipas">
                                <option value="Karve">Karve</option>
                                <option value="Jautis">Buliukas</option>
                                <option value="Telycaite">Telycaite</option>
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
                                    <option value="Ne">Ne</option>
                                    <option value="Taip">Taip</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sėklinimo Data</label>
                                <input type="date" name="SeklData" class="form-control">
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
        
        <br>
        </table>   
       

    </div>
    </div> 
</body>
</html>