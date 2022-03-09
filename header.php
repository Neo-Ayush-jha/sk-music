<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
        <div class="container">
            <a href="" class="navbar-brand py-0"><img src="vb.png" height="45px" alt=""></a>
            <form action="" class="d-flex">
        <div class="input-group">
          <form action="get">
          <input type="search" autofocus name="search"  class="form-control shadow-none "  size="50" placeholder="Enter songe name" name="" id="">
          <input type="submit" name="go" value="Search" class="btn btn-success shadow-none" id="">
          </form>
          <?php 
          
          if(isset($_GET['search'])){
                        $search = $_GET['search'];
                        $calling = mysqli_query($connect,"select * from song where title LIKE '%$search%'");
                    }
                    else{
                        $calling = mysqli_query($connect,"select * from song");
                    }
            ?>
        </div>
      </form>
      <ul class="navbar-nav">
          <li class="nav-item"><a href="" class="nav-link fs-5 me-2 mt-1">Feedback</a></li>
          <li class="nav-item"><a href="uplode.php" class="nav-link  me-2"><button class="btn btn-outline-danger fw-bold">Upload</button></a></li>
          <li class="nav-item"><a href="" class="nav-link  me-2"><button class="btn btn-outline-primary fw-bold">Import</button></a></li>
          <li class="nav-item"><a href="" class="nav-link  me-2"><i class="bi bi-chat-dots-fill text-white fs-4"></i></a></li>
          <li class="nav-item"><a href="" class="nav-link  me-2"><i class="bi bi-bell-fill text-white fs-4"></i></a></li>
          <li class="nav-item"><a href="" class="nav-link  me-2"><i class="bi bi-person-plus-fill text-white fs-4"></i></a></li>
          <li class="nav-item"><a href="" class="nav-link  me-2"><img src="lo.jpg" style="height:40px; border-radius:50px" alt=""></a></li>
      </ul>
        </div>
</nav>
</body>
</html>