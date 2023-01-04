<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    
<div class="container">
   
    <table class="table table-bordered data-table styled-table">
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
                <th>Paskutinis veršiavimasis</th>
                <th>Kiek atsivesta veršiuku</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
<script type="text/javascript">
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('data.show') }}",
        columns: [
            {data: 'GalvijoNr', name: 'GalvijoNr'},
            {data: 'MotinosNr', name: 'MotinosNr'},
            {data: 'Tipas', name: 'Tipas'},
            {data: 'GimimoData', name: 'GimimoData'},
            {data: 'Amzius', name: 'Amzius'},
            {data: 'Veisl', name: 'Veisl'},
            {data: 'PM', name: 'PM'},
            {data: 'Versing', name: 'Versing'},
            {data: 'SeklData', name: 'SeklData'},
            {data: 'VersData', name: 'VersData'},
            {data: 'LastVers', name: 'LastVers'},
            {data: 'AtsivestVers', name: 'AtsivestVers'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('.data-table').on('click','.delete',function(){
            var id = $(this).data('id');

            var deleteConfirm = confirm("Ar tikrai norite ištrinti šį įrašą?");
            if (deleteConfirm == true) {
                 $.ajax({
                     url: "{{ route('delete.cattle') }}",
                     type: 'post',
                     data: {_token: CSRF_TOKEN,id: id},
                     success: function(response){
                          if(response.success != 1)
                               window.location.reload();
                     }
                 });
                }
            });
            
  });
</script>
</html>