
    function callsearch(){
        // var table = $('.data-table').DataTable();
        var searchvalue = x;
        // var columnindex = 0;
        // table.column(columnindex).search(searchvalue);
        // table.search(searchvalue).draw().data();
        var mylink = "/?value=" + searchvalue;
        window.location.href = mylink;
        }

$(function () {
  
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: pathshow,
      responsive: true,
      maintainAspectRatio: false,
      columns: [
          {data: 'action', name: 'action', orderable: false, searchable: false},
          {data: 'GalvijoNr', name: 'GalvijoNr'},
          {data: 'MotinosNr', name: 'MotinosNr'},
          {data: 'Tipas', name: 'Tipas'},
          {data: 'GimimoData', name: 'GimimoData'},
          {data: 'Amzius', name: 'Amzius'},
          {data: 'Veisl', name: 'Veisl'},
          {data: 'PM', name: 'PM'},
          {data: 'Versing', name: 'Versing'},
          {data: 'SeklData', name: 'SeklData'},
          {data: 'VersData', name: 'VersData'},
          {data: 'LastVers', name: 'LastVers'},
          {data: 'AtsivestVers', name: 'AtsivestVers'},
          
      ]
  })

  
    const urlparams = new URLSearchParams(window.location.search);
    const value = urlparams.get('value');
    
    if(value != null){
        var columnindex = 0;
        table.column(columnindex).search(value);
        table.search(value).draw().data();
    }
  ;
  $('.data-table').on('click','.delete',function(){
          var id = $(this).data('id');
          var deleteConfirm = confirm("Ar tikrai norite ištrinti šį įrašą?");
          if (deleteConfirm == true) {
               $.ajax({
                   url: pathdel,
                   type: 'post',
                   data: {_token: CSRF_TOKEN,id: id},
                   success: function(response){
                        if(response.success != 1)
                             window.location.reload();
                   }
               });
              }
            });
     
});