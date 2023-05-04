<?php 
include("header.php");
include("../connection.php");
?>

<body >

<div class="container" style="padding-top: 20px;margin-top: 120px;">
    <center>
        <h3> Manage Rooms</h3>
        <hr>
    </center>
    <br>
<div class="row">
    <a href="addroom.php"><button class="btn btn-success">Add room</button></a>
<div class="col-md-1"></div>
<div class="col-md-8">                        
<table align="center" style="margin-top:10px;margin-left: 100px;width:100%;color:black;text-align: center;" class="table  table-bordered" id="myTable">
  <tr>
    <th>Sr No</th>
    <th>Room Name</th>
    <th>Room Price</th>
    <th>Posted Date</th>
    <th>Room Picture</th>
    <th colspan="2">Action</th>
  </tr>
    <?php       
                $query = "SELECT * FROM rooms
   " ;

$sql = mysqli_query($conn, $query);
        $i=0;
        while ($row= mysqli_fetch_array($sql)) {
            $i++;
            $id         = $row['id'];
            $name       = $row['name'];
             $price=          $row['price'];
            $date=         $row['date'];
             $pic=         $row['pic'];
      
                    ?>
                        
                        
                        <td> <?php echo $i; ?> </td>
                       
            
                
                        <td> <?php echo $row['name']; ?> </td>
                    
                    <td> <?php echo $row['price']; ?> </td>
                     <td> <?php echo $row['date']; ?> </td>
                    
                     <td><img src="../img/<?php echo $row['pic']; ?>" style="width: 60px;height: 50px;" /></td>
                     
                <td>    <a href="../php/dlt_room.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="material-icons">delete</i></a> </td>
                
             <td>    <a href="edit_room.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a> </td>
                    
                
                    
                        
                    
                    
                </tr>
                
                <?php 
                } ?>
</table>
</div>
</div>
</div>
</body>
</html>
