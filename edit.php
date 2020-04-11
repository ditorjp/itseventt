<?php
include('model.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $record = mysqli_query($db, "SELECT * FROM eventt WHERE id=$id");

    if ($id > 0 ) {
        $n = mysqli_fetch_array($record);
        $nama = $n['nama'];
        $deskripsi = $n['deskripsi'];
        $tanggal = $n['tanggal'];
    }
}
?>

<!DOCTYPE html>  
<html>  
    <head>  
        <meta charset="utf-8">  
        <title>EDIT</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
    </head>  
    <body>  
    <div class="container">  
            <h2>Perubahan Event</h2><br />  
            <form method="post" action="model.php">

            <input type="hidden" name="id"  value="<?php echo $id; ?>">
            
           <div class="row">  
               <div class="col-md-4"></div>  
               <div class="form-group col-md-4">  
                   <label for="nama">nama:</label>  
                   <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">  </div>  
               </div>  
           <div class="row">  
               <div class="col-md-4"></div>  
                   <div class="form-group col-md-4">  
                       <label for="deskripsi">deskripsi:</label>  
                       <input type="text" class="form-control" name="deskripsi" value="<?php echo $deskripsi;?>">  
                   </div>  
               </div> 
            <div class="row">  
                <div class="col-md-4"></div>  
                <div class="form-group col-md-4">  
                   <label for="tanggal">tanggal:</label>  
                   <input type="tanggal" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>">  </div>  
            </div>  
         
        
           <div class="row">  
               <div class="col-md-4"></div>  
               <div class="form-group col-md-4">  
                <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
   
    
                    </div> 
                </div>  
            </form>  
        </div>  
    </body>  
</html> 
