@extends('partials.app')

    @section('content')
    
<div class="page">
<div class="container-xl">
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title">
                Duomenis galima pridėti tik iš failo turinčio .xlsx formatą.
              </h2>
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
</div>
</div>
</div>
</div>
</div>
</div>

     
@endsection