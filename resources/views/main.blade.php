@extends('partials.app')
 @section('content')


   <div class="page">

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
          
    <div class="container-xl">
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                 
                  <h2 class="page-title">
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-team">Pridėti Galviją</a><br> 
                    {{-- <a href="edit.blade.php" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal">Update</a><br> --}}
                    <a class="btn btn-primary" onclick="myfunction()">Test</a><br>
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
            <div class="modal modal-blur fade" id="modal-team" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="ModalLabel">Galvijų Pridėjimas</h1>
                    </div>
                <form action="main" method="POST">
                    @csrf
                    <div class="modal-body">
        
                            <div class="form-group">
                              <label>Galvijo Nr </label>
                              <input type="text" id="GalvijoNr" name="GalvijoNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Motinos Nr </label>
                              <input type="text" name="MotinosNr" class="form-control">
                            </div>
        
                            <div class="form-group">
                              <label>Tipas</label>
                              <select name="Tipas" style="width:100%">
                                <option value="Karve">Karve</option>
                                <option value="Buliukas">Buliukas</option>
                                <option value="Telycaite">Telycaite</option>
                             </select>
                            </div>
        
                            <div class="form-group">
                                <label>Gimimo Data</label>
                                <input type="date" name="GimimoData" class="form-control">
                            </div>
        
                            <div class="form-group">
                                <label>Veislė</label>
                                <select name="Veisl" style="width:100%">
                                     @foreach($specdata as $spd)
                                    <option value="{{$spd['veislname']}}">{{$spd['veislname']}}</option>
                                     @endforeach
                                    </select>
                            </div>
        
                            <div class="form-group">
                                <label>Pieninis/Mesinis</label>
                                <select name="PM" style="width:100%">
                                    <option value="Pieninis">Pieninis</option>
                                    <option value="Mesinis">Mesinis</option>
                                </select>
                            </div>
        
                            <div class="form-group">
                                <label>Ar veršinga?</label>
                                <select name="Versing" style="width:100%">
                                    <option value="Ne">Ne</option>
                                    <option value="Taip">Taip</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sėklinimo Data</label>
                                <input type="date" name="SeklData" class="form-control">
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
        
         {{-- <div class="container">
          <div class="modal modal-blur fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
            <form action="{{url("edit/".$cattles->id)}}" method="POST">
        @csrf 
        @method('PUT')
        <table class="table table-bordered styled-table">
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
                    <th></th>
                
                   
                </tr>
            </thead>

            <tbody>
                <tr>
                <td><input type="text" style="width: 80px" name="GalvijoNr" value="{{$cattles['GalvijoNr']}}"></td>
                    <td><input type="text" style="width: 80px" name="MotinosNr" value="{{$cattles['MotinosNr']}}"></td>
                    <td>
                        <select name="Tipas" value="{{$cattles['Tipas']}}">
                          <option value="Karve">Karve</option>
                          <option value="Jautis">Buliukas</option>
                          <option value="Telycaite">Telycaite</option>
                        </select>
                    </td>
                    <td><input type="date" name="GimimoData" value="{{$cattles['GimimoData']}}"></td>
                    <td>{{$cattles['Amzius']}}</td>
                    <td>
                        <select name="Veisl">
                            @foreach($spec as $spd)
                           <option value="{{$spd['veislname']}}">{{$spd['veislname']}}</option>
                            @endforeach
                           </select>
                    
                         </td>
                         <td>
                        <select name="PM" value="{{$cattles['PM']}}">
                            <option value="Pieninis">Pieninis</option>
                            <option value="Mesinis">Mesinis</option>
                        </select>
                        </td>
                        <td>
                        <select name="versing" value="{{$cattles['Versing']}}">
                            <option value="Ne">Ne</option>
                            <option value="Taip">Taip</option>
                        </select>
                         </td>
                        <td><input type="date" name="SeklData" value="{{$cattles['SeklData']}}"></td>
                        <td><input type="date" name="VersData" value="{{$cattles['VersData']}}"></td>
                        <td> <button type="submit"><i style="font-size:16px; color:green;" class="fa fa-check"></i></button></td>
                          </tr>
                        </tbody>
                        </table>
    
                    </form>
             </div>
            </div>
          </div>
        </div> --}}
                </div>
        
        <br>
        
    </div>
    </div> 
@endsection