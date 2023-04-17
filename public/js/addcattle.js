function functioncalc(){
    sessionStorage.setItem("barcode", fullcode);
    var x = sessionStorage.getItem("barcode");
    console.log(x);
}