<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content="Tridiagonal Portal"/>
  <meta name="author" content="ECGIT"/>
  <title>Tridiagonal Portal | Login</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/notifications/css/lobibox.min.css"/>
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/app-style.css" rel="stylesheet"/>  
  <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Start wrapper-->
 <div id="wrapper"> 
  <div class="container">
    <div class="container-fluid">
      <!--Start Dashboard Content-->
      <div class="row" style="margin-top: 15%;">
        <div class="col-12 col-lg-6 col-xl-3">&nbsp;</div>
            <div class="col-12 col-lg-6 col-xl-6">
              <div class="login_div">
                <div class="card-body">
                    <table class="table borderless">
                        <tr>
                            <th colspan="2">
                                <h5 class="logo-icon logo-text login_head">
                                    <img src="<?php echo base_url();?>assets/images/logo-icon.png" class="logo-icon" alt="Tridiagonal" style="width:60px" /> Login
                                </h5>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label><i class="ti-email"></i> Email:</label>
                            </td>
                            <td>
                                <input type="email" name="email" id="email" class="form-control login-form" autocomplete="off" placeholder="Email"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><i class="ti-key"></i> Password:</label>
                            </td>
                            <td>
                               <input type="password" name="password" id="password" class="form-control login-form" autocomplete="off" placeholder="Password"/> 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-primary" id="loginBtn"><i class="ti-unlock"></i> Login</button>
                            </td>
                        </tr>
                    </table>
                </div>
              </div>
            </div>  
        <div class="col-12 col-lg-6 col-xl-3">&nbsp;</div>
        </div>      
    <!--End Row-->
    <!--End Dashboard Content-->
    </div>
   
</div>


  </div>
<!--End wrapper-->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script> 
  <script src="<?php echo base_url();?>assets/js/jquery-ui.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/notifications/js/notifications.min.js"></script>
  <script src="<?php echo base_url();?>assets/plugins/notifications/js/notification-custom-script.js"></script>
  <script>
  $(document).ready(function(){
      $('#password').keydown(function(event){    
            if(event.keyCode==13){
               $('#loginBtn').trigger('click');
            }
        });
      $("#loginBtn").click(function(){          
             $('#loginBtn').html("<img style='width:20px;height:20px;'  src='<?php echo base_url();?>assets/images/loading.gif'> Login");
                $email = $('#email').val();
                $password = $('#password').val();
               if($email == '' || $password == '')
               {
                  warningmsg("Enter Login details..!");                  
                  $('#loginBtn').html('<i class="ti-unlock"></i> Login');
                   return false;
               }
               $.post('<?php echo base_url();?>Home/validateLogin',{ email:$email,password:$password},function(data){
                  if(data==1) 
                  {	
                  	successmsg("Login Success..!   <img style='width:25px;height:25px;' src='<?php echo base_url();?>assets/images/loading.gif'> Redirecting......");
                      window.location="<?php echo base_url();?>";
                  }else{
                         errormsg(data);  
                         $('#loginBtn').html('<i class="ti-unlock"></i> Login');
                  }
               });
      });      
  });
  </script>
</body>
</html>