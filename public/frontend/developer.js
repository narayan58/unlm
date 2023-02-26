  function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
});

$('#ss').click(function(event) {
  console.log('hey');
$(".ssImage").trigger("click");
});



 $('#mybutt').click(function() {
                    $('#msgbox').html('<iframe src="http://www.stackexchange.com" width="550" height="700"></iframe>');
                    $('#msgbox').dialog('open');
                });



//for news letters
$('#newsLetterBtn').click(function(event) {
        event.preventDefault();
        $("#newsletterError").html("");
        $("#newsletterSuccess").html("");

      $('#newsLetterBtn').html('Submitting..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/news-letter/store',
        type: 'POST',
        data: $('#newsLetterForm').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {
                if(resp.errors.email){
                  $('#newsletterError').html(resp.errors.email[0]);
                }
                $('#newsLetterBtn').html('Subscribe');
                $("#newsletterSuccess").html("");
            }else{
               $('#newsletterSuccess').html(resp.message);
                $('#newsLetterBtn').hide();
                $('#newsLetterForm')[0].reset();
                $('#newsLetterBtn').html('Subscribe');
                $('#newsLetterBtn').show();
            }
      });
});

//for product review
$('#reviewSubmitBtn').click(function(event) {
        event.preventDefault();
        $("#reviewNickName").html("");
        $("#reviewReview").html("");
        $("#reviewReviewSuccess").html("");

      $('#reviewSubmitBtn').html('Submitting..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/productReview',
        type: 'POST',
        data: $('#reviewSubmitForm').serialize(),
      })
      .always(function(resp) {
            if (resp.error == true) {
                if(resp.errors.nickname){
                  $('#reviewNickName').html(resp.errors.nickname[0]);
                }
                if(resp.errors.review){
                  $('#reviewReview').html(resp.errors.review[0]);
                }
                $('#reviewSubmitBtn').html('Submit Review');
                $("#reviewReviewSuccess").html("");
            }else{
               $('#reviewReviewSuccess').html(resp.message);
                $('#reviewSubmitBtn').hide();
                $('#reviewSubmitForm')[0].reset();
                $('#reviewSubmitBtn').html('Submit Review');
                $('#reviewSubmitBtn').show();
            }
      });
});


//for product enroll
$('#product_enroll_btn').click(function(event) {
        event.preventDefault();
        $("#product_enroll_name").html("");
        $("#product_enroll_phone").html("");
        $("#product_enroll_email").html("");
        $("#product_enroll_address").html("");
        $("#product_enroll_success").html("");

      $('#product_enroll_btn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/productEnroll',
        type: 'POST',
        data: $('#product_enroll_form').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.name){
                  $('#product_enroll_name').html(resp.errors.name[0]);
                }
                if(resp.errors.phone){
                  $('#product_enroll_phone').html(resp.errors.phone[0]);
                }
                if(resp.errors.email){
                  $('#product_enroll_email').html(resp.errors.email[0]);
                } 
               if(resp.errors.address){
                  $('#product_enroll_address').html(resp.errors.address[0]);
                }
                $('#product_enroll_btn').html('Checkout');
            }else{
                $('#product_enroll_success').html(resp.message);
                $('#product_enroll_btn').hide();
                $('#product_enroll_form')[0].reset();
                $('#product_enroll_btn').html('Checkout');
                $('#product_enroll_btn').show();
            }
      });
});



//for contact us
$('#contact_us_btn').click(function(event) {
        event.preventDefault();
        $("#error_contact_name").html("");
        $("#error_contact_email").html("");
        $("#error_contact_phoneno").html("");
        $("#error_contact_message").html("");
        $("#contact_success").html("");

      $('#contact_us_btn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/sentMail',
        type: 'POST',
        data: $('#contact_us_form').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.name){
                  $('#error_contact_name').html(resp.errors.name[0]);
                }
                if(resp.errors.phoneno){
                  $('#error_contact_phoneno').html(resp.errors.phoneno[0]);
                }
                if(resp.errors.email){
                  $('#error_contact_email').html(resp.errors.email[0]);
                } 
               if(resp.errors.message){
                  $('#error_contact_message').html(resp.errors.message[0]);
                }
                $('#contact_us_btn').html('Send message');
            }else{
                $('#contact_success').html(resp.message);
                $('#contact_us_btn').hide();
                $('#contact_us_form')[0].reset();
                $('#contact_us_btn').html('Send message');
                $('#contact_us_btn').show();
            }
      });
});


