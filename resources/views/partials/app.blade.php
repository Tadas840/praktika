<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link href="{{asset('./dist/css/tabler.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{asset('./dist/css/tabler-flags.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{asset('./dist/css/tabler-payments.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{asset('./dist/css/tabler-vendors.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{asset('./dist/css/demo.min.css?1674944402') }}" rel="stylesheet"/>
    <link href="{{asset('./css/custom.css') }}" rel="stylesheet"/>
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
          
           <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a style="text-decoration: none" href=".">
                  <img src="../static/cow.svg" width="110" height="32" alt="Pieno Ūkis" class="navbar-brand-image">
                  Pieno Ūkis
                </a>
              </h1>
              <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item d-none d-md-flex me-3">
                  <div class="btn-list">
                    <a href="{{url('logout')}}" class="btn" target="_blank" rel="noreferrer">
                    
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M14 12l-10 0"></path>
                          <path d="M14 12l-4 4"></path>
                          <path d="M14 12l-4 -4"></path>
                          <path d="M20 4l0 16"></path>
                       </svg>                   
                        Atsijungti
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <header class="navbar-expand-md">
              <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar navbar-light">
                  <div class="container-xl">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="/" >
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                               </svg>                        
                              </span>
                          <span class="nav-link-title">
                            Pradžia
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-article" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                  <path d="M7 8h10"></path>
                                  <path d="M7 12h10"></path>
                                  <path d="M7 16h10"></path>
                               </svg>                        
                              </span>
                          <span class="nav-link-title">
                            Galvijų sąrašas
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/species" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                            </span>
                            <span class="nav-link-title">
                              Veislės
                            </span>
                          </a>
                        </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/chart">
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-bar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                  <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                  <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                  <path d="M4 20l14 0"></path>
                               </svg>
                              </span>
                          <span class="nav-link-title">
                              Statistika
                          </span>
                          </a>
                       </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/importdata">
                              <span class="nav-link-icon d-md-none d-lg-inline-block">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-import" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                  <path d="M5 13v-8a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5.5m-9.5 -2h7m-3 -3l3 3l-3 3"></path>
                              </svg>
                      </span>
                      <span class="nav-link-title">
                          Duomenų įkėlimas
                      </span>
                      </a>
  
                      <li class="nav-item">
                          <a class="nav-link" href="/scan">
                          <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-barcode" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M4 7v-1a2 2 0 0 1 2 -2h2"></path>
                          <path d="M4 17v1a2 2 0 0 0 2 2h2"></path>
                          <path d="M16 4h2a2 2 0 0 1 2 2v1"></path>
                          <path d="M16 20h2a2 2 0 0 0 2 -2v-1"></path>
                          <path d="M5 11h1v2h-1z"></path>
                          <path d="M10 11l0 2"></path>
                          <path d="M14 11h1v2h-1z"></path>
                          <path d="M19 11l0 2"></path>
                       </svg>
                          </span>
                       <span class="nav-link-title">
                          Skenavimas
                      </span>
                      </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </header>
          
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="./dist/js/demo-theme.min.js?1674944402"></script>
        <script src="path/to/chartjs/dist/Chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="{{ asset('/js/chart.js') }}" defer></script>
        <script src="{{ asset('/js/scripts.js') }}" defer></script>
        <script src="{{ asset('/js/veislescript.js') }}"></script>
    

        <script>
            var pathshow = "{{ route('data.show') }}";
            var pathdel = "{{ route('delete.cattle') }}";
            var pathshowspd = "{{ route('veisl.show') }}";
            var pathdelspd = "{{ route('delete.veisl') }}";
        </script>
    
    </body>