<html>
    <head>
        <title> SIT780 Assignment 2 Homepage </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-md-12"> <h3>Login Form </h3></div>
                <div class="col-md-8">
                    <div class="modal-content">
                        <div class="modal-body with-padding">
                            <form id="form_captcha">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-12">
                                  <label>Username :</label>
                                   <input type="text" name="username" class="form-control required">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-12">
                                  <label>Password :</label>
                                   <input type="password" name="password" class="form-control required">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-12">
                                  <label>Captcha String :</label>
                                   <img src="captcha.php" id="captcha" />
                                    <a href="#" id="captcha_text"><img id="refresh-captcha" src="refresh_1.png"></a>
                                    <input class="form-control required" type="text" name="captch" id="captch" />
                                    <span class="error captcha_error"></span>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                            <span class="error login_error"></span>
                            <button type="button"  name="form_data" class="cap_submit btn btn-primary">Submit</button>
                          </div>
                            </form>
                            <tr>
                              <td>
                                For: </br>
                                <b>Admin Login</b> username/password is <b>admin/SIT780</b> </br>
                                <b>Guest Login</b> username/password is <b>guest/SIT780</b> </br>
                              </td>
                            </tr>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $(document).on("click", '#captcha_text', function(event) { 
        document.getElementById('captcha').src='captcha.php?'+Math.random();
        document.getElementById('captcha-form').focus();
        return false;
    });
    $(document).on("click", '.cap_submit', function(event) {
      if($('#form_captcha').valid()){
        var captch = $('#captch').val();
        var dataString = 'captch=' + captch;
        $.ajax({
            type: "POST",
            url: "captcha_verify.php",
            data: $('#form_captcha').serialize(),
            dataType : "html",
            success: function(data){                
                if(data=='0')
                {
                    $('.captcha_error').html('Your entered incorrect Captcha code.'); 
                    $('.login_error').html('');                      
                }
                else if(data=='1')
                {
                    window.location.href = "welcome.php";
                }
                else{
                    $('.captcha_error').html(''); 
                    $('.login_error').html('Incorrect username or password!');   
                }
            }
        });
        return false;
     }
    });          
});

</script>
<style>
   * {
   margin: 0;
   padding: 0;   
   }
   .container {
   width: 900px;
   margin: 70 auto;
   margin-left: 350px;
   border: 0px green dashed;
   font-size: 14px;
   }
   .error { color:red;}
   #change-image { font-size: 0.8em; }
</style>