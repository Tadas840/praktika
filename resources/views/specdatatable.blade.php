<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
   <link href="./dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1674944402" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/js/veislescript.js') }}"></script>
    
<div class="container">
    <table class="table table-bordered data-tablet styled-table">
        <thead>
            <tr>
                <th></th>
                <th>Veislės Pavadinimas</th>
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