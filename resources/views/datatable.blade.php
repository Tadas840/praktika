
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/js/scripts.js') }}" defer></script>

<div class="container">
   
    <table class="table table-bordered data-table styled-table">
        <thead>
            <tr>
                <th></th>
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
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script>
    var pathshow = "{{ route('data.show') }}";
    var pathdel = "{{ route('delete.cattle') }}";
</script>
</body>
</html>
