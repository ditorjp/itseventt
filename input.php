<!DOCTYPE html>  
<html>  
    <head>  
        <meta charset="utf-8">  
        <title>INPUT</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>  
    <body style ="background:url(Artboard 1.png);background-repeat:no-repeat;background-size:100%" >  
        <div class="container">  
            <h2>Penambahan Event</h2><br/>
            
            <form method="post" action="model.php">
           
                <div class="row">  
                    <div class="col-md-4"></div>  
                    <div class="form-group col-md-4">  
                        <label for="nama">nama:</label>  
                        <input type="text" class="form-control" name="nama" value="">  </div>  
                    </div>  
                <div class="row">  
                    <div class="col-md-4"></div>  
                        <div class="form-group col-md-4">  
                            <label for="deskripsi">deskripsi:</label>  
                            <input type="text" class="form-control" name="deskripsi" value="">  
                        </div>  
                    </div>  
                    <div class="row">  
                    <div class="col-md-4"></div>  
                        <div class="form-group col-md-4">  
                            <label for="tanggal">tanggal:</label>  
                            <input type="text" class="form-control" name="tanggal" value="dd/mm/yyyy">  
                        </div>  
                    </div>
              
                <div class="row">  
                    <div class="col-md-4"></div>  
                    <div class="form-group col-md-4">  
                        <button  type="submit"  class="btn  btn-success"  style="margin-  left:38px" name="input">Tambahkan Event</button>  
                    </div>  
                </div>  
                <a href='masuk.php'>List Event</a>
            </form>  
        </div>  
    </body>  
</html>
