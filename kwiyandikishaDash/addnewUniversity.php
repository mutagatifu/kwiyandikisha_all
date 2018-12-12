<?php
include './includes/header.php';
?>


    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
         <div class="container-fluid dashboard-content ">
           
            
                     <div class="header">
                     <center><h2 class="pageheader-title">ADD NEW UNIVERSITY</h2></center>
                     </div>
                     <div class="row">
                     <div class="col-md-8">
                     <div class="forms">
                         <form action="./kwiyandikisha/controller/recordingUniversity.php" method="post" enctype="multipart/form-data" name="myform" onsubmit="validate()">
                         <div class="row">
                            <div class="col-md-6">
                                <label id="label" for="name">University Name</label>
                                <input type="text" name="name">
                            </div>

                            <div class="col-md-6">
                                <label id="label" for="counry">Country</label>
                             
                                <select name="country" id="countries">
                                <?php
include './kwiyandikisha/include/university.php';
$country = new university();
$query = $country->fetchCountries();

while($rows=$query->fetch_object()){
    echo '<option value="'.$rows->name.'">'.$rows->name.'</option>';
}
                                ?>
                                    
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label id="label" for="name">University City</label>
                                <input type="text" name="city">
                            </div>
                         </div>
                         
                            <label for="file-upload" class="custom-file-upload" id="label">
                                <i class="fa fa-cloud-upload"></i> Logo
                            </label>
                            <input id="file-upload" type="file" name="profile"/>
                             <label id="label" for="description">Description</label>
                             <textarea name="shortDescription" id=" froala-editor mytxt" cols="30" rows="10"></textarea>
                             <div class="programs">
                                   <label id="label" for="faculities">Faculities</label>
                             <div class="checkbox">
                                <!-- <label><input type="checkbox" value="1" name="program[]">Non-degree</label> -->
                                </div>
                                <!-- <div class="checkbox">
                                <label><input type="checkbox" value="3" name="program[]">Bachelor</label>
                                </div> -->
                                <!-- <div class="checkbox ">
                                <label><input type="checkbox" value="4" name="program[]">Master</label>
                            </div> -->
                           <!--  <div class="checkbox ">
                                <label><input type="checkbox" value="5" name="program[]">Phd</label>
                            </div> -->
                            
                             </div>

                             

                             <input type="submit" value="Add University" class="shadow">
                         </form>

                     </div>
                     </div>
                     <div class="col-md-4">
                     <div class=" col-md-12 col-sm-12 col-12 col-xl-12 col-lg-12">
                            <div class="card shadow" id="main">
                                <h3 class="text-center">we have Universities </h3>
                                <center><div class="numbers shadow">
                                    <h3>4</h3>
                                </div>
                                </center>
                            </div>

                     </div>
                     <div class=" col-md-12 col-sm-12 col-12 col-xl-12 col-lg-12">
                            <div class="card shadow" id="main">
                                <h3 class="text-center" >we have Programs </h3>
                                <center><div class="numbers2 shadow" >
                                    <h3>5</h3>
                                </div>
                                </center>
                            </div>

                     </div>

                         <div class=" col-md-12 col-sm-12 col-12 col-xl-12 col-lg-12">
                            <div class="card shadow" id="main">
                                <h3 class="text-center">we have Faculty </h3>
                                <center><div class="numbers3 shadow">
                                    <h3>24</h3>
                                </div>
                                </center>
                            </div>

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
    <!-- <script src="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
    <!-- sparkline js-->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/charts/sparkline/spark-js.js"></script>
     <!-- dashboard sales js-->
    <!-- <script src="assets/libs/js/dashboard-sales.js"></script> -->
    <!-- Include external JS libs. -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script> -->
 
    <!-- Include Editor JS files. -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/js/froala_editor.pkgd.min.js"></script> -->
 
    <!-- Initialize the editor. -->
 
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
            $('.programs').append('<input  data-id='+data[j].id+' type="checkbox" class="iDS"  name="faculity[]" value="'+data[j].id+'"/>'+data[j].name+'<br>\n') ;
          
          }
        }

      });

    });
    </script>
</body>
 
</html>