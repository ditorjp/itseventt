<?php
session_start();

    $id = 0;
    $nama = "";
    $deskripsi = "";
    $tanggal = "DD/MM/YYYY";
    
    $db = mysqli_connect('localhost', 'root', '', 'its_event');

    if(mysqli_connect_error()){
        echo "Failed to connect to database: " . mysqli_connect_error();
    }


    if (isset($_POST['input'])) {
        $nama = mysqli_real_escape_string($db, $_POST['nama']);
        $deskripsi = mysqli_real_escape_string($db, $_POST['deskripsi']);
        $tanggal = mysqli_real_escape_string($db, $_POST['tanggal']);
      

        $query = "INSERT INTO eventt (nama,deskripsi,tanggal)
                  VALUES('$nama', '$deskripsi', '$tanggal')";
        mysqli_query($db, $query);
        header('location: masuk.php');
    }

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal = $_POST['tanggal'];
        
            mysqli_query($db, "UPDATE eventt SET nama='$nama', deskripsi='$deskripsi', tanggal='$tanggal' WHERE id=$id");
            $_SESSION['message'] = "Address updated!"; 
            header('location: masuk.php');
        }