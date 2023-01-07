<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/js/veislescript.js') }}"></script>
    
<div class="container">
    <table class="table table-bordered data-tablet styled-table">
        <thead>
            <tr>
                <th>Veislės Pavadinimas</th>
                <th></th>
                
            </tr>
        </thead>

        <tbody>
            
        </tbody>

    </table>
</div>
    <script>
         var pathshowspd = "{{ route('veisl.show') }}";
         var pathdelspd = "{{ route('delete.veisl') }}";
    </script>
</body>
</html>