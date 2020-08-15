$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('#createProtectMessageForm').on('submit', function(e) {  
    e.preventDefault();
});


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function createProtectMessage(){

  //geting all variable
  var message = $("#message").val();
  var lifespan = $("#lifespan").val();
  var secretCode = $("#secret-code").val();
  var emailRecipient = $("#email-recipient").val();

  //parsing all the ampersand charater
  message=message.replace(/&/ig,"%26").replace(/\n/ig,"<br>");

  if(message==''){
    isEmail2 ='notpass';
  }
  else if(emailRecipient!=""){
    // validate the email
    var isEmail2 = isEmail(emailRecipient);
  }
  else{
    isEmail2 ='pass';
  }

  // email is true
  if(isEmail2==true || isEmail2=='pass')
  { 

  if(isEmail2==true){
    //open the sending modal
    $("#sendingModal").modal({backdrop: 'static', keyboard: false})  
  }

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    }); 

    $.ajax({
        url: '/protected/initialize',
        method: 'post',
      cache:false,
        data: {
           message: message,
           lifespan: lifespan,
           secretCode: secretCode,
           emailRecipient: emailRecipient
        },
        success: function(result){

            var resultSplit = result.split("|");

           if(resultSplit[0]=="success"){

            window.location="/secret/"+resultSplit[1];
           }
           else{
            window.location="/sent/"+resultSplit[1];
           }
        } // end of success
        
      }); // end of ajax
  }// end if
  else{
    setTimeout(function(){ 
      $("#sendingModal").modal('hide');
    }, 200);
    

  }

} // end of function



// copy to clipboard
function copyToClipboardJS() {
  /* Get the text field */
  var urlLik = document.getElementById("urlLik");

  /* Select the text field */
  urlLik.focus();
  urlLik.select();
  urlLik.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  // alert("Copied the text: " + urlLik.value);

  copyToClipboardchangeTextJS();
}

function copyToClipboardchangeTextJS(){
  $(".btn-get-link").html("Copied");
}


$("#urlLik").focusout(function(){
  $(".btn-get-link").html("Copy Link");
});


function messageRevealJS(){

    //get values from front page
    var hiddenID = $("#hiddenID").val();
    var passcode = $("#passcode").val();

    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    }); 
    $.ajax({
      url: '/messagereveal',
      method: 'post',
    cache:false,
      data: {
         hiddenID: hiddenID,
         passcode: passcode
      },
      success: function(result){
        if(result=="wrong-passcode"){
          $("#passcodeerr").show();
          $("#passcode").val('');
        }
        else{
          $("#messageReveal").html(result);
        }

      } // end of success
      
    }); // end of ajax

} // end of function

function messageBurnJS(){
  //get values from front page
var hiddenID = $("#hiddenID").val();
var passcode = $("#passcode").val();

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  }); 
$.ajax({
    url: '/messageburn',
    method: 'post',
  cache:false,
    data: {
       hiddenID: hiddenID,
       passcode: passcode   
    },
    success: function(result){


          if(result=="wrong-passcode"){
            $("#passcodeerr").show();
            $("#passcode").val('');
          }
          else{
            window.location = "/secret/"+result;
          }

    } // end of success
    
  }); // end of ajax
}


function termsModal(){
   $("#terms-modal").modal('show');
}

function privacyModal(){
   $("#privacy-modal").modal('show');privacy
}


function updateInfo(){

  var hiddenID = $("#hiddenID").val();
  var name = $("#name").val();
  var hiddenName = $("#hiddenName").val();
  var email = $("#email").val();
  var hiddenEmail = $("#hiddenEmail").val();
  var password = $("#password").val();
  var passwordconfirm = $("#password-confirm").val();
  var comp = $("#comp").val();
  var hiddenComp = $("#hiddenComp").val();

  if(hiddenName == name){
    name="";
  }
  if(hiddenEmail == email){
    email = "";
  }
  if(hiddenComp == comp){
    comp = "";
  }

  if(password != passwordconfirm){
    $("#notif").toggle();
    $("#password").val('');
    $("#passwordconfirm").val('');
    $("#notif").html('password didnt matched');
  }
  else{

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      }); 
      $.ajax({
        url: '/updateInfo',
        method: 'post',
      cache:false,
        data: {
           hiddenID: hiddenID,
           name: name,
           email: email,
           password: password,
           passwordconfirm: passwordconfirm,
           comp: comp

        },
        success: function(result){

          location.reload();

        } // end of success
        
      }); // end of ajax
    }
  }




  ///////CONTACT FORM
function contactformsend(){

    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();


    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    }); 
    $.ajax({
      url: '/contactussubmit',
      method: 'post',
    cache:false,
      data: {
         name: name,
         email: email,
         message: message

      },
      success: function(result){

        // location.reload();

        $("#name").val('');
        $("#email").val('');
        $("#message").val('');  

       $("#notif").show();
       $("#notif").html(result);

      } // end of success
      
    }); // end of ajax

}

function gdprAccept(){
$("#gdpr").toggle();
}