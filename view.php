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
    <div class="container-fluid" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:200vh">
        <div class="row ">
            <div class="col-2  bg-dark text-white" style="height:100vh"><?php include "side.php"; ?></div>
            <div class="col-lg-10 sm-12 text-dark" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:100vh">
            
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
    <?php
    $roll = $_GET['id'];
   $value = singleCalling("song","id='$roll'");
    ?>
                                <div class="col-lg-4 sm-8">
                                    <img src="image/<?= $value['song_img'];?>" alt="" class="card-img-top"> -->
                                </div>
                                <div class="col-lg-8 sm-8">
                                    <table class="table">
                                        <tr>
                                        <th>id </th>
                                        <td><?= $value['id'];?></td>
                                        </tr>
                                        <tr>
                                        <th>SONG NAME</th>
                                        <td><?= $value['title'];?></td>
                                        </tr>
                                        <tr>
                                        <th>SINGER NAME</th>
                                        <td><?= $value['singer_name'];?></td>
                                        </tr>
                                        <tr>
                                        <th>SONG</th>
                                        <td><button class="btn btn-danger w-100" id="table-data onclick=play(<?= $value['id'] ?>)"><audio controls style="width:200px"><source src="song/<?= $value['song'];?>"></source></audio></button></td>
                                        </tr>
                                    </table>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>