<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Visited Users</h4>
                </div>
                <div class="card-body table-responsive" id="products_table">
                    <table class="table table-bordered table-striped ">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Id</th>
                                
                                
                                <th>Ceated at</th>
                                
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query="SELECT * FROM users";
                        $query_run= mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                <tr>
                                    <td><?= $row['id'];?></td>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['email'];?></td>
                                
                                    
                        
                                    <td><?= $row['created_at'];?></td>
                                  
                                    <td> 
                                        <form action="code.php" method="POST">             
                                            <button type="submit" name="user_delete" class="btn btn-sm btn-danger" value="<?=$row['id'];?>">Delete</button> 
                                        </form>                                 
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="7">
                                    No record Found
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                                                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>