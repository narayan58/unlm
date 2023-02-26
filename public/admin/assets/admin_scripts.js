$(document).ready(function() {
    var baseurl = $('#baseurl').val();
    var external_plugins = $('#external_plugins').val();
    var external_filemanager_path = $('#external_filemanager_path').val();

    $(".dataTable").DataTable({
        "ordering": false,
        "bLengthChange": false,
        "bAutoWidth": false,
        "bPaginate": false,
        "bInfo": false,
        "bDestroy":true,
        "pageLength": 20
    });
    $(".dataTablePagination").DataTable({
        "pagingType": "simple_numbers",
        "ordering": false,
        "bLengthChange": false,
        "bAutoWidth": false,
        "bPaginate": true,
        "bInfo": false,
        "bDestroy":true,
        "pageLength": 20
    });
    $('a.resetbtn').confirm({
        title: 'Delete Data ?',
        content: 'Are You Sure !',
        draggable: false,
        animation: 'zoom',
        closeAnimation: 'scale',
        autoClose: 'close|8000',
        buttons: {
            ok: function(){
                location.href = this.$target.attr('href');
            },
            close: function(){
            }
        }
    });


      $('a.pendingbtn').confirm({
      title: 'Update Data ?',
      content: 'Are You Sure !',
      draggable: false,
      animation: 'zoom',
      closeAnimation: 'scale',
      autoClose: 'close|8000',
      buttons: {
          ok: function(){
              location.href = this.$target.attr('href');
          },
          close: function(){
          }
      }
  });

    $(document).ready(function(){
    $('.onlyclicktheBtn').click(function(){
        $('#courseAdd').modal({
            backdrop: 'static'
        });
    }); 
});





    //dependency 

 $('#product_category_id_selected').change(function(){
    var typeId = $(this).val();    
    var baseurl=$('#baseurl').val();
    console.log(baseurl);

    if(typeId){
        $.ajax({
           type:"GET",
           url: baseurl+'/admin/product/product-category/'+typeId,

           success:function(res){               
            if(res){
                $("#product_sub_category").empty();
                $("#product_sub_category").append('<option>Select Sub Category</option>');
                $.each(res,function(key,value){
                  console.log(value);
                    $("#product_sub_category").append('<option value="'+value+'">'+key+'</option>');
                });
            }else{
               $("#product_sub_category").empty();
            }
           }
        });
    }else{
        $("#product_sub_category").empty();
    }      
   });




   /* $('.resetbtn').click(function(event) {
      if (confirm('Are You Sure??') == true) {
        return true;
      } else{
        return false;
      }
    });*/

    $(".datepicker").datepicker({
        format:"yyyy-mm-dd",
        todayHighlight:!0,
        autoclose:!0,
    });
    $('.fancy').fancybox();
    
     $('.select2').select2({
     tags: true,
     placeholder: 'Select an option'
 });

    $('.read').on('change', function () {
            read = $(this).val();
            $.ajax({
                url: "roleChangeAccess/1/" + read,
                type: "GET"
            });
        });
        $('.write').on('change', function () {
            write = $(this).val();
            $.ajax({
                url: "roleChangeAccess/2/" + write,
                type: "GET"
            });
        });
        $('.edit').on('change', function () {
            edit = $(this).val();
            $.ajax({
                url: "roleChangeAccess/3/" + edit,
                type: "GET"
            });
        });
        $('.delete').on('change', function () {
            del = $(this).val();
            $.ajax({
                url: "roleChangeAccess/4/" + del,
                type: "GET"
            });
        });

        tinymce.init({
            /* replace textarea having class .tinymce with tinymce editor */
            selector: "textarea.tinymce",
            relative_urls: false,
            remove_script_host : false,
            
            /* theme of the editor */
            theme: "modern",
            skin: "lightgray",
            
            /* width and height of the editor */
            width: "100%",
            height: 400,
            
            /* display statusbar */
            statubar: true,
            content_style: ".mce-content-body {font-size:16px;}",
            
            /* plugin */
            plugins: [
              "advlist autolink link image lists charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
              "save table contextmenu directionality emoticons template paste textcolor"
            ],

            /* toolbar */
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | preview code",
            
            /* style */
            style_formats: [
              {title: "Headers", items: [
                {title: "Header 1", format: "h1"},
                {title: "Header 2", format: "h2"},
                {title: "Header 3", format: "h3"},
                {title: "Header 4", format: "h4"},
                {title: "Header 5", format: "h5"},
                {title: "Header 6", format: "h6"}
              ]},
              {title: "Inline", items: [
                {title: "Bold", icon: "bold", format: "bold"},
                {title: "Italic", icon: "italic", format: "italic"},
                {title: "Underline", icon: "underline", format: "underline"},
                {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
                {title: "Superscript", icon: "superscript", format: "superscript"},
                {title: "Subscript", icon: "subscript", format: "subscript"},
                {title: "Code", icon: "code", format: "code"}
              ]},
              {title: "Blocks", items: [
                {title: "Paragraph", format: "p"},
                {title: "Blockquote", format: "blockquote"},
                {title: "Div", format: "div"},
                {title: "Pre", format: "pre"}
              ]},
              {title: "Alignment", items: [
                {title: "Left", icon: "alignleft", format: "alignleft"},
                {title: "Center", icon: "aligncenter", format: "aligncenter"},
                {title: "Right", icon: "alignright", format: "alignright"},
                {title: "Justify", icon: "alignjustify", format: "alignjustify"}
              ]}
            ],
            formats: {
                aligncenter: {selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'center', styles: {display: 'block', margin: '0px auto', textAlign: 'center'}},
            },
            filemanager_crossdomain: true,
              external_filemanager_path:external_filemanager_path,
              external_plugins: { "filemanager" : external_plugins},
        });

        // javascript main starts 
        if (('input[type=radio][name=is_offer]').value == 1) {
            $('#discount_price_div').show('slow');
            // $('#discount_price').val(0);
        }else{
            $('#discount_price_div').hide('slow');
            $('#discount_price').val(0);
        }
            
        $('input[type=radio][name=is_offer]').change(function() {
            if (this.value == 1) {
                $('#discount_price_div').show('slow');
                // $('#discount_price').val(0);
            }else{
                $('#discount_price_div').hide('slow');
                $('#discount_price').val(0);
            }
        });
        
});


function responsive_filemanager_callback(field_id){
    if (field_id != 'file') {
        var image = $('#' + field_id).val();
        $('#prev_img').attr('src',image);
    }
}

// function responsive_filemanager_callback(field_id){
//     if (field_id != 'file') {
//         var image = $('#' + field_id).val();
//         $('#prev_img1').attr('src',image);
//     }
// }

$(".remove_box_image").click(function(event) {
    var baseurl = $('#baseurl').val();
    var no_image = baseurl+"/admin/images/no-image.png";
  $('#prev_img1').attr('src', no_image);
  $('#featured_image').val('');
  $('#image').val('');
  $('.remove_box_image').hide();
  $('.prev_box_image').show();
});

// $(".remove_box_image").click(function(event) {
//     var baseurl = $('#baseurl').val();
//     var no_image = baseurl+"/admin/images/no-image.png";
//   $('#prev_img').attr('src', no_image);
//   $('#featured_image').val('');
//   $('#image').val('');
//   $('.remove_box_image').hide();
//   $('.prev_box_image').show();
// });

$(".deletefile").click(function(event) {
    if (confirm('Are You Sure ? ?') == true) {
        $('#file').val('');
        $('#filearea').hide();
    }else{
        return false;
    }
});


//for feature add
$('#featureAddBtn').click(function(event) {
        event.preventDefault();
  console.log('hey');
        $("#fErrorName").html("");
        $("#fErrorDescription").html("");
        $("#fSuccessMsg").html("");

      $('#featureAddBtn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/admin/feature/store',
        type: 'POST',
        data: $('#featureAddForm').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.title){
                  $('#fErrorName').html(resp.errors.title[0]);
                }
                if(resp.errors.description){
                  $('#fErrorDescription').html(resp.errors.description[0]);
                }
                $('#featureAddBtn').html('Send');
            
            }else{
                $('#fSuccessMsg').html(resp.message);
                $('#featureAddBtn').hide();
                $('#featureAddForm')[0].reset();
                $('#featureAddBtn').html('Submit');
                $('#featureAddBtn').show();
                window.location.reload();
            }
                
      });
});

