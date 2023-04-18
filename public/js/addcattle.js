
var x = localStorage.getItem("barcode");
localStorage.setItem("barcode2", "LT000006503298");
var v = localStorage.getItem("barcode2");
document.getElementById("GalvijoNr").value = x;

function callsearch(){

    var table = $('.data-table').DataTable();
    var searchvalue = v;
    var columnindex = 0;
    table.column(columnindex).search(searchvalue);
    table.search(searchvalue).draw().data();
  };



// localStorage.clear();

