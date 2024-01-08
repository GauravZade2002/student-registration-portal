<?php
    // session_start();
    include('includes/header.php');
?>

<div class="container">
<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5" style="background-image: linear-gradient(to right, black,#2f0573,#390274,#06035c,#05054c,#370958,black);">
      <h1 class="display-5 fw-bold text-white"> Registrered Student Details</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><a href="index.php"style="color:white;">Go to Form</a></button>
        </div>
      </div>
    </div>
  </div>


</div>
<div class="container">
<hr>

</div>

<div class="container">

<div class="table-responsive">
      <table class="table text-center table-dark">
                <thead>
                    <tr>
                    
                        <th scope="col">Serial Number</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Roll Number</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Mobile No </th>
                        <th scope="col">Email </th>
                        <th scope="col">Options </th>
                    </tr>
                </thead>
                <tbody>
                      <?php
                          include('dbconn.php');
                          $ref_table= "Student";
                          $retrieved_data = $database->getReference($ref_table)->getValue();

                          if($retrieved_data>0)
                          {
                            $i=0;
                                  foreach ($retrieved_data as $key => $row) {
                                    $i++;
                                      ?>
                                      <tr>
                                          <td><?php  echo $i; ?></td>
                                          <td><?php echo $row['firstname']; ?></td>
                                          <td><?php echo $row['lastname']; ?></td>
                                          <td><?php echo $row['rollno'];?></td>
                                          <td><?php echo $row['sem'];?></td>
                                          <td><?php echo $row['mob'];?></td>
                                          <td><?php echo $row['mail'];?></td>
                                          <td>
                                            <a href="edit.php?id=<? $key; ?>"  class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                          </td>

                                      </tr>

                                      <?php
                                  }
                          }
                          else{
                      
                          }
                      ?>         
                  </tbody>
      </table>
    </div>
    <hr>
    </div>
<?php
    include('includes/footer.php')
?>