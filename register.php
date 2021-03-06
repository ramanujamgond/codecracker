<?php 

require('session.php');
require_once 'csrf_request_type_functions.php';
require_once 'csrf_token_functions.php';

?>

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
      <title>New User Registration</title>
      <link href="assets/css/autowide.css" rel="stylesheet" type="text/css"  defer="defer"/>
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"  defer="defer"/>
      <link href="assets/css/core.css" rel="stylesheet" type="text/css"  defer="defer"/>
      <link href="assets/css/components.css" rel="stylesheet" type="text/css"  defer="defer"/>
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css"  defer="defer"/>
      <link href="assets/css/pages.css" rel="stylesheet" type="text/css"  defer="defer"/>
      <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"  defer="defer"/>
   </head>
   <body>

      <div class="account-pages"></div>
      <div class="clearfix"></div>
      <div class="wrapper-page">
         <div class=" card-box">
            <div class="panel-heading">
               <h3 class="text-center"> New User </h3>
            </div>
            <div class="panel-body">
               <form id="form" class="form-horizontal m-t-20" method="post">
                  <div class="form-group ">
                     <div class="col-xs-12"> <input class="form-control" type="text" id="fname" name="fname" placeholder="Full Name"> </div>
                  </div>
                  <div class="form-group ">
                     <div class="col-xs-12"> <input class="form-control" type="text" id="unvregdno" name="unvregdno"  placeholder="University Registration Number"> </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12"> <input class="form-control" type="password" id="password" name="password"  placeholder="Password"> </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12"> <input class="form-control" type="password" id="cpassword" name="cpassword"  placeholder="Confirm Password"> </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <select class="form-control" name="gender" id="gender">
                           <option value="male">Male</option>
                           <option value="female">Female</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <select class="form-control" name="branch" id="branch">
                           <option value="cse">Computer Science Engineering</option>
                           <option value="it">Information Technology</option>
                           <option value="etc">Electronics and Telecommunication Engineering</option>
                           <option value="eee">Electrical and Electronics Engineering</option>
                           <option value="ee">Electrical Engineering</option>
                           <option value="mech">Mechanical Engineering</option>
                           <option value="civil">Civil Engineering</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12"> <input class="form-control" type="email" id="email" name="email"  placeholder="E-Mail"> <?php echo csrf_token_tag(); ?> </div>
                  </div>
                  <div class="form-group text-center m-t-40">
                     <div class="col-xs-12"> <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" id="submit"> Register </button> </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 text-center">
               <p> Already have account?<a href="index.php" class="text-primary m-l-5"><b>Sign In</b></a> </p>
            </div>
         </div>
      </div>
      <script>var resizefunc=[]; </script> <script src="assets/js/jquery.min.js" async></script> 
      <script type="text/javascript" src="js/disable.js" async></script> 
      <script src="assets/js/validate.js" async></script> 
      <script src="assets/plugins/notifyjs/dist/notify.min.js" async></script>
      <script src="assets/plugins/notifications/notify-metro.js" async></script>
      <script src="assets/js/jquery.core.js" async></script> 
   </body>
</html>