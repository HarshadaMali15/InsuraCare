<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');
?> 

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Registered Users Report

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){echo $_GET['from_date'];} else{}?>" class="form-control" placeholder="From Date">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){echo $_GET['to_date'];} else{}?>" class="form-control" placeholder="From Date">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
</br>
                                        <button type="submit" class="btn" style="background-color: #fcd82c; color: #004080; border: none;">Filter</button>
                                        <input type="button"class="btn mx-3" style="background-color:rgb(127, 27, 189); color: #f0f0f0; border: none;" value="Print"
                                        onclick="printDiv()">


                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <div class="col-mt-3" id="GFG">
                        <div class="card-body">
                        <h4>Users List</h4>
                        <hr>
                    </div>
                    <table class="table table-bordered table-striped ">
                            <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email Id</th>
                                    
                                   
                                    <th>Created at</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    if(strtotime($_GET['from_date']) < strtotime($_GET['to_date']))
                                    {
                                        $from_date = $_GET['from_date'];
                                        $to_date = $_GET['to_date'];

                                        
                                        $query = "SELECT * FROM users WHERE created_at BETWEEN '$from_date' AND '$to_date' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                //echo $row['name'].", ";
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['email']; ?></td>
                                                        
                                                        
                                                        <td><?php echo $row['created_at']; ?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                        else{
                                            //echo "No Record Found";
                                            ?>
                                         <tr>
                                            <td colspan="7"><h5>No Record Found</h5></td>
                                         </tr>
                                        <?php
                                        }
                                    }
                                    else
                                    {
                                        //echo "from_date is greater than To-Date, Please Change";
                                        ?>
                                         <tr>
                                            <td colspan="7"><h5>from_date is greater than To-Date, Please Change</h5></td>
                                         </tr>
                                        <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                    </div>
                    
                </div>  
            </div>
        </div>
    </div>  
</section>
<?php
include('includes/footer.php');
?>