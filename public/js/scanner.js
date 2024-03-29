var fullcode;
(function() {
    'use strict';
  
    function remoteModal(idModal) {
      var vm = this;
      vm.modal = $(idModal);
  
      if (vm.modal.length == 0) {
        return false;
      }
  
      if (window.location.hash == idModal) {
        openModal();
      }
  
      var services = {
        open: openModal,
        close: closeModal
      };
  
      return services;
  
      // method to open modal
      function openModal() {
        vm.modal.modal('show');
      }
  
      // method to close modal
      function closeModal() {
        vm.modal.modal('hide');
      }
    }
    Window.prototype.remoteModal = remoteModal;
  })();

  $(function() {
    window.remoteModal('#modal-team');
 });
  
function debounce(func, delay) {
    let timerId;
    return function (...args) {
        clearTimeout(timerId);
        timerId = setTimeout(() => {
            func.apply(this, args);
        }, delay);
    }
};
        var _scannerIsRunning = false;
        var _barcodeDetected = false;

        function startScanner() {
            Quagga.init({
                inputStream: {
                    name: "Live",
                    type: "LiveStream",
                    target: document.querySelector('#scanner-container'),
                    constraints: {
                        width: 640,
                        height: 480,
                        facingMode: "environment"
                        
                    },
                },
                locator: {
                    patchSize: "x-large",
                    halfsample: true
                },
                decoder: {
                    readers: [
                        "code_128_reader"
                    ],
                    debug: {
                        showCanvas: true,
                        showPatches: true,
                        showFoundPatches: true,
                        showSkeleton: true,
                        showLabels: true,
                        showPatchLabels: true,
                        showRemainingPatchLabels: true,
                        boxFromPatches: {
                            showTransformed: true,
                            showTransformedBox: true,
                            showBB: true
                        }
                    }
                },
            
            }, function (err) {
                if (err) {
                    console.log(err);
                    return
                }

                console.log("Initialization finished. Ready to start");
                Quagga.start();


                _scannerIsRunning = true;
            });

            // Quagga.onProcessed(function (result) {
            //     var drawingCtx = Quagga.canvas.ctx.overlay,
            //     drawingCanvas = Quagga.canvas.dom.overlay;

            //     if (result) {
            //         if (result.boxes) {
            //             drawingCtx.clearRect(0, 0, parseInt(drawingCanvas.getAttribute("width")), parseInt(drawingCanvas.getAttribute("height")));
            //             result.boxes.filter(function (box) {
            //                 return box !== result.box;
            //             }).forEach(function (box) {
            //                 Quagga.ImageDebug.drawPath(box, { x: 0, y: 1 }, drawingCtx, { color: "green", lineWidth: 2 });
            //             });
            //         }

            //         if (result.box) {
            //             Quagga.ImageDebug.drawPath(result.box, { x: 0, y: 1 }, drawingCtx, { color: "#00F", lineWidth: 2 });
            //         }

            //         if (result.codeResult && result.codeResult.code) {
            //             Quagga.ImageDebug.drawPath(result.line, { x: 'x', y: 'y' }, drawingCtx, { color: 'red', lineWidth: 3 });
            //         }
            //     }
            // });

            Quagga.onDetected(function (result) {
                if(!_barcodeDetected){
                _barcodeDetected = true;
               fullcode = "LT" + result.codeResult.code;
                document.getElementById("output").innerHTML = fullcode;
                document.getElementById("output2").innerHTML = fullcode;
                localStorage.setItem("barcode", fullcode);
     $.ajax({
        processing: true,
        serverSide: true,
        url: senddata,
        type: 'GET',
        data: {id: fullcode, _token: '{{csrf_token()}}'},
        success: function(response) {
            if (response.exists) {
            $('#modalius2').modal('show');
            } else {
            $('#modalius').modal('show');
            }
        },
    });
             
        }},);
        }

        $('#modalius2').on('hidden.bs.modal', function(){
            location.reload();
        })
        $('#modalius').on('hidden.bs.modal', function(){
            location.reload();
        })

        document.getElementById("btn").addEventListener("click", function () {
            if (_scannerIsRunning) {
                Quagga.stop();
                location.reload();
            } else {
                startScanner();
                document.getElementById('btn').style.background = "#FF0000";
                document.getElementById('btn').value = "Stabdyti"
                _barcodeDetected = false;
            }
        }, false);
