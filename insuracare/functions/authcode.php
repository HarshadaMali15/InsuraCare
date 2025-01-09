<?php

session_start();
include('../config/dbcon.php');
include('myfunctions.php');
if (isset($_POST['register_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

      // Validate name format
      if (!preg_match("/^[a-zA-Z ]{2,50}$/", $name)) {
        $_SESSION['message'] = "Invalid name. Only letters and spaces are allowed (2-50 characters).";
        header('Location: ../registration_form.php');
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid email format";
        header('Location: ../registration_form.php');
        exit();
    }
    if (!preg_match("/^[0-9]{10}$/", $phone)) { // Adjust regex as per your requirements
        $_SESSION['message'] = "Invalid mobile number. Must be 10 digits.";
        header('Location: ../registration_form.php');
        exit();
    }

     // Validate password strength
     if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/", $password)) {
        $_SESSION['message'] = "Weak password. Must be at least 8 characters long, with one uppercase letter, one lowercase letter, one digit, and one special character.";
        header('Location: ../registration_form.php');
        exit();
    }
    
    // Check if email already registered
    $check_email_query = "SELECT email FROM users WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered";
        header('Location: ../registration_form.php');
        exit();
    } else {
        if ($password === $cpassword) {
            // Hash the password before storing it in the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data
            $insert_query = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$hashed_password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login_form.php');
                exit();
            } else {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../registration_form.php');
                exit();
            }
        } else {
            $_SESSION['message'] = "Passwords do not match";
            header('Location: ../registration_form.php');
            exit();
        }
    }
}


