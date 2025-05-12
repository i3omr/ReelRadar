<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReelRadar</title>
    <link rel="stylesheet" href="StyleSearch.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1><a href="index.php" style="text-decoration:none; color:white;"><strong>ReelRadar</strong></a></h1>
    <div class="card-body">
        <div class="row">
            <div class="col-md7">
                <div class="box">
                <form action="" method="GET">
                    <div class="search-bar">
                       <div class="input-group mb-3"> 
                        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search">
                        <button type="Submit" class="btn btn-primary">Search</button>
                        </div>
                    </div> 
                    </div>
                    
                </form>
                
            </div>
        </div>
        <div class="cod-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $con = mysqli_connect("localhost", "root", "","reeldb");

                                if(isset($_GET['search']))
                                {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM reeldb WHERE CONCAT(Title,Type,Category) LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0){

                                        foreach($query_run as $items){
                                            ?>
                                            <tr>
                                                <td><?= $items['Title']; ?></td>
                                                <td><?= $items['Type']; ?></td>
                                                <td><?= $items['Category']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <td colspan="3">No Result Found</td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
