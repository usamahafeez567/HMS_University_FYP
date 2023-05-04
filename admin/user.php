<?php 
include("header.php");
include("../connection.php");
?>

<body >
<div class="container" style="padding-top: 130px;">
    <center>
        <h3> Manage Users</h3>
        <hr>
    </center>
    <br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-8">                        
<table align="center" style="margin-top:10px;margin-left: 100px;width:100%;color:black;text-align: center;" class="table  table-bordered" id="myTable">
  <tr>
    <th>Sr No</th>
    <th>User Name</th>
    <th>User Email</th>
    <th>User Profile Picture</th>
    <th colspan="2">Action</th>
  </tr>
    <?php       
                $query = "SELECT * FROM user
   " ;

$sql = mysqli_query($conn, $query);
        $i=0;
        while ($row= mysqli_fetch_array($sql)) {
            $i++;
            $id         = $row['id'];
            $name       = $row['name'];
             $email=          $row['email'];
            $img=         $row['image'];
             $password=         $row['password'];
      
                    ?>
                        
                        
                        <td> <?php echo $i; ?> </td>
                       
            
                
                        <td> <?php echo $row['name']; ?> </td>
                    
                    <td> <?php echo $row['email']; ?> </td>
                    
                     <td><img src="../img/<?php echo $row['image']; ?>" style="width: 60px;height: 50px;" /></td>
                     
                <td>    <a href="../php/dlt_user.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-delete">Delete</i></a> </td>
                
             <td>    <a href="updateUser.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-edit">Update</i></a> </td>
                    
                
                    
                        
                    
                    
                </tr>
                
                <?php 
                } ?>
</table>
</div>
</div>
</div>
</body>
</html>
