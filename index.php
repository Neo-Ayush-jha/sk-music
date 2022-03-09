<?php include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK MUSIC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "header.php"; ?>

          <?php 
          if(isset($_GET['search'])){
                        $search = $_GET['search'];
                        $calling = mysqli_query($connect,"select * from song where title LIKE '%$search%'");
                    }
                    else{
                        $calling = mysqli_query($connect,"select * from song");
                    }
            ?>

    <div class="container-fluid" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:200vh">
        <div class="row ">
            <div class="col-2  bg-dark text-white" style="height:100vh"><?php include "side.php"; ?></div>
            <div class="col-lg-10 sm-12 text-dark" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:100vh">
                <div class="container mt-1">
                    <div class="row">
                        <?php
                            $data =callingData("song");
                            foreach($data as $value){
                        ?>
                            <div class="col-3 mt-3">
                                <div class="card text-light" style="background-color:#f30016bf">
                                <img src="image/<?= $value['song_img'];?>" class="card-img-top" alt="..." style="width:250px;height:150px">
                                <div class="card-body text-center">
                                    <h4 class="card-title" style="border-bottom:2px solid #ddd"><?=substr ($value['title'],0,15);?>...</h4>
                                    <p class="card-text text-muted fs-6"><?= $value['singer_name'];?></p>
                
                                    <!-- <button class="btn btn-danger w-100" id="table-data onclick=play(<?= $value['id'] ?>)"><i class="bi bi-play-circle fs-4 ms-2 pe-4"></i> <audio controls style="width:100px"><source src="song/<?= $value['song'];?>"></source></audio></button> -->
                                    <!-- <button class="btn btn-danger w-100" id="table-data onclick=play(<?= $value['id'] ?>)"><audio controls style="width:200px"><source src="song/<?= $value['song'];?>"></source></audio></button> -->
                                    <a href="view.php?id=<?= $value['id'];?>" class="btn btn-success mt-3">Go to PLAY</a>
                                 <!-- <button onClick="play()">heloo</button> -->
                                </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script>
        // function play(id){
        //     $.ajax({
            
        //     url:"view.php?id=15",
        //     type: "get", 
        //     dataType: 'json',
        //     success:function(result){
        //         console.log(result);
        //     }
        //     });

        // console.log(id);
        // }

        $("button").click(
            function play(id {
        console.log("clicked...waiting...");

        setTimeout(
            function play(id{
                alert("Called after delay.");
            },
            5000);
    });
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<button type="button">Click Me</button>
    </script>
  
    
    
   </script>
</body>
</html>