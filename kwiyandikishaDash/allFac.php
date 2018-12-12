<?php
include './includes/header.php';
?>
<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="faculities">
        <div class="header">
        <center><h2 class="pageheader-title">ALL FACULITIES</h2></center>
        </div>
            <div class="col-md-12">
          
            <div class="myfac">
           
            </div>
            </div>
           
            
        </div>
   
    </div>
 

    </div>

</div>

    <!-- ============================================================== -->
                    <!-- end sales traffice country source  -->


  
    <!-- jquery 3.3.1  -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js"></script>
    <!-- chart C3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <!-- chartjs js -->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- dashboard finance js -->
    <!-- <script src="assets/libs/js/dashboard-finance.js"></script> -->
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- gauge js -->
    <script src="assets/vendor/gauge/gauge.min.js"></script>
    <!-- morris js -->
    <!-- <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morrisjs.html"></script>
     daterangepicker js -->
    <!-- <script src="../../../../cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="../../../../cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script> -->
    <!-- $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });
    </script> --> 
    <script>
    $(document).ready(function(){
      $.ajax({
        url : './kwiyandikisha/controller/returnAllFaculities.php',
        method :'GET',
        dataType:'json',
        cache:false,
        success:function(data){
          console.log(data);
          for (var j in data){
            $('.myfac').append('<div class="row"><div class="col-md-4">'+
                                        '<div class="fac_card">'+
                                            '<div class="names">'+
                '<input  data-id='+data[j].id+' type="checkbox" class="iDS"  name="faculity[]" value="'+data[j].id+'"/>'+data[j].name+'<br>\n'+'</div>'+'</div>'+'</div>'+'</div>') ;
          }
        }
      });
    });
    </script>
</body>
</html>
