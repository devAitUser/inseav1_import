var check_parent = 'false';


 var all_dossiers = [];
 
 var type_btn = 'btn_dossier';




function removeRow_table_champs_add(e,row,id=null) {

  e.preventDefault();

  document.getElementById("row_" + row).remove();




    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
     });

    $.ajax({
      url: APP_URL+"/delete_value_field_inventaire",
      method:"POST",
      data:{
        items_delete : row
      },
      success:function(data){
  
        
  
    
    
  
      }
     })

  






}



$(document).ready(function() {

  

        var id_get = 1;

        var tableLength = 1;
        var count = 1;


        var count_f = 1;

        
      
        $('#inventaire_id').on('change', function() {
          var id_select = $('#inventaire_id option:selected').val();
  
    
        alert(id_select);
  

          
       
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: APP_URL + "/get_field_inventaire_api",
                method: "post",
                dataType: "json",
                data: {
                  id_select: id_select
                },
                success: function(data) {
                  
                    // $.each(data, function() {
        
                        //     $("#parent_select").append($("<option     />").val(this.id).text(this.nom_champs));
                    // });

                    console.log(data)
        
        
                }
            })
  
      });
  

        
// $('#inventaireSelect').on('change', function() {
      //   var id_select = $('#inventaire_id option:selected').val();

  
      //   alert(id_select);


        
     
      //     $.ajaxSetup({
      //         headers: {
      //             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      //         }
      //     });
      //     $.ajax({
      //         url: APP_URL + "/fill_parent_dossier",
      //         method: "get",
      //         dataType: "json",
      //         data: {
      //           id_select: id_select
      //         },
      //         success: function(data) {
      //           $("#parent_select").find('option').not(':first').remove();
      //             $.each(data, function() {
      
      //                 $("#parent_select").append($("<option     />").val(this.id).text(this.nom_champs));
      //             });


  

      
      $('.btn_add_oranigramme').on('click', function(event){
             event.preventDefault();
       

            


        
            var add_row = '<tr id=row_table_champs_add_' + count + '  >';

      


            add_row += '<td><input id="input' + count + '" name="new_name_champ[]" class="form-control" type="text"   required></td>';

      
          

            add_row += '<td>  <div class="block_action_organigramme"> ';
            add_row += '<a href="" onClick="removeRow_table_champs_add_inventaire(event,' + count + ')" ><i class="fa-solid fa-circle-xmark "></i></a>';
            add_row += '      </div> </td></tr>';
          
                



            if (tableLength > 0) {

                $("#add_table_champs_add tbody tr:last").after(add_row);
            }
            if (tableLength == 0) {

                $("#add_table_champs_add tbody ").append(add_row);
            }
            tableLength++;
            count++;



       });

     



});





