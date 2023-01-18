<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    
    
    <title></title>
</head>
<body>
    @csrf
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @include('navbar')

    <div id="list" class="container">
        <div>
            <div id="meniu">
                <a class="button" data-bs-toggle="modal" data-bs-target="#Modal">Pridėti Veislę</a><br>
              </div>
              <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="ModalLabel">Veislės Pridėjimas</h1>
                    </div>
                <form action="species" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Veislė</label>
                            <input type="text" name="veislname" class="form-control">
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
        <br>
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
          
          @include('specdatatable')
</body>
</html>