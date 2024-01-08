<?php
session_start();
include('includes/header.php');

?>
    <div class="container">
       

<div class="bg-dark text-secondary px-4 py-5 text-center manual-bg">
    <div class="py-5" style="    background-image: linear-gradient(to right, black,#2f0573,#390274,#06035c,#05054c,#370958,black);">
      <h1 class="display-5 fw-bold text-white">Update Student Details</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="#project"style="color:white;">Go to Form</a></button>
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="inform.php"style="color:white;">Go to Table</a></button>
        </div>
      </div>
    </div>
    <div class="container" id="project"></div>
  </div>
  
  <h1 ><span class="badge bg-primary justify-content-sm-center"> Update Student Details</span></h1>

        <?php
            include('dbconn.php');
            $ref_table = "Student";
            $id = $_GET['id'];
            $edit_data = $database->getReference($ref_table)->getChild($id)->getValue();
        ?>



        <form class="row g-3"  action="code.php" method="POST" >
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" placeholder="Enter Your First Name "   required name="fname" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last name</label>
            <input type="text" placeholder="Enter Your Last Name " required  name="lname" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">roll no</label>
            <input type="text"  required  name="rollno" class="form-control" id="inputAddress" placeholder="enter roll number : JBTECH20327">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">semester </label>
            <input type="number"  required  name="sem" class="form-control" id="inputAddress2" placeholder="enter your semester ">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Mobile Number  </label>
            <input type="number"  required  name="mob" class="form-control" id="inputAddress2" placeholder="enter your Mobile number ">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Email Address </label>
            <input type="email"  required  name="mail" class="form-control" id="inputAddress2" placeholder="enter your Email Address ">
        </div>
        <div class="col-6">
            <button type="submit" name="update_data" class="btn btn-primary">Update the Record</button>
            
        </form>
        <div class="col-12">
           
        </div>
    </div>







<?php
include('includes/footer.php')

?>