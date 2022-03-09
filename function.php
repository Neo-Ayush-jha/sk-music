<?php
    $connect = mysqli_connect('localhost','root','','music');
    function insertData($table,$a){
        global $connect;
        $col = implode(",",array_keys($a));
        $value = implode("','",array_values($a));
        $query = mysqli_query($connect,"insert into $table($col) value('$value')");
        return $query;
    }

    function callingData($table){
        global $connect;
        $that = [];
        $query = mysqli_query($connect,"select * from $table");
        while ($row = mysqli_fetch_array($query)){
            $that[]=$row;
        }
        return $that;
    }
    function deleteData($table,$array){
        global $connect;
        $query = mysqli_query($connect , "delete from $table where $array");
        return $query;
    }
    // function refresh($page = "index.php"){
    //     echo "<script>window.open('$page','_self')</script>";
    // }
    function deletData($table,$a){
        global $connect;
        $query = mysqli_query($connect,"delete from $table where $a");
        return $query;
    }
    function refresh($page="index.php"){
        echo "<script>window.open('$page','_self')</script>";
    }
    
    function countData($table){
        global $connect;
        $query= mysqli_query($connect,"select * from $table");
        $count=mysqli_num_rows($query);
        return $count;
    }
    function singleCalling($table,$cond){
        global $connect;
        // $query = "select * from $table WHERE $cond";
        $query= mysqli_query($connect,"select * from $table WHERE $cond");
        $run = mysqli_fetch_array($query);
        return $run;
    }
?>