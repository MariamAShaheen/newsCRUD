<!DOCTYPE html>
<html>
  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
         <div class="container">
            <div class="jumbotron">
                <h1>CRUD operations for news</h1>
            </div>
            <a class='btn btn-primary' href='views/add.php'>Add</a>
                <div class="row">
                
        <?php
        include('config/config.php'); 
        $query="SELECT * FROM `news`";
        $result = mysqli_query($conn,$query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-sm-4'> <h2>Title: " . $row["title"]."</h2> <p>   " . $row["description"]. "</p> <h5> Written By:".$row["auther_name"]." </h5>  ";
                echo "<a class='btn btn-danger' href='views/delete.php?id=" . $row ['id'] . "'>delete</a> <a class='btn btn-success' href='views/update.php?id=".$row['id'] . "'>update</a> </div>" ;
            }
        } else {
                    echo "0 results";
                }
        ?>
            </div><!--row  -->
          </div><!--container -->   
         </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