//for get quote
$('#get_quote_btn').click(function(event) {
        event.preventDefault();
        $("#get_quote_error_name").html("");
        $("#get_quote_error_phone").html("");
        $("#get_quote_error_email").html("");
        $("#get_quote_error_vehicle").html("");
        $("#get_quote_error_insurance").html("");
        $("#get_quote_success_message").html("");

      $('#get_quote_btn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/quote-request',
        type: 'POST',
        data: $('#get_quote_form').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.name){
                  $('#get_quote_error_name').html(resp.errors.name[0]);
                }
                if(resp.errors.phone){
                  $('#get_quote_error_phone').html(resp.errors.phone[0]);
                }
                if(resp.errors.email){
                  $('#get_quote_error_email').html(resp.errors.email[0]);
                } 
               if(resp.errors.vehicle_type_id){
                  $('#get_quote_error_vehicle').html(resp.errors.vehicle_type_id[0]);
                }
                if(resp.errors.insurance_type_id){
                  $('#get_quote_error_insurance').html(resp.errors.insurance_type_id[0]);
                }
                $('#get_quote_btn').html('Get Quote');
            }else{
                $('#get_quote_success_message').html(resp.message);
                $('#get_quote_btn').hide();
                $('#get_quote_form')[0].reset();
                $('#get_quote_btn').html('Get Quote');
                $('#get_quote_btn').show();
            }
      });
});

//for student registration
$('#customerRegisterBtn').click(function(event) {
        event.preventDefault();
        $("#customerName").html("");
        $("#customerEmail").html("");
        $("#customerMobile").html("");
        $("#customerAddress").html("");
        $("#customerCity").html("");
        $("#customerPassword").html("");
        $("#customerCPassword").html("");
        $("#customerSuccessMsg").html("");

      $('#customerRegisterBtn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/register',
        type: 'POST',
        data: $('#customerRegisterForm').serialize(),
      })
      .always(function(resp) {
            if (resp.error == true) {
                if(resp.errors.name){
                  $('#customerName').html(resp.errors.name[0]);
                }
                if(resp.errors.email){
                  $('#customerEmail').html(resp.errors.email[0]);
                }
                if(resp.errors.address){
                  $('#customerAddress').html(resp.errors.address[0]);
                }
                if(resp.errors.city){
                  $('#customerCity').html(resp.errors.city[0]);
                }
                if(resp.errors.mobile){
                  $('#customerMobile').html(resp.errors.mobile[0]);
                }
               if(resp.errors.password){
                  $('#customerPassword').html(resp.errors.password[0]);
                }
                if(resp.errors.password_confirmation){
                  $('#customerCPassword').html(resp.errors.password_confirmation[0]);
                }
                $('#customerRegisterBtn').html('Create your account');
            }else{
                $('#customerRegisterBtn').hide();
                $('#customerRegisterForm')[0].reset();
                $('#customerRegisterBtn').html('Create your account');
                $('#customerRegisterBtn').show();
            }
            if (resp.error == 'success') {
                // window.location.reload();
                window.location.href = baseurl+'/customer/dashboard';
            }
      });
});


//for customer login
$('#customerLoginBtn').click(function(event) {
        event.preventDefault();
        $("#cEmail").html("");
        $("#cPassword").html("");
        $("#customerLoginMessage").html("");

      $('#customerLoginBtn').html('Sending..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/login',
        type: 'POST',
        data: $('#customerLoginForm').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.email){
                  $('#cEmail').html(resp.errors.email[0]);
                }
                if(resp.errors.password){
                  $('#cPassword').html(resp.errors.password[0]);
                }
                
                $('#customerLoginBtn').html('Login');
            }
            if (resp.error == 'notMatch') {
                $('#customerLoginMessage').html(resp.message);
                $('#customerLoginBtn').html('Login');
            }

            if (resp.error == 'success') {
              if (resp.from_login == '1') {
                window.location.href = baseurl+'/customer/dashboard';
              }else{
                window.location.reload();
              }
            }
      });
});


