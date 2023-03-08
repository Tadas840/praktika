@extends('partials.app')

@section('content')
    
    @include('navbar')

   
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
@endsection