//for feature edit
function editFeature(value) {
        event.preventDefault();
console.log(value);
        $("#fErrorNameEdit"+value).html("");
        $("#fErrorDesEdit"+value).html("");
        $("#fSuccessMsgEdit"+value).html("");

      $('#featureEditBtn'+value).html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/admin/feature/update/'+value,
        type: 'POST',
        data: $('#featureEditForm'+value).serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.title){
                  $('#fErrorNameEdit'+value).html(resp.errors.title[0]);
                }
                if(resp.errors.description){
                  $('#fErrorDesEdit'+value).html(resp.errors.description[0]);
                }
                $('#featureEditBtn'+value).html('Send');
            
            }else{
                $('#fSuccessMsgEdit'+value).html(resp.message);
                $('#featureEditBtn'+value).hide();
                $('#featureEditForm'+value)[0].reset();
                $('#featureEditBtn'+value).html('Submit');
                $('#featureEditBtn'+value).show();
                window.location.reload();
            }
                
      });
};


//for course type add
$('#courseTypeAddBtn').click(function(event) {
        event.preventDefault();
  console.log('hey');
        $("#ctErrorName").html("");
        $("#ctErrorDescription").html("");
        $("#ctSuccessMsg").html("");

      $('#courseTypeAddBtn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/admin/course-type/store',
        type: 'POST',
        data: $('#courseTypeAddForm').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.title){
                  $('#ctErrorName').html(resp.errors.title[0]);
                }
                if(resp.errors.description){
                  $('#ctErrorDescription').html(resp.errors.description[0]);
                }
                $('#courseTypeAddBtn').html('Send');
            
            }else{
                $('#ctSuccessMsg').html(resp.message);
                $('#courseTypeAddBtn').hide();
                $('#courseTypeAddForm')[0].reset();
                $('#courseTypeAddBtn').html('Submit');
                $('#courseTypeAddBtn').show();
                window.location.reload();
            }
                
      });
});

