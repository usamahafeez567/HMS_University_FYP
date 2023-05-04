<?php 
  include('../connection.php');
  include('header.php');
?>

<body >
<br><br><br>
<form action="../php/addroom.php" method="post" enctype="multipart/form-data">
  <div class="container" style="padding: 10px;  background-color: ;margin-left:350px;width: 40%;margin-top: 0px;margin-top: 120px;border: 1px solid grey;">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
    <center>
    <h1>Add New Room</h1></center>
    <hr>

    <label for="name"><b>Room Name</b></label>
    <input type="text" placeholder="Enter  Room Name" name="name"  required><br><br>
    <label for="psw"><b>Room Price</b></label>
    <input type="text" placeholder="Enter Room Price" name="price"  required>
    <br><br>
    <label for="city"><b>Posted Date</b></label>
    <input type="date"  name="Posted date" id="date" required><br> <br>
  <label> Image</label>
           <div class="input-group">
           <input type="file" class="form-control" name="pic">
           </div><br>
    <hr>
   

    <button type="submit" name="submit" class="btn btn-success">Add</button>
  </div>

</div>
</div>
</form>
</body>
</html>

