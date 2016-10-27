<!DOCTYPE html>
<html>
  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Update  news</h1>
            </div>
             <?php
            $id=$_GET['id'];
            include('../config/config.php'); 
            $query="SELECT * FROM `news` where id=$id";
            $result = mysqli_query($conn,$query);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
             ?>
            
                <form action="update.php?id=<?=$_GET['id'] ?>" method="post">
                    <div class="form-group ">
                        <label for="title" class="col-xs-2 col-form-label">Title</label>
                        <input class="form-control" type="text"   value="<?=$row['title']; ?>" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-xs-2 col-form-label">Description</label>
                        <textarea class="form-control" id=description" rows="3" name="description"  ><?= $row['description'];?></textarea>
                    </div>
                                          
                    <div class="form-group ">
                        <label for="name" class="col-xs-2 col-form-label">Name</label>
                        <input class="form-control" type="text"  id="name" name="name" value="<?=$row['auther_name']?>">
                    </div>
                 <?php
                    }
                    } ?>
                    <button type="submit" class="btn btn-primary"name="submit">Submit</button>
                
                </form>
   
        
    <?php
         
            if(isset($_POST['title']) && isset($_POST['description'])&& isset($_POST['name'])&&isset($_POST['submit'])){
                $query = "UPDATE `news` SET `title`='".$_POST['title']."',`description`='".$_POST['description']."',`auther_name`='".$_POST['name']."' WHERE `id`='".$_GET['id']."'";
                mysqli_query($conn,$query);    
                header('Location:../index.php'); 
             }
                       ?>  
         </div><!--container -->   
         </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