//for password change customer
$('#customerPasswordChangeBtn').click(function(event) {
        event.preventDefault();
        $("#customerPasswordChangeOld").html("");
        $("#customerPasswordChangeNew").html("");
        $("#customerPasswordChangeConf").html("");
        $("#customerPasswordChangeSm").html("");

      $('#customerPasswordChangeBtn').html('Changing..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/password/change',
        type: 'POST',
        data: $('#customerPasswordChangeForm').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.old){
                  $('#customerPasswordChangeOld').html(resp.errors.old[0]);
                }
                if(resp.errors.password){
                  $('#customerPasswordChangeNew').html(resp.errors.password[0]);
                }
                if(resp.errors.password_confirmation){
                  $('#customerPasswordChangeConf').html(resp.errors.password_confirmation[0]);
                } 
                $('#customerPasswordChangeBtn').html('Change Password');
            }else{
                $('#customerPasswordChangeBtn').hide();
                $('#customerPasswordChangeForm')[0].reset();
                $('#customerPasswordChangeBtn').html('Change Password');
                $('#customerPasswordChangeBtn').show();
                $('#customerPasswordChangeSm').html(resp.message);
            }
      });
});



//for Update profile customer
$('#customerProfileChangeBtn').click(function(event) {
        event.preventDefault();
        $("#customerFullNameUpdate").html("");
        $("#customerEmailUpdate").html("");
        $("#customerMobileUpdate").html("");
        $("#customerUpdateProfile").html("");
        $("#customerAddressUpdate").html("");
        $("#customerCityUpdate").html("");

      $('#customerProfileChangeBtn').html('Updating..');
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/update/profile',
        type: 'POST',
        data: $('#customerProfileChangeForm').serialize(),
      })
      .always(function(resp) {
        console.log(resp)
            if (resp.error == true) {

                if(resp.errors.name){
                  $('#customerFullNameUpdate').html(resp.errors.name[0]);
                }
                if(resp.errors.email){
                  $('#customerEmailUpdate').html(resp.errors.email[0]);
                }
                if(resp.errors.mobile){
                  $('#customerMobileUpdate').html(resp.errors.mobile[0]);
                } 
                if(resp.errors.address){
                  $('#customerAddressUpdate').html(resp.errors.address[0]);
                } 
                if(resp.errors.city){
                  $('#customerCityUpdate').html(resp.errors.city[0]);
                } 
                $('#customerProfileChangeBtn').html('Update Your Profile');
            }else{
                $('#customerProfileChangeBtn').hide();
                $('#customerProfileChangeForm')[0].reset();
                $('#customerProfileChangeBtn').html('Update Your Profile');
                $('#customerProfileChangeBtn').show();
                $('#customerUpdateProfile').html(resp.message);
            }
      });
});




$('#wishlistStoreBtn').click(function(event) {
        event.preventDefault();
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/wish-product/store',
        type: 'POST',
        data: $('#wishlistStoreForm').serialize(),
      })
      .always(function(resp) {
        window.location.reload();
      });
});


$('#wishlistRemoveBtn').click(function(event) {
        event.preventDefault();
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/wish-product/remove',
        type: 'POST',
        data: $('#wishlistRemoveForm').serialize(),
      })
      .always(function(resp) {
/*        window.location.reload();
*/      });
});

$('#WishAddBtn').click(function(event) {
        event.preventDefault();
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/wish/add',
        type: 'POST',
        data: $('#WishAddForm').serialize(),
      })
      .always(function(resp) {
        window.location.reload();
      });
});



function functionWishRemove(value) {
        event.preventDefault();
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/wish-product/remove',
        type: 'POST',
        data: $('#wishlistRemoveForm'+value).serialize(),
      })
      .always(function(resp) {
                window.location.reload();
      });
};


function functionCartRemove(value) {
        event.preventDefault();
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/cart/remove',
        type: 'POST',
        data: $('#cartRemoveForm'+value).serialize(),
      })
      .always(function(resp) {
                 window.location.reload();
      });
};



//add to cart

$('#CartAddBtn').click(function(event) {
        event.preventDefault();
      var baseurl=$('#baseurl').val();
      $.ajax({
        url: baseurl+'/customer/cart/add',
        type: 'POST',
        data: $('#CartAddForm').serialize(),
      })
      .always(function(resp) {
        window.location.reload();
      });
});