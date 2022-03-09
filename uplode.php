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
    <div class="container-fluid">
        <div class="row ">
            <div class="col-2  bg-dark text-white" style="height:100vh"><?php include "side.php"; ?></div>
            <div class="col-lg-10 sm-12" style="background-repeat: no-repeat; background-size:cover; background-image: url('log.jpg'); background-blend-mode: lighten; height:100vh">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="">NAME OF SONG</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">SINGER</label>
                                <input type="text" name="singer_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">SONG IMAGE</label>
                                <input type="file" name="song_img" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">SONG</label>
                                <input type="file" name="song" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="submit" class="btn w-100 btn-danger">
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['submit'])){
                                $song_img=$_FILES['song_img']['name'];
                                $tmp_name=$_FILES['song_img']['tmp_name'];

                                move_uploaded_file($tmp_name,"image/$song_img");

                                $song = $_FILES['song']['name'];
                                $tmp_song = $_FILES['song']['tmp_name'];
                                move_uploaded_file("$tmp_song", "song/$song");
                                $data=[
                                    'title' => $_POST['title'],
                                    'singer_name' => $_POST['singer_name'],
                                    'song_img' => $song_img,
                                    'song' => $song
                                ];
                                insertData("song",$data);
                                refresh("index.php");
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>