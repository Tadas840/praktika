
var x = localStorage.getItem("barcode");
document.getElementById("GalvijoNr").value = x;
$(document).ready(function(){
    $.ajax({
        url: "/check-record",
        method: "POST",
        data: { searchValue : x},
        dataType: "json",
        success: function(response) {
            if (response.status == "success") {
                // Record exists, do something
                console.log("Record exists in database!");
            } else {
                // Record does not exist, do something
                console.log("Record does not exist in database!");
            }
        },
        error: function() {
            console.log("Error occurred while checking record in database!");
        }
    });
})
localStorage.clear();

