<?php
include './includes/header.php';
?>


    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
         <div class="container-fluid dashboard-content ">
           
            
                     <div class="header">
                         <h3>Add Event</h3>
                     </div>
                     <div class="row">
                     <div class="col-md-8 offset-2">
                     <div class="forms">
                         <form action="./kwiyandikisha/controller/recordEvents.php" method="post" enctype="multipart/form-data">
                         <div class="row">
                            <div class="col-md-6">
                                <label id="label" for="name">Event Name</label>
                                <input type="text" name="name">
                            </div>

                            <div class="col-md-6">
                                <label id="label" for="counry">Location</label>
                                <input type="text" name="location">
                            </div>
                            <div class="col-md-6">
                                <label id="label" for="name">Event Time </label>
                                <input type="text" name="time">
                            </div>
                         </div>
                         
                            <label for="file-upload" class="custom-file-upload" id="label">
                                <i class="fa fa-cloud-upload"></i> Event Image
                            </label>
                            <input id="file-upload" type="file" name="profile"/>
                             <label id="label" for="description">Description</label>
                             <textarea name="description" id=" froala-editor mytxt" cols="30" rows="10"></textarea>
                             <input type="submit" value="Add Event">
                         </form>

                     </div>

                     <div class="col">

                     </div>
                     </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstrap bundle js-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js-->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- chartjs js-->
    <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script>
   
    <!-- main js-->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- jvactormap js-->
    <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- sparkline js-->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/charts/sparkline/spark-js.js"></script>
     <!-- dashboard sales js-->
    <script src="assets/libs/js/dashboard-sales.js"></script>
    <!-- Include external JS libs. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor() }); </script>
 
</body>
 
</html>