<?php
// session_start();
include('includes/header.php');

?>
    <div class="container">
       
        <?php
        if(isset($_SESSION['status']))
        {
            echo "<h3>".$_SESSION['status']."</h3>";
            unset($_SESSION['status']);
        }
        ?>

<div class="bg-dark text-secondary px-4 py-5 text-center manual-bg">
    <div class="py-5" style="    background-image: linear-gradient(to right, black,#2f0573,#390274,#06035c,#05054c,#370958,black);">
      <h1 class="display-5 fw-bold text-white">Student Registration</h1>
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
  

<div class="container box-shadow">
    <div class="card border-success mb-3 bg-dark text-white" >
        <div class="card-header bg-transparent border-success"><h1 class="card-title" ><span class="badge bg-primary justify-content-sm-center"> Enter Student Details</span></h1> </div>
        <div class="card-body text-success">
           
            <form class="row g-3"  action="code.php" method="POST" >
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">First Name</label>
                    <input type="text" placeholder="Enter Your First Name "  required name="fname" class="form-control inpp" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last name</label>
                    <input type="text" placeholder="Enter Your Last Name " required  name="lname" class="form-control inpp" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">roll no</label>
                    <input type="text"  required  name="rollno" class="form-control inpp" id="inputAddress" placeholder="enter roll number : JBTECH20327">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">semester </label>
                    <input type="number"  required  name="sem" class="form-control inpp" id="inputAddress2" placeholder="enter your semester ">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Mobile Number  </label>
                    <input type="number"  required  name="mob" class="form-control inpp" id="inputAddress2" placeholder="enter your Mobile number ">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Email Address </label>
                    <input type="email"  required  name="mail" class="form-control inpp " id="inputAddress2" placeholder="enter your Email Address ">
                </div>
                <div class="col-6">
                 </div>
                    <button type="submit" name="save_data" class="btn btn-primary">Submit the Record</button>
                    <div class="card-footer bg-transparent border-success">  </div>
      </div>
    </form>


</div>




  

        
        <div class="col-12">
           
        </div>
    </div>







<?php
include('includes/footer.php')

?>