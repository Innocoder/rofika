$(document).ready(function(){

 // Get the current year for the copyright
 $('#year').text(new Date().getFullYear());

 //filter image gallary list
 $('.gallery-list-item').click(function() {
    let value = $(this).attr('data-filter');
    if(value === 'all') {
      $('.filter').show(300);
    } else {
      $('.filter').not('.' + value).hide(300);
      $('.filter').filter('.' + value).show(300);
    }
  });

  $('.gallery-list-item').click(function() {
    $(this).addClass('active-item').siblings().removeClass('active-item');
  });

});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


// $(function () {
//    // $('#qoute-form').validator();

//    var name = $("#name");
//    var email = $("#email");
//    var number = $("#number");
//    var service = $("#ServiceSelect");
//    var message = $("#message");

//     $('#qoute-form').on('submit', function (e) {
//         // if the validator good
//         if (!e.isDefaultPrevented()) {
//             var url = "mailer.php";
//             // POST values in the background the the script URL
//             $.ajax({
//                 type: "POST",
//                 url: url,
//                 data: {
//                     name: name.val(),
//                     email: email.val(),
//                     number: number.val(),
//                     service: service.val(),
//                     message: message.val()
//                 },
//                 success: function (data)
//                 {
//                     console.log(data);
//                     // data = JSON object that contact.php returns
//                     // apply success/danger
//                     var messageAlert = 'alert-' + data.type;
//                     var messageText = data.message;
//                     console.log(messageAlert, messageText)
//                     // Bootstrap alert box HTML
//                     var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

//                     // If we have messageAlert and messageText
//                     if (messageAlert && messageText) {
//                         // inject the alert to .messages div in our form
//                         $('#qoute-form').find('.messages').html(alertBox);
//                         // empty the form
//                         $('#qoute-form')[0].reset();
//                     }
//                 },
//                 error: function(jqXHR, textStatus, errorThrown) {
//                     console.error('The ajax request failed:' + errorThrown);
//                 }
//             });
//             return false;
//         }
//     })
// });

$(function () {
    //$('#qoute-form').validator();

    $('#qoute-formn').on('submit', function (e) {
        // if the validator good
        if (!e.isDefaultPrevented()) {
            var url = "mailer.php";
            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    name: name.val(),
                    email: email.val(),
                    number: number.val(),
                    service: service.val(),
                    message: message.val()
                },
                success: function (data)
                {
                    // data = JSON object that contact.php returns
                    // apply success/danger
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;
                    console.log(messageAlert, messageText);
                    // Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    console.log(alertBox);
                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#qoute-form').find('.messages').html(alertBox);
                        // empty the form
                        $('#qoute-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});