//for course Type edit
function editcourseType(value) {
        event.preventDefault();
console.log(value);
        $("#ctErrorNameEdit"+value).html("");
        $("#ctErrorDesEdit"+value).html("");
        $("#ctSuccessMsgEdit"+value).html("");

      $('#courseTypeEditBtn'+value).html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/admin/course-type/update/'+value,
        type: 'POST',
        data: $('#courseTypeEditForm'+value).serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.title){
                  $('#ctErrorNameEdit'+value).html(resp.errors.title[0]);
                }
                if(resp.errors.description){
                  $('#ctErrorDesEdit'+value).html(resp.errors.description[0]);
                }
                $('#courseTypeEditBtn'+value).html('Send');
            
            }else{
                $('#ctSuccessMsgEdit'+value).html(resp.message);
                $('#courseTypeEditBtn'+value).hide();
                $('#courseTypeEditForm'+value)[0].reset();
                $('#courseTypeEditBtn'+value).html('Submit');
                $('#courseTypeEditBtn'+value).show();
                window.location.reload();
            }
                
      });
};

    $(document).ready(function(){
          $('#discount_percentage').hide();
          $('#discount_amount').hide();
          if ($('#discount_type').val() == '1') {
            $('#discount_amount').show();
            $('#discount_percentage').hide();
         }

         if ($('#discount_type').val() == '0') {
            $('#discount_amount').hide();
            $('#discount_percentage').show();
         }

        $('#discount_type').click(function(){
         if ($(this).val() == '1') {
            $('#discount_amount').show();
            $('#discount_percentage').hide();
         }
         if ($(this).val() == '0') {
            $('#discount_amount').hide();
            $('#discount_percentage').show();
         }
          if ($(this).val() == '') {
            $('#discount_amount').hide();
            $('#discount_percentage').hide();
         }
       
    }); 
});



