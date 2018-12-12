<?php
include './includes/header.php';
?>
<div class="wrap_content">
<div class="overalay">
<div class="header">
  <center><h2 class="pageheader-title">ALL CLEINTS</h2></center>
</div>
<center>


</center>
<div class="container">
<div class="Searchingbar">
  <div class="col-md-6">
    <input type="search" name="search" class="shadow">
    <input type="submit" class="mysearch" value="Search" >
  </div>
</div>
</div>
<div class="container">
<div class="all_User">
<table class="table table-striped" id="mytables">
  <thead id="header">
    <tr id="titles">
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Nationality</th>
      <th scope="col">School Applied</th>
      <th scope="col">Status/Payed</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="donnes">
    <tr >
      <!-- <td><button id="mybtn">+</button></td> -->
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td><button id="mybtn">+</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><button id="mybtn" >+</button></td>
    </tr> -->
  </tbody>
</table>
</div>
</div>
</div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <!-- <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script> -->
    <script>
    $(document).ready(function(){
      $.ajax({
        url : './../kwiyandikishaDash/kwiyandikisha/controller/fetchStudents.php',
        method :'GET',
        dataType:'json',
        cache:false,
        success:function(data){
          console.log(data);
          var d=1;
          for (var j in data){
            $('#donnes').append("<tr><td>"+d+"</td><td>"+data[j].firstName+"</td><td>"+data[j].lastName+"</td><td>"+data[j].nationality+"</td><td>"+data[j].name+
            "</td><td>NO</td><td><button id='mybtn'>+</button></td></tr>") ;
            d++;
          }
        }

      });

    });
    </script>
 
</body>
 
</html>