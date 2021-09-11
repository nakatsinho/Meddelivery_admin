 

// $('#menu_id').on('change', function(e) {
//     console.log(e);
//     var menu_id = e.target.value;
//     // alert(menu_id)
//     $.post( '/ajaxs', { "_token": $('meta[name="csrf-token"]').attr('content'),"id": menu_id }).done(function( data ) {
//         $('#category_id').empty();
    
//         $.each(data, function(index, subcatObj) {
//             // alert(subcatObj.nome)
//             $('#category_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
//         });
//     });
// }) 

// $('#category_id').on('change', function(e) {
//     console.log(e);
//     var cat_id = e.target.value;

//     $.post( '/ajaxc', { "_token": $('meta[name="csrf-token"]').attr('content'),"id": cat_id }).done(function( data ) {
//         $('#subcategory_id').empty();
    
//         $.each(data, function(index, subcatObj) {
//             // alert(subcatObj.nome)
//             $('#subcategory_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
//         });
//     });
// }) 



// $('#category_id').on('change', function(e) {
//     console.log(e);
//     // var cat_id = e.target.value;
//     var getLink = '/ajax-subcat';
//     var getData={ 
//         _token: "{{ csrf_token() }}",
//         cat_id: e.target.value
//     }

//     // ajax
//     $.get(getLink, getData, function(data) {
//         // success
//         $('#subcategory_id').empty();
        
//         $.each(data, function(index, subcatObj) {
//             // alert(subcatObj.nome)
//             $('#subcategory_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
//         });

//     });

// }) 

// var getLink = '/my-get-link';
// var getData={ 
//     _token: "{{ csrf_token() }}",
//     key: value
// }
// $.get(getLink, getData, function (response) {
//                     var jsonResponse = $.parseJSON(response);
//                     if (jsonResponse.error == 'OK') {
//                         //do something with the data.
//                     }
//                 })

// $(document).ready(function () {
//     $(document).on('change','#category_id',function() {
//         alert("olas");
//         var ref_id = $('#ref_name').val();
//         var token = "{{csrf_token()}}";
//         var postion = $('#position').val();

//         $.ajax({
//             type: "POST",
//             url:"{{route('feedback.create')}}",
//             data:{
//                 'ref_id': ref_id ,
//                 '_token' : token
//             },
//             success:function(data){
//                 $("#ref").html(data);
//                 if(postion ==null || postion =='L' || postion=='R'){
//                     updateHand()
//                 }
//             }
//         });
//     });

// });

// $(document).ready(function(){
    
//     $(document).on('change','#category_id',function() {
//      if($(this).val() != '')
//      {
//       var select = $(this).attr("id");
//       var value = $(this).val();
//       var dependent = $(this).data('dependent');
//       var _token = $('input[name="_token"]').val();
//       $.ajax({
//        url:"{{ route('feedback.create') }}",
//        method:"POST",
//        data:{select:select, value:value, _token:_token, dependent:dependent},
//        success:function(result)
//        {
//         $('#'+dependent).html(result);
//        }
   
//       })
//      }
//     });
   
//     $('#country').change(function(){
//      $('#state').val('');
//      $('#city').val('');
//     });
   
//     $('#state').change(function(){
//      $('#city').val('');
//     });
    
   
//    });