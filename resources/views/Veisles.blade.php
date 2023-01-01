<!DOCTYPE html>
<html lang="en">
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

    @include('navbar')

    <div id="list" class="container">
        <div>
            <div id="meniu">
                <a data-bs-toggle="modal" data-bs-target="#Modal">Pridėti Veislę</a>
              </div>
              <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="ModalLabel">Veislės Pridėjimas</h1>
                    </div>
                <form action="main" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Veislė</label>
                            <input type="text" name="Veisl" class="form-control">
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
                    <th>ID</th>
                    <th>Veislės Pavadinimas</th>
                    <th></th>
                
                </tr>
            </thead>
       
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="fa fa-edit" style="font-size:20px;"></a>
                        <a class="fa fa-times" style="font-size:24px;color:red"></a>
                    </td>
                </tr>
            </tbody>
       
        </table>
        </div>
    </div>
</body>
</html>