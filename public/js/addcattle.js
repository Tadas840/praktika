
var x = localStorage.getItem("barcode");
document.getElementById("GalvijoNr").value = x;
console.log(senddata);
function myfunction(){
var c = 'LT000006504444';
     $.ajax({
        processing: true,
        serverSide: true,
        url: senddata,
        type: 'GET',
        data: {id: c, _token: '{{csrf_token()}}'},
        success: function(response) {
            if (response.exists) {
               console.log('exists');
            } else {
                console.log('nop');
            }
        },
    });
}
localStorage.clear();

