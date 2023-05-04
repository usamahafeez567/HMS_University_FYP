<?php 
include("header.php");
include("../connection.php");
?>

<body >
<div class="container" style="padding-top: 120px;">
    <center>
        <h3> Manage Empolyees</h3>
        <hr>
    </center>
    <br>
<div class="row">
<div class="col-md-1"></div>
 <a href="add_empolyee.php"><button class="btn btn-success">Add Empolyee</button></a>
<div class="col-md-12">                        
<table align="center" style="margin-top:10px;margin-left: 20px;width:100%;color:black;text-align: center;" class="table table-striped table-bordered" id="myTable">
  <tr>
    <th>Sr No</th>
    <th>Empolyee Name</th>
    <th> Email</th>
     <th>Role</th>
      <th>CNIC</th>
       <th>DOB</th>
        <th>Address</th>
    <th>User Picture</th>
    <th colspan="2">Action</th>
  </tr>
    <?php      $resultAll = mysqli_query($conn, "SELECT * FROM `employees`
 ");

if(!$resultAll){
    die(mysqli_error($conn));
}

$i=0;

if (mysqli_num_rows($resultAll) > 0) {
    while($row = mysqli_fetch_array($resultAll)){ 
        $i++;
                    ?>
                        
                        
                        <td> <?php echo $i; ?> </td>
                       
            
                
                        <td> <?php echo $row['name']; ?> </td> 
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['role']; ?> </td>
                    <td> <?php echo $row['cnic']; ?> </td>
                    <td> <?php echo $row['dob']; ?> </td>
                    <td> <?php echo $row['address']; ?> </td>
                     <td><img src="../assets/img/<?php echo $row['pic']; ?>" style="width: 60px;height: 50px;" /></td>
                      <td>    <a href="edit_empolyee.php?edit=<?php echo $row['id']; ?>" class="btn btn-info"><i class="fa fa-pencil">Edit</i></a> </td>
                <td>    <a href="../php/dlt_empolyee.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-delete">Delete</i></a> </td>
           
                    
                
                    
                        
                    
                    
                </tr>
                
                <?php 
                }
                } ?>
</table>
</div>
</div>
</div>
</body>
</html>
