<!DOCTYPE html>
<html lang="en">
<?php include 'includes/header.php';?>

<body ng-app="myApp" ng-controller="summaryController">
<!-- Start wrapper-->
 <div id="wrapper"> 
     <!--Start sidebar-wrapper-->
    <?php include 'includes/sidebar.php';?>
   <!--End sidebar-wrapper-->
<!--Start topbar header-->
    
<!--End topbar header-->
<div class="clearfix"></div>
<div ng-view></div>
<!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->	
	<!--Start footer-->
    <footer class="footer">
        <div class="container">
          <div class="text-center">
           Copyright &copy; <b> <script> document.write(new Date().getFullYear()); </script> </b>
          </div>
        </div>
    </footer>        
	<!--End footer-->   
  </div>
<!--End wrapper-->
<?php include 'includes/footer.php';?>
</body>
</html>