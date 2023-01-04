 <label>Veislė</label>
<select name="Veisl">
 @foreach($specdata as $spd)
<option value="{{$spd['veislname']}}">{{$spd['veislname']}}</option>
 @endforeach
</select>
                            