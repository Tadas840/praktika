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
                      <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Pridėti Veislę</a><br>
                    </h2><br>
                    @include('specdatatable')
                  </div>
                </div>
              </div>
            </div>
            
      </div>
      </div>
    </div>
    <div id="list" class="container">
        <div>
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

@endsection