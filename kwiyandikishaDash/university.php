<?php
include './includes/header.php';
include './kwiyandikisha/include/university.php';
?>
 <div class="dashboard-wrapper">
         
                <div class="container-fluid dashboard-content ">
            
                    <div class="row">
                      
                    <!-- ============================================================== -->
                    <!-- top selling products  -->
                    <!-- ============================================================== -->
                    <!-- <div class="col-md-4">
                    <div class="search">
                        <form action="">
                        <input type="search" name="searching">
                        <input type="submit" value="search">
                        </form>


                    </div>

                    </div> -->
                   
                    <div class=" col-md-9 ">
                        <div class="card">
                            <h5 class="card-header">All University</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Logo</th>
                                                <th class="border-0">University  Name</th>
                                                <th class="border-0">Country Name</th>
                                                <th class="border-0">Province</th>
                                                <!-- <th class="border-0">Description</th> -->
                                                <!-- <th class="border-0">Program Offered</th> -->
                                             <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $universities = new University();
                                            $kaminuza = $universities->fetchUniversity();
                                            $nums=1;
                                            while($rows = $kaminuza->fetch_object()){

                                                $myid= $rows->id;

                                            echo'
                                            <tr>
                                                <td>'.$nums++.'</td>
                                                <td>
                                                    <div class="m-r-10"><img src="./kwiyandikisha/controller/uploads/'.$rows->logo.'" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td>'.$rows->name.' </td>
                                                <td>'.$rows->country.' </td>
                                                <td>'.$rows->province.'</td>';
                                             
                                             
                                                echo '<td><a href="manageUniversity.php?id='.$myid.'" id="mybtn">Faculty</td>';
                                                
                                           echo '</tr>';
                                        }
                                            
                                        ?>
<!-- <td><button id="mybtn" data-toggle="modal" data-target="#myModal">Add Faculity</button></td> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>

                          <!-- Modal to add Programs -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            <form action="">
                            <div class="col-md-12">
                                <label id="label" for="counry">Select Program</label>
                                <select name="country" id="countries">
                                    <option value="Rwanda">Rwanda</option>
                                </select>
                            </div>

                            
        </div>
            </form>
       


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
                    <!-- ============================================================== -->
                    <!-- end top selling products  -->

 <!-- sales traffic country source  -->



                    <!-- ============================================================== -->
                    <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">University by Country</h5>
                            <div class="card-body p-0">
                                <ul class="country-sales list-group list-group-flush">
                                   
                                    <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i></span><span class="">Canada</span><span class="float-right text-dark">0%</span>
                                    </li>
                                    <li class="list-group-item country-sales-content"><span class="mr-2"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i></span><span class="">Russia</span><span class="float-right text-dark">0%</span>
                                    </li>
                                    <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-ch" title="in" id="in"></i></span><span class="">China</span><span class="float-right text-dark">82%</span>
                                    </li>
                                    <li class="list-group-item country-sales-content"><span class=" mr-2"><i class="flag-icon flag-icon-ph" title="fr" id="fr"></i></span><span class="">Philipinne</span><span class="float-right text-dark">0%</span>
                                    </li>
                                </ul>
                            </div>
                          
                        </div>
    

                <?php
                //  $universities = new University();
                // $kaminuza = $universities->fetchUniversity();
                // $nums=1;
                //     while($rows = $kaminuza->fetch_object()){
                //     $myid= $rows->id;

                    //echo '
                    // <div class="wrapper_univer">
                    // <div class="cards" style="margin: 10em 0;">
                    //  <div class="imgz">
                    //     <img src="./kwiyandikisha/controller/uploads/'.//$rows->logo.'" alt="user" class="rounded" width="45">
                    // </div>
                    // <div class="names">
                    //     <p>'.$rows->name.'</p>
                    //     <h4>'.$rows->country.'</h4>
                    // </div>
                    // <div class="actions">
                    //     <div class="row">
                    //         <div class="col-md-6">
                    //             <a href="editUniversity.php">Edit</a>
                    //         </div>
                    //         <div class="col-md-6">
                    //             <a href="">Delete</a>
                    //         </div>
                    //     </div>
                    // </div>
                    // </div>
                    //';
                    
                //}
                ?>
            
            </div>
            <?php
include './includes/footer.php';
            ?>
    <!-- ============================================================== -->
                    <!-- end sales traffice country source  -->


  
    <!-- jquery 3.3.1  -->
    <!-- <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script> -->
    <!-- bootstap bundle js -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
    <!-- slimscroll js -->
    <!-- <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script> -->
    <!-- chart chartist js -->
<!--     <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/Chartistjs.js"></script>
    <script src="assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js"></script> -->
    <!-- chart C3 js -->
    <!-- <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script> -->
    <!-- chartjs js -->
    <!-- <script src="assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
    <script src="assets/vendor/charts/charts-bundle/chartjs.js"></script> -->
    <!-- sparkline js -->
    <!-- <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script> -->
    <!-- dashboard finance js -->
    <!-- <script src="assets/libs/js/dashboard-finance.js"></script> -->
    <!-- main js -->
   <!--  <script src="assets/libs/js/main-js.js"></script> -->
    <!-- gauge js -->
  <!--   <script src="assets/vendor/gauge/gauge.min.js"></script> -->
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
<!-- </body>
</html> -->
