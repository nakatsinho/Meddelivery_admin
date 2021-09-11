

$('#menu_id').on('change', function(e) {
    console.log(e);
    var menu_id = e.target.value;
    // alert(menu_id)
    $.get( '/admin/ajax-subcat2', { "_token": $('meta[name="csrf-token"]').attr('content'),"id": menu_id }).done(function( data ) {
        $('#category_id').empty();
    
        $.each(data, function(index, subcatObj) {
            // alert(subcatObj.nome)
            $('#category_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
        });
    });
}) 

$('#category_id').on('change', function(e) {
    console.log(e);
    var cat_id = e.target.value;

    $.get( '/admin/ajax-subcat', { "_token": $('meta[name="csrf-token"]').attr('content'),"id": cat_id }).done(function( data ) {
        $('#subcategory_id').empty();
    
        $.each(data, function(index, subcatObj) {
            // alert(subcatObj.nome)
            $('#subcategory_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
        });
    });
}) 


// $(document).ready(function() {
           
//     $('.menu_id').change(function(e) { 
//         if($(this).val() != ''){ 
//             var _token = $('input[name = "_tokrn"]').val();
//             console.log(e);
//             var cat_id = e.target.value; 

//             $.ajax({
//                 url: 'dep/'.cat_id,
//                 method:"POST",
//                 data: { cat_id:cat_id, _token:_token },
//             })
//         } 
//     });
    
// });

  


  