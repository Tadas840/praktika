<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @csrf
    @include('navbar')

    <div id="list" class="container">
        <div>
            <div id="meniu">
                <a class="button" data-bs-toggle="modal" data-bs-target="#Modal">Pridėti Veislę</a>
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
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Veislės Pavadinimas</th>
                    <th></th>
                </tr>
            </thead>
  @foreach($spec as $sp)
            <tbody>
                <tr> 
                    <td>{{$sp['veislname']}}</td>
                    <td>
                        <a class="btn btn-sm btn-info"  href="{{url("editspec/".$sp->id)}}"><i class='fa fa-edit'></i></a>
                        <a class="btn btn-sm btn-danger" onclick="return confirm('Ar tikrai norite ištrinti įrašą?')" href="{{url("deleteveisl/".$sp->id)}}"><i class='fa fa-times'></i></a>
                    </td>
                </tr>
            </tbody>
 @endforeach
        </table>
        </div>
    </div>
</body>
</html>