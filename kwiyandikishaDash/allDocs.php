<?php
include './includes/header.php';
?>
<div class="docs_wrapper">
<div class="overalay">
<div class="container">
<div class="header">
                     <center><h2 class="pageheader-title">ALL DOCUMENTS</h2></center>
                     </div>
    <div class="documents">
        <div class="col-md-12">
            <div class="pagination">
                <button id="paging" class="shadow">1</button>
                <button id="paging" class="shadow">2</button>
                <button id="paging" class="shadow">3</button>
            </div>
            <div class="row abantu">
                <!-- <div class="col-md-4">
                    <div class="mycard_user shadow">
                        <img src="./img/admin.png" alt="Admin">
                        <div class="contents_user">
                            <h3>Rigoeffector</h3>
                            <h4>China University</h4>
                            <p>Medecine</p>
                            <button id="mybtn">View Document</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mycard_user shadow">
                        <img src="./img/admin.png" alt="Admin">
                        <div class="contents_user">
                            <h3>Rigoeffector</h3>
                            <h4>China University</h4>
                            <p>Medecine</p>
                            <button id="mybtn">View Document</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mycard_user shadow">
                        <img src="./img/admin.png" alt="Admin">
                        <div class="contents_user">
                            <h3>Rigoeffector</h3>
                            <h4>China University</h4>
                            <p>Medecine</p>
                            <button id="mybtn">View Document</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mycard_user shadow">
                        <img src="./img/admin.png" alt="Admin">
                        <div class="contents_user">
                            <h3>Rigoeffector</h3>
                            <h4>China University</h4>
                            <p>Medecine</p>
                            <button id="mybtn">View Document</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mycard_user shadow">
                        <img src="./img/admin.png" alt="Admin">
                        <div class="contents_user">
                            <h3>Rigoeffector</h3>
                            <h4>China University</h4>
                            <p>Medecine</p>
                            <button id="mybtn">View Document</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mycard_user shadow">
                        <img src="./img/admin.png" alt="Admin">
                        <div class="contents_user">
                            <h3>Rigoeffector</h3>
                            <h4>China University</h4>
                            <p>Medecine</p>
                            <button id="mybtn">View Document</button>
                        </div>
                    </div>
                </div> -->
            </div>
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
    <!-- <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script> -->
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <!-- <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script> -->
    <!-- <script src="assets/libs/js/dashboard-ecommerce.js"></script> -->
    <script>
    $(document).ready(function(){
      $.ajax({
        url : './kwiyandikisha/controller/returnStudents.php',
        method :'GET',
        dataType:'json',
        cache:false,
        success:function(data){
          console.log(data);
                for (var i in data){
                    $(".abantu").append("<div class=\"col-md-4\">\n"+
                    "<div class=\"mycard_user shadow\">\n"+
                        "<img src=\"./kwiyandikisha/controller/uploads/"+data[i].profileImage+"\" alt=\"Admin\">\n"+
                        "<div class=\"contents_user\">\n"+
                            "<h3>"+data[i].firstName+"</h3>"+
                            "<h4>"+data[i].name+"</h4>"+
                            "<p>"+data[i].occupation+"</p>"+
                            "<a id='mybtn' href='./kwiyandikisha/controller/download.php?dow='"+data[i].studentsFiles+"'>"+"Down Docs"+"</a>"+
                        "</div>"+
                    "</div>"+
                "</div>");
                }

        }

      });

    });
    </script>
 
</body>
 
</html>