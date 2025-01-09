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
                        <h4>Users Form Report</h4>
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
                        <h4>Users Form List</h4>
                        <hr>
                    </div>
                    <table class="table table-bordered table-striped ">
                            <thead>
                                <tr class="text-center">
                                <th>ID</th>
                                <th>prefix</th>
                                <th>firstName</th>
                                <th>middleName</th>
                                <th>lastName</th>
                                <th>father_name</th>
                                <th>mother_name</th>
                                <th>gender</th>
                                <th>maritial_status</th>
                                <th>spouse_name</th>
                                <th>dob</th>
                                <th>age</th>
                                <th>city_of_birth</th>
                                <th>nationality</th>
                                <th>citizenship</th>
                                <th>correspondence_address</th>
                                <th>permanent_address</th>
                                <th>residential_status</th>
                                <th>outside_address</th>
                                <th>pan_number</th>
                                <th>aadhar_number</th>
                                <th>educational_qualification</th>
                                <th>present_occupation</th>
                                <th>source_of_income</th>
                                <th>present_employer</th>
                                <th>nature_of_duties</th>
                                <th>length_of_service</th>
                                <th>annual_income</th>
                                <th>nominee_details</th>
                                <th>bank_details</th>                                
                                <th>uploaded_at</th>
                                <th>created_at</th>

                               
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

                                        
                                        $query = "SELECT * FROM policy_form_data WHERE created_at BETWEEN '$from_date' AND '$to_date' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                //echo $row['name'].", ";
                                                ?>
                                            <tr>
                                                <td><?= $row['id']; ?></td>
                                                <td><?= $row['prefix']; ?></td>
                                                <td><?= $row['firstName']; ?></td>
                                                <td><?= $row['middleName']; ?></td>
                                                <td><?= $row['lastName']; ?></td>
                                                <td><?= $row['father_name']; ?></td>
                                                <td><?= $row['mother_name']; ?></td>
                                                <td><?= $row['gender']; ?></td>
                                                <td><?= $row['marital_status']; ?></td>
                                                <td><?= $row['spouse_name']; ?></td>
                                                <td><?= $row['dob']; ?></td>
                                                <td><?= $row['age']; ?></td>
                                                <td><?= $row['city_of_birth']; ?></td>
                                                <td><?= $row['nationality']; ?></td>
                                                <td><?= $row['citizenship']; ?></td>
                                                <td><?= $row['correspondence_address']; ?></td>
                                                <td><?= $row['permanent_address']; ?></td>
                                                <td><?= $row['residential_status']; ?></td>
                                                <td><?= $row['outside_address']; ?></td>
                                                <td><?= $row['pan_number']; ?></td>
                                                <td><?= $row['aadhar_number']; ?></td>
                                                <td><?= $row['educational_qualification']; ?></td>
                                                <td><?= $row['present_occupation']; ?></td>
                                                <td><?= $row['source_of_income']; ?></td>
                                                <td><?= $row['present_employer']; ?></td>
                                                <td><?= $row['nature_of_duties']; ?></td>
                                                <td><?= $row['length_of_service']; ?></td>
                                                <td><?= $row['annual_income']; ?></td>
                                                <td><?= $row['nominee_details']; ?></td>
                                                <td><?= $row['bank_details']; ?></td>                                              
                                                <td><?=  $row['uploaded_at']; ?></td>
                                                <td><?= $row['created_at']; ?></td>

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