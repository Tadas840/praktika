
<div class="container">
    <div class="modal modal-blur fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="ModalLabel">Galvijų Pridėjimas</h1>
            </div>
        
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
            </div>
        </div>
    </div>


