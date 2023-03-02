<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"/> --}}
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
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <script src="path/to/chartjs/dist/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/chart.js') }}" defer></script>
    @include('navbar')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="page">
    <div class="container-xl">
    <div class="page-wrapper">
        <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h2 class="page-title">
                    Galvijų statistika
                  </h2>
                </div>
              </div>
            </div>
          </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl"><br>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex"> 
                      <canvas id="myChart" height="300px"></canvas>
                      <div class="ms-auto">
                      </div>
                    </div>
                    <div id="chart-social-referrals"></div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="container-xl"><br>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex"> 
                        <canvas id="SecondChart" height="300px"></canvas>
                        <div class="ms-auto">
                        </div>
                      </div>
                      <div id="chart-social-referrals"></div>
                    </div>
                  </div>
                </div>
              </div> 
          </div>
        </div>
    </div>
</div>

    
<script>
    var labelx = {{Js::from($labelsecond)}};
    var veisl = {{Js::from($datasecond)}};
    var labeld =  {{ Js::from($labels) }};
    var cattle =  {{ Js::from($data) }};
</script>

    
</body>      
</html>
