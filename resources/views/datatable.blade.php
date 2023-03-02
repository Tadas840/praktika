
<!DOCTYPE html>
<html>
<head>
    <title></title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/js/scripts.js') }}" defer></script>

<div class="container">
    <div class="page">
        <div class="container-xl">
        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                  <div class="row g-2 align-items-center">
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
</div>
</div>
</div>
</div>
    </div>
</div>
<script>
    var pathshow = "{{ route('data.show') }}";
    var pathdel = "{{ route('delete.cattle') }}";
</script>
</body>
</html>
