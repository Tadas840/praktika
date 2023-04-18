
var x = localStorage.getItem("barcode");
localStorage.setItem("barcode2", "LT000006503298");
var v = localStorage.getItem("barcode2");
document.getElementById("GalvijoNr").value = x;

// function callsearch(){
// // var table = $('.data-table').DataTable();
// var searchvalue = x;
// // var columnindex = 0;
// // table.column(columnindex).search(searchvalue);
// // table.search(searchvalue).draw().data();
// var mylink = "/?value=" + searchvalue;
// window.location.href = mylink;
// }

// const urlparams = new URLSearchParams(window.location.search);
// const value = urlparams.get('value');

// if(value != null){
//     var tabler = $('.data-table').DataTable();
//     var columnindex = 0;
//     tabler.column(columnindex).search(value);
//     tabler.search(value).draw().data();
// }
console.log(value);

// localStorage.clear();

