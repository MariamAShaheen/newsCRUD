<!DOCTYPE html>
<html>
  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Add  news</h1>
            </div>
         
            <form action="add.php" method="post">
                    <div class="form-group ">
                        <label for="title" class="col-xs-2 col-form-label">Title</label>
                         <input class="form-control" type="text" value=""  id="title" name="title">
                    </div>
                    
                    <div class="form-group">
                        <label for="description" class="col-xs-2 col-form-label">Description</label>
                        <textarea class="form-control" id=description" rows="3" name="description"></textarea>
                    </div>
                                          
                    <div class="form-group ">
                        <label for="name" class="col-xs-2 col-form-label">Name</label>
                        <input class="form-control" type="text" value="" id="name" name="name">
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Add</button>
                  
            </form>
  
        <?php
            include('../config/config.php'); 
            if(isset($_POST['title']) && isset($_POST['description'])&& isset($_POST['name'])){
                $query = 'INSERT INTO `news` (`title` ,`description` ,`auther_name` )VALUES ("'.$_POST['title'].'", "'.$_POST['description'].'", "'.$_POST['name'].'") ';               
                $result = mysqli_query($conn,$query);    
                header('Location:../index.php'); 
            }  
            ?>        
         </div><!--container -->   
         </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

