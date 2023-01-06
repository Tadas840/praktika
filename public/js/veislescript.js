
$(function () {
 
    
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: pathshowspd,
        columns: [
            {data: 'veislname', name: 'veislname'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('.data-table').on('click','.deleteveisl',function(){
            var id = $(this).data('id');
            
            var deleteConfirm = confirm("Ar tikrai norite ištrinti šį įrašą?");
            if (deleteConfirm == true) {
                 $.ajax({
                     url: pathdelspd,
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