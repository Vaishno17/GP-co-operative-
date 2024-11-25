<?php  
error_reporting(0);
require "config.php";
$insert = false;
$update = false;
$delete = false;
// Connect to the Database 


if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `kblist` WHERE `sno` = $sno";
  $result = mysqli_query($con, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $name = $_POST["nameEdit"];
    $mobileno = $_POST["mobilenoEdit"];
    $email = $_POST["emailEdit"];
    $totalloan = $_POST["totalloanEdit"];
   

  // Sql query to be executed
  $sql = "UPDATE `kblist` SET `name`='$name',`mobileno`='$mobileno',`email`='$email',`totalloan`='$totalloan' WHERE `kblist`.`sno` = $sno";
  $result = mysqli_query($con, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $name = $_POST["name"];
    $mobileno = $_POST["mobileno"];
    $email = $_POST["email"];
    $totalloan = $_POST["totalloan"];

  // Sql query to be executed

  $sql = "INSERT INTO `kblist` (`name`, `mobileno`, `email`,`totalloan`) VALUES ( '$name', '$mobileno', '$email', '$totalloan')";
  $result = mysqli_query($con, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
  } 
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>kb list</title>

</head>

<body>
 

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- logo add to navbar -->
    <!-- <a class="navbar-brand" href="#"><img src="/crud/logo.svg" height="28px" alt=""></a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="admin_logout.php">log out</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?> -->

  <div class="container my-4">


    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile No</th>
          <th scope="col">Email</th>
          <th scope="col">Total Loan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT * FROM `kblist`";
          $result = mysqli_query($con, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['name'] . "</td>
            <td>". $row['mobileno'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['totalloan'] . "</td>
            <td> <button class='edit btn btn-sm btn-primary' onclick='Editpage()' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


      </tbody>
    </table>
  </div>

  <div class="container my-4">
    <h2>Add a new member</h2>
    <form action="/project/mainLIst.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
      </div>

     
      <div class="form-group">
         <label  for="mobileno">Mobile Number</label>
        <input  type="number" class="form-control"  id="mobileno" name="mobileno" aria-describedby="emailHelp" required>
      </div>

      <div class="form-group">
         <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
      </div>

      <div class="form-group">
         <label  for="totalloan">Total Loan</label>
        <input  type="number" class="form-control"  id="totalloan" name="totalloan" aria-describedby="emailHelp" required>
      </div>

      <button type="submit" class="btn btn-primary">Add member</button>
    </form>
  </div>



  <!-- <h2><a href="#">Save</a></h2> -->


  <hr>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        name = tr.getElementsByTagName("td")[0].innerText;
        mobileno = tr.getElementsByTagName("td")[1].innerText;
        email = tr.getElementsByTagName("td")[2].innerText;
        totalloan = tr.getElementsByTagName("td")[5].innerText;
        console.log(name, mobileno,email,totalloan);
        nameEdit.value = title;
        mobilenoEdit.value = mobileno;
        emailEdit.value = email;
        totalloanEdit.value = totalloan;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this member!")) {
          console.log("yes");
          window.location = `/project/mainLIst.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })


    function Editpage() {
      window.location.href="table.php";
    }
  </script>
</body>

</html>