else if(isset($_POST['login_btn']))
{
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    

    //Check if email already registered
    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;
        
        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        
        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];
        $_SESSION['role_as'] = $role_as;

        if($role_as == 1)
        {
            redirect('../admin/index.php','Welcome to dashboard');
        }
        else
        {
            redirect('../index.php','Logged In Successfully');
        }

    }
    else
    {
        redirect('../login_form.php','Invalid Credentials');
    }
}
else if(isset($_POST['contact_btn'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $message = mysqli_real_escape_string($con,$_POST['message']);

   
            // Insert user data
            $insert_query = "INSERT INTO contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
            $insert_query_run = mysqli_query($con,$insert_query);
    
            if($insert_query_run)
            {
                $_SESSION['message'] = "Submited Successfully";
                header('Location: ../contact.php');
    
            }
            else
            {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../contact.php');
            }
    
        }
   

else if(isset($_POST['policy_form_btn'])) {

       // Define upload directory
 $uploadDir = "../uploads/";

 // Ensure the upload directory exists
 if (!is_dir($uploadDir)) {
     mkdir($uploadDir, 0777, true);
 }

// Validate and upload each file
$files = ['photo', 'signature', 'nomineeSignature', 'panCard', 'aadharCard', 'bankDocument', 'nomineeAadhar'];
$uploadedPaths = [];
$allowedMimeTypes = ['application/pdf', 'image/jpeg', 'image/jpg']; // Allowed MIME types

foreach ($files as $file) {
    if (isset($_FILES[$file]) && $_FILES[$file]['error'] === UPLOAD_ERR_OK) {
        // Check file size (500KB limit)
        if ($_FILES[$file]['size'] <= 500 * 1024) {
            // Check file type
            $fileMimeType = mime_content_type($_FILES[$file]['tmp_name']);
            if (in_array($fileMimeType, $allowedMimeTypes)) {
                // Generate unique filename
                $filename = uniqid() . "_" . basename($_FILES[$file]['name']);
                $filePath = $uploadDir . $filename;

                // Move uploaded file to the directory
                if (move_uploaded_file($_FILES[$file]['tmp_name'], $filePath)) {
                    $uploadedPaths[$file] = $filePath; // Save path
                } else {
                    die("Failed to upload " . $file);
                }
            } else {
                die("Invalid file type for " . $file . ". Only JPG, JPEG, and PDFs are allowed.");
            }
        } else {
            die("File size for " . $file . " exceeds 500KB.");
        }
    } else {
        // Set empty path if file is missing
        $uploadedPaths[$file] = null;
    }
}


    $prefix = mysqli_real_escape_string ($con,$_POST['prefix']);
    $firstName = mysqli_real_escape_string ($con,$_POST['firstName']);
    $middleName = mysqli_real_escape_string ($con,$_POST['middleName']);
    $lastName = mysqli_real_escape_string ($con,$_POST['lastName']);
    $fatherName = mysqli_real_escape_string ($con,$_POST['father_name']);
    $motherName = mysqli_real_escape_string ($con,$_POST['mother_name']);
    $gender = mysqli_real_escape_string ($con,$_POST['gender']);
    $maritalStatus = mysqli_real_escape_string ($con,$_POST['maritial_status']);
    $spouseName = mysqli_real_escape_string ($con,$_POST['spouse_name']);
    $dob = mysqli_real_escape_string ($con,$_POST['dob']);
    $age = mysqli_real_escape_string ($con,$_POST['age']);
    $cityOfBirth = mysqli_real_escape_string ($con,$_POST['city_of_birth']);
    $nationality = mysqli_real_escape_string ($con,$_POST['nationality']);
    $citizenship = mysqli_real_escape_string ($con,$_POST['citizenship']);

    // Address Fields
    $correspondenceAddress = json_encode([
        'house_no' => mysqli_real_escape_string ($con,$_POST['House_no']),
        'area' => mysqli_real_escape_string ($con,$_POST['area']),
        'city' => mysqli_real_escape_string ($con,$_POST['city']),
        'district' => mysqli_real_escape_string ($con,$_POST['district']),
        'state' => mysqli_real_escape_string ($con,$_POST['state']),
        'country' => mysqli_real_escape_string ($con,$_POST['country']),
        'pin_code' => mysqli_real_escape_string ($con,$_POST['pin_code'])
    ]);

    $permanentAddress = isset($_POST['same_as_correspondence']) 
        ? $correspondenceAddress 
        : json_encode([
            'house_no' => mysqli_real_escape_string ($con,$_POST['perm_House_no']),
            'area' => mysqli_real_escape_string ($con,$_POST['perm_area']),
            'city' => mysqli_real_escape_string ($con,$_POST['perm_city']),
            'district' => mysqli_real_escape_string ($con,$_POST['perm_district']),
            'state' => mysqli_real_escape_string ($con,$_POST['perm_state']),
            'country' => mysqli_real_escape_string ($con,$_POST['perm_country']),
            'pin_code' => mysqli_real_escape_string ($con,$_POST['perm_pin_code'])
        ]);

    // Other fields
    $residentialStatus = mysqli_real_escape_string ($con,$_POST['residential_status']);
    $outsideAddress = json_encode([
        'house_no' => mysqli_real_escape_string ($con,$_POST['outside_house_no']),
        'area' => mysqli_real_escape_string ($con,$_POST['outside_area']),
        'city' => mysqli_real_escape_string ($con,$_POST['outside_city']),
        'district' => mysqli_real_escape_string ($con,$_POST['outside_district']),
        'state' => mysqli_real_escape_string ($con,$_POST['outside_state']),
        'country' => mysqli_real_escape_string ($con,$_POST['outside_country']),
        'pin_code' => mysqli_real_escape_string ($con,$_POST['outside_pin_code'])
    ]);

    $panNumber = mysqli_real_escape_string ($con,$_POST['panNumber']);
    $aadharNumber = mysqli_real_escape_string ($con,$_POST['aadharNumber']);
    $educationalQualification = mysqli_real_escape_string ($con,$_POST['educationalQualification']);
    $presentOccupation = mysqli_real_escape_string ($con,$_POST['presentOccupation']);
    $sourceOfIncome = mysqli_real_escape_string ($con,$_POST['sourceOfIncome']);
    $presentEmployer = mysqli_real_escape_string ($con,$_POST['presentEmployer']);
    $natureOfDuties = mysqli_real_escape_string ($con,$_POST['natureOfDuties']);
    $lengthOfService = mysqli_real_escape_string ($con,$_POST['lengthOfService']);
    $annualIncome = mysqli_real_escape_string ($con,$_POST['annualIncome']);

    $nomineeDetails = json_encode([
        'name' => mysqli_real_escape_string ($con,$_POST['nomineeName']),
        'share' => mysqli_real_escape_string ($con,$_POST['share']),
        'relationship' => mysqli_real_escape_string ($con,$_POST['nomineeRelationship'])
    ]);

    $bankDetails = json_encode([
        'bank_name' => mysqli_real_escape_string ($con,$_POST['bankName']),
        'account_number' => mysqli_real_escape_string ($con,$_POST['accountNumber']),
        'ifsc_code' => mysqli_real_escape_string ($con,$_POST['ifscCode']),
        'account_type' => mysqli_real_escape_string ($con,$_POST['accountType'])
    ]);

    // File Upload Handling
    // $photoPath = '../uploads' . basename($_FILES['photo']['name']);
    // move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath);

    // $signaturePath = '../uploads' . basename($_FILES['signature']['name']);
    // move_uploaded_file($_FILES['signature']['tmp_name'], $signaturePath);

    // $nomineeSignaturePath = '../uploads' . basename($_FILES['nomineeSignature']['name']);
    // move_uploaded_file($_FILES['nomineeSignature']['tmp_name'], $nomineeSignaturePath);

    // Insert into the database
    $stmt = $con->prepare("INSERT INTO policy_form_data (prefix, firstName, middleName, lastName, father_name, mother_name, gender, marital_status, spouse_name, dob, age, city_of_birth, nationality, citizenship, correspondence_address, permanent_address, residential_status, outside_address, pan_number, aadhar_number, educational_qualification, present_occupation, source_of_income, present_employer, nature_of_duties, length_of_service, annual_income, nominee_details, bank_details, photo_path, signature_path, nominee_signature_path, pan_card, aadhar_card, bank_document, nominee_aadhar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param('sssssssssssissssssssssssssssssssssss', $prefix, $firstName, $middleName, $lastName, $fatherName, $motherName, $gender, $maritalStatus, $spouseName, $dob, $age, $cityOfBirth, $nationality, $citizenship, $correspondenceAddress, $permanentAddress, $residentialStatus, $outsideAddress, $panNumber, $aadharNumber, $educationalQualification, $presentOccupation, $sourceOfIncome, $presentEmployer, $natureOfDuties, $lengthOfService, $annualIncome, $nomineeDetails, $bankDetails, $uploadedPaths['photo'], $uploadedPaths['signature'], $uploadedPaths['nomineeSignature'], $uploadedPaths['panCard'], $uploadedPaths['aadharCard'], $uploadedPaths['bankDocument'], $uploadedPaths['nomineeAadhar']);
   
    if ($stmt->execute()) {
        $_SESSION['message'] = "Form Submitted Successfully";
        header('Location: ../index.php');

    } else {
        echo "Error: " . $stmt->error;
    }

    

    
    $stmt->close();
    $con->close();
}
?>