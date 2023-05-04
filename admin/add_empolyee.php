<?php 
include("header.php");
include("../connection.php");
?>
<body >

<div class="container mt-3" style="padding-top: 65px;margin-top: 10px;">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="border: 1px solid grey; padding: 5px;">
  <form action="../php/add_empolyee.php"  method="post" enctype="multipart/form-data">
    <center><legend>Add Employee </legend></center>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3 mt-3">
      <label >Name:</label>
      <input type="name" class="form-control" placeholder="Enter Name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Role:</label>
      <input type="text" class="form-control"  placeholder="Enter role" name="role" required>
    </div>
    <div class="mb-3 mt-3">
      <label >Cnic:</label>
      <input type="cnic" class="form-control" placeholder="37401-5432634-0" title="add 13 digits cnic" name="cnic" pattern="[0-9]{13}" required>
    </div>
    <div class="mb-3 mt-3">
      <label >Date of birth:</label>
      <input type="date" class="form-control"   name="dob" required>
    </div>
    <div class="mb-3 mt-3">
      <label>Address:</label>
      <input type="text" class="form-control"  placeholder="Enter address" name="address" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">User Image:</label>
     <input type="file" class="form-control"   name="pic" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name="register">Submit</button>
  </form>
</div>
</div>
</div>
</body>
</html>




