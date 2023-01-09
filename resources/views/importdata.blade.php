<!DOCTYPE html>
<html>
<head>
    
    <title>Laravel 9 Import Export Excel & CSV File to Database Example - LaravelTuts.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
     @include('navbar')

<div class="container">
    <p style="color: red">Duomenis galima pridėti tik iš failo turinčio .xlsx formatą.</p>
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Duomenų pridėjimas</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('cattle.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-primary">Importuoti Duomenis</button>
            </form>
  
        </div>
    </div>
</div>
     
</body>
</html>