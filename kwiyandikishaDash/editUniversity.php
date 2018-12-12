<?php
include './includes/header.php';
?>

<div class="container">
    <div class="programs_wrapper">
        <div class="col-md-12">
    <div class="row">
        
                <?php
                include './kwiyandikisha/include/program.php';
                $editpro = new Program();
                $progaram = $_GET['program'];
                // echo "<h1>".$progaram."</h1>";
                $query = $editpro->fetchProgramById($progaram);
                while($rows = $query->fetch_object()){
?>
                    <form method="post" action="./kwiyandikisha/controller/updateProgram.php">
                    <div class="editable">
                        <div class="col-md-12">
                        <div class="row">
                            <div class="labels">
                                <label for="id" id="labes">Program Id</label>
                                 <input type="text" name="programId" value="<?php echo $progaram; ?>" readonly>
                                <label for="ProgramName" id="labes">Program Name</label>
                                <input type="text" name="pname" value="<?php echo $rows->names;?>">
                                <label for="ProgramName" id="labes">Starting Date</label>
                                <input type="text" name="starting" value="<?php echo $rows->startingDate;?>">
                                <label for="ProgramName" id="labes">Programm Duration</label>
                                <input type="text" name="duration" value="<?php echo $rows->duration;?>">
                            </div>
                        </div>
                        </div>
                    </div>
                      <input type="submit" name="submit" value="update" id="mybtn" style="margin:1em 0; width:150px; outline:none;">
                    </form>
               <?php 
               }
?>            
    </div>
    </div>
    </div>
</div>

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
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
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>