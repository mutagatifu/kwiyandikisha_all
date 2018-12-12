<?php
include './includes/header.php';
?>
<div class="dashboard-wrapper">
<!-- <div class="event_wrapper"> -->
<div class="overalay">
    <div class="container ">
   
                <div class="events">
                    <p>All Events</p>
                  </div>
                        <?php
                        include './kwiyandikisha/include/event.php';
                        $events = new Event();
                        $query = $events->fetchAllEvents();
                        while($rows = $query->fetch_object()){
                            $ids = $rows->id;
                            echo '
                            <div class="col-md-12">
                          
                            <div class="col-md">
                              <div class="row">
                            <div class="card shadow" id="myevent">
                             <img class="card-img-top" src="./kwiyandikisha/controller/uploads/'.$rows->image.'" alt="Card image cap">
                             <div class="card-body">
                               <h5 class="card-title">'.$rows->name.'</h5>
                               <p class="card-text">'.$rows->descriptions.'</p>
                               <div class="col-md-12">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <p>'.$rows->time.'</p>
                                       </div>
                                       <div class="col-md-6">
                                           <p>'.$rows->location.'</p>
                                       </div>
                                   </div>
   
                               </div>
                               <a href="#" class="btn btn-primary" data-toggle="modal" data-id="'.$ids.'" data-target="#myModal">Edit</a>
                               <a href="./kwiyandikisha/controller/deleteEvent.php?id='.$ids.'" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete?\');">'.$ids.'Delete</a>
                             </div>
                       </div>
                       </div>
                       
                       </div>
                       </div>';
                        
                    }
 ?>
                     
                </div>
        

        <div class="modal fade" id="myModal'.$ids.'" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body modlas">
            <form action="">
                <div class="col-md-12">
                
                    <label for="Image" id="mylabe"></label>
                    <input type="file" >
                    <label for="title" id="mylabe"><?php echo $rows->name;?>Title</label>
                    <input type="text" name="title">
                    <label for="desc" id="mylabe">Descprition</label>
                    <textarea name="shortDescription" id=" froala-editor mytxt" cols="30" rows="10"></textarea>
                    <label for="Time" id="mylabe">Time</label>
                    <input type="date" name="times">
                    <label for="Location" id="mylabe">Location</label>
                    <input type="text" name="location">              
                </div>   
                <input type="submit" name="update" value="Update" class="shadow">         
        </div>
            </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
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