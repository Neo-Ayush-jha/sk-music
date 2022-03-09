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
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container-fluid" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:200vh">
        <div class="row ">
            <div class="col-2  bg-dark text-white" style="height:100vh"><?php include "side.php"; ?></div>
            <div class="col-lg-10 sm-12 text-dark" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:100vh">
                <div class="container mt-1">
                    <div class="row">
                      <div class="col-lg-10 sm-12">
                      <?php
                            $data =callingData("song");
                            foreach($data as $value){
                        ?>
<table class="table text-light">
                    <tr>
                        <th>Id</th>
                        <th>IMG</th>
                        <th>SONGE NAME</th>
                        <th>SINGER NAME</th>
                        <th>SONGE</th>
                        
                    </tr>
                    <?php 
                    $data = callingData("song");
                    foreach ($data as $value){
                    ?>
                    <tr>
                        <td><?= $value['id'];?></td>
                        <td><img src="image/<?= $value['song_img'];?>" class="card-img-top" alt="..." style="width:100px;height:70px"></td>
                        <td><?=substr ($value['title'],0,20);?>...</td>
                        <td><?= $value['singer_name'];?></td>
                        <!-- <td><?= $value['singe'];?></td> -->
                        <td> <audio controls style="width:100px"><source src="song/<?= $value['song'];?>"></source></audio></td>
                        
                    </tr>
                    <?php } ?> 
                </table>
                        <?php } ?>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>