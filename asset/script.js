function get_pembeli(test) {
    var data = $(test).attr('id');
    
       $.ajax({
           url     : "get_pembeli.php",
           method  : "POST",
           data    :  {id_pembeli:data},
           dataType : "json",
           success : function(response) {

              $("#nama").val(response.nama);
              $('#no_telpon').val(response.no_telpon);

              if (response.jk=='L') {
                  $('#jk_m').attr('checked', true);
              } else{
                $('#jk_f').attr('checked', true);
              }
    
           }

       })
    
}
function update_pembeli(){
    var data = $('#form-pembeli').serialize;
    $.ajax({

        url : SVGFEDisplacementMapElement.php,
        method : "POST",
        data : data,
        dataType : "json",
        success : function(response) {
            if (response.status == 'berhasil'){
                window.location.replace("pembeli.php")
            }
        }


    })
}













