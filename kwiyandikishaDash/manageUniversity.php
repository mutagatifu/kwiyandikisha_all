<?php
include './includes/header.php';
?>

<div class="container">
    <div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
        <div class="university_wrapper">
        
            <div class="information">
                <img src="./img/admin.png" alt="admin">
                <p hidden id="univer"></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ut mollitia magni aliquam distinctio, error ab sunt consequuntur aliquid libero deserunt nam. Voluptate impedit harum velit labore nobis? Reprehenderit, tempora?Nihil, quod assumenda. Accusantium perspiciatis vero laboriosam maxime laudantium asperiores itaque cum, 
                    distinctio commodi ea? Dicta vel voluptate modi fugiat minus sit veniam, amet eius ea, obcaecati debitis mollitia autem?</p>
            </div>
        </div>
</div>
        <div class="col-md-6">
            <button id="back"><a href="university.php">Go To University</a></button>
            <div class="added_info shadow">
            <center><h2 class="pageheader-title">Add Faculty to this University</h2></center>
                      <form action="" method="post" id="faculityForm" onsubmit="myFunction()">
                 <div class="col-md-12">
                    <label id="label" for="counry">Select Degree</label>
                    <select name="country" id="countries">
                    <option value="">-- select --</option>
<?php
$res= $_GET['id'];
//echo "<h1>".$res."</h1>";
include './kwiyandikisha/include/university.php';
$programs = new University();
//$universityID = $_POST['university'];
$query = $programs->returnProgramByUniversity($res);
while($rows= $query->fetch_object()){
    echo '<option value="'.$rows->program.'">'.$rows->names.'</option>';

}
?>
</select>
                            </div>
                <div class="row">
                <div class="col-md-12">
                <div class="faculity">
                </div>
           <div class="programs" style="display:none;" >
                                          <div class="row">
                                              <div class="col-md-6">
                                              <label for="money" id="mylabe">Add Tuiton for Faculty</label>
                                            <input type="number" name="tuiton" id="tuiton">
                                              </div>
                                              <div class="col-md-6">
                                              <label for="money" id="mylabe">Select language</label>
                                            <select name="language" id="mylang">
                                                <option value="">Chinese</option>
                                                <option value="">English</option>
                                            </select>
                                              </div>
                                          </div>
                                          <div class="container">
                                            <center><input type="submit" name="send" value="Add Faculty" class="shadow"  onclick="Submited()"></center>
                                        </div>
                        </div>
           
                

</form>
<?php
if(isset($_POST['send'])){
   $university = new University();
    $universityId = $res;
    //$_POST['university'];
    $program = $_POST['country'];
    $faculity = $_POST['faculity'];
    $language = 'english';

    //$_POST['language'];
    $price = 100;
    //$_POST['price'];
    
    if (!empty($universityId) && !empty($program) && !empty($faculity) && !empty($language) && !empty($price)){
    
        //$universityId=$res;
        
    
        //$university->setFaculity($faculity);
        $university ->setProgram($program);
        $university->setLanguage($language);
        $university->setPrice($price);
        for($i=0;$i<sizeof($faculity);$i++){
            $university->setFaculity($faculity[$i]);
            $query = $university->recordUniversityFaculity($universityId);
        }
            echo "success";
        }
        else{
            echo "no field is to be empty";
        }
    }


?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 js-->
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
    <!-- <script src="assets/libs/js/dashboard-sales.js"></script> -->
    <!-- Include external JS libs. -->
<script>
    function myFunction() {
    var idS = $(this).attr('id');  
    var inputs = document.getElementById('tuiton').value;
    console.log(inputs);
    console.log(idS);
    }
</script>
<script type="text/javascript">
// retrieve data of faculity by programs
// =====================================
  $(document).ready(function(){
    $('#countries').on('change',function(){
        $('.faculity').empty();
    var prog = $('#countries').val();
    //alert(prog);
     $.ajax({

        url: './kwiyandikisha/controller/returnFaculityByProgram.php',
        method :'POST',
        data:'program='+prog,
        dataType :'json',
        cache:false,
        success:function(data){
            console.log(data)
            for(var i in data){
                $('.faculity').append('<input  data-id='+data[i].id+' type="checkbox" class="iDS"  name="faculity[]" value="'+data[i].id+'"/>'+data[i].name+'<br>\n' );} 
                        $("input[type='checkbox']").change(function(){
                            if(this.checked){
                                var id = $(this).attr('id');      
                                //alert(id);
                                $('.programs').show();
                            
                            } 
                            else{
                                $('.programs').hide();
                            }} );
                         
                            
                            }
                            
       
                            });});


}); 


</script>

</body>
 
</html>

