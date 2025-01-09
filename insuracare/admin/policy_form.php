<?php
include('../middleware/adminMiddleware.php');
include('includes/header.php');
?> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Policy Form</h4>
                </div>
                <div class="card-body table-responsive" id="policy_form_table">
                    <table id="datatableid" class="table table-bordered table-striped ">
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
                                <th>photo_path</th>
                                <th>signature_path</th>
                                <th>nominee_signature_path</th>
                                <th>pan_card</th>
                                <th>aadhar_card</th>
                                <th>bank_document</th>
                                <th>nominee_aadhar</th>
                                <th>uploaded_at</th>
                                <th>created_at</th>

                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               $policy_form_data = getAll("policy_form_data");

                               if(mysqli_num_rows($policy_form_data) > 0)
                               {
                                   foreach($policy_form_data as $row)
                                   {
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
                                                <td>
                                                    <a href="download.php?file=<?=$row['photo_path'];?>" class="btn btn-sm btn-info" download>Download Photo</a>
                                                </td>
                                                <td>
                                                    <a href="download.php?file=<?=$row['signature_path'];?>" class="btn btn-sm btn-info" download>Download Signature</a>
                                                </td>
                                                <td>
                                                    <a href="download.php?file=<?=$row['nominee_signature_path'];?>" class="btn btn-sm btn-info" download>Nominee Signature</a>
                                                </td>
                                                <td>
                                                    <a href="download.php?file=<?=$row['pan_card'];?>" class="btn btn-sm btn-info" download>Download PAN</a>
                                                </td>
                                                <td>
                                                    <a href="download.php?file=<?=$row['aadhar_card'];?>" class="btn btn-sm btn-info" download>Download Aadhar</a>
                                                </td>
                                                <td>
                                                    <a href="download.php?file=<?=$row['bank_document'];?>" class="btn btn-sm btn-info" download>Download Bank Passbook</a>
                                                </td>
                                                <td>
                                                    <a href="download.php?file=<?=$row['nominee_aadhar'];?>" class="btn btn-sm btn-info" download>Nominee Aadhar</a>
                                                </td>
                                            
                                                <td><?=  $row['uploaded_at']; ?></td>
                                                <td><?= $row['created_at']; ?></td>

                                               
                                               
                                               
                                                <td>
                                                <form action="code.php" method="POST">
                                                    <button type="submit" name="policy_form_delete" class="btn btn-sm btn-danger" value="<?=$row['id'];?>">Delete</button>
                                                </form>

                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No record found";
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
