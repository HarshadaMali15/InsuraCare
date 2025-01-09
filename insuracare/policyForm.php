<?php
include('functions/userfunctions.php');
include('./includes/policy_header.php'); 

?>
<div class="main-container">
<div class="container">
  <form id="multiPageForm" action="functions/authcode.php" method="POST" enctype="multipart/form-data">
    <!-- Section 1 -->
    <div class="form-section active" id="section1">
      <h2>Section 1: Personal Details</h2>
      <div class="row">
      <div class="col-md-3">
        <label for="prefix">Prefix:</label>
            <select id="prefix" name="prefix">
                <option>Mr.</option>
                <option>Mrs.</option>
                <option>Ms.</option>
                <option>Other</option>
            </select>
      </div>
           
      <div class="col-md-3">
        <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
      </div>
      <div class="col-md-3">
        <label for="middleName">Middle Name:</label>
            <input type="text" id="middleName" name="middleName" required>
      </div>
      <div class="col-md-3">
        <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
      </div>
      </div> 
      
      <div class="row">
        <div class="col-md-6">  
          <label for="father_name">Father Full Name:</label>
          <input type="text" id="father_name" name="father_name" required>
          </div>
          <div class="col-md-6">  
            <label for="mother_name">Mother Full Name:</label>
            <input type="text" id="mother_name" name="mother_name" required>
          </div>
    </div>


      <div class="row">
        <div class="col-md-6">  
            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
              <option value="">Select</option>
                <option>Male</option>
                <option>Female</option>
                <option>Third Gender</option>
            </select>
          </div>
         <!-- Marital Status -->
          <div class="col-md-6">
            <label for="maritial_status">Marital Status:</label>
            <select id="maritial_status" name="maritial_status" class="form-select" onchange="toggleSpouseNameField()">
                <option value="">Select</option>
                <option value="Married">Married</option>
                <option value="Unmarried">Unmarried</option>
            </select>
          </div>

        <!-- Spouse Name Field -->
        <div class="col-md-6 mt-3" id="spouse_name_field" style="display: none;">
          <label for="spouse_name">Spouse Name:</label>
          <input type="text" id="spouse_name" name="spouse_name" class="form-control" placeholder="Enter Spouse Name">
        </div>

    </div>

    
    <div class="row">
      <div class="col-md-6"> 
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" class="form-control" required>
        </div>
      </div>
      <div class="col-md-6"> 
       
          <label for="age">Age:</label>
          <input type="number" id="age" name="age" class="form-control" required min="1" max="120">
        
      </div>
    </div>
    

    <div class="row">
    <div class="col-md-4">
      <label for="city_of_birth">City of Birth:</label>
          <input type="text" id="city_of_birth" name="city_of_birth" required>
    </div>
    <div class="col-md-4">
      <label for="nationality">Nationality:</label>
          <input type="text" id="nationality" name="nationality" required>
    </div>
    <div class="col-md-4">
      <label for="citizenship">Citizenship:</label>
          <input type="text" id="citizenship" name="citizenship" required>
    </div>
    </div> 
 
    
    <div class="correspondence-address">
      <hr>
      <h3>Correspondence Address</h3>
      <div class="row">
        <div class="col-md-6">
          <label for="House_no">House Number:</label>
          <input type="text" id="House_no" name="House_no" required>
        </div>
        <div class="col-md-6">
          <label for="area">Area:</label>
          <input type="text" id="area" name="area" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="city">City/Town/Village:</label>
          <input type="text" id="city" name="city" required>
        </div>
        <div class="col-md-6">
          <label for="district">District :</label>
          <input type="text" id="district" name="district" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="state">State:</label>
          <input type="text" id="state" name="state" required>
        </div>
        <div class="col-md-4">
          <label for="country">Country:</label>
          <input type="text" id="country" name="country" required>
        </div>
        <div class="col-md-4">
          <label for="pin_code">Pin Code:</label>
          <input type="number" id="pin_code" name="pin_code" required>
        </div>
      </div>
    </div>
    
    <!-- Checkbox for Permanent Address -->
    <div class="form-check mt-3">
      <input type="checkbox" id="same_as_correspondence" class="form-check-input" onclick="togglePermanentAddress()">
      <label for="same_as_correspondence" class="form-check-label">
        Is your permanent address the same as your correspondence address?
      </label>
    </div>
    
    <!-- Permanent Address -->
    <div class="permanent-address mt-3" id="permanent_address_section">
     
      <h3>Permanent Address</h3>
      <div class="row">
        <div class="col-md-6">
          <label for="perm_House_no">House Number:</label>
          <input type="text" id="perm_House_no" name="perm_House_no" >
        </div>
        <div class="col-md-6">
          <label for="perm_area">Area:</label>
          <input type="text" id="perm_area" name="perm_area" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="perm_city">City/Town/Village:</label>
          <input type="text" id="perm_city" name="perm_city" >
        </div>
        <div class="col-md-6">
          <label for="perm_district">District :</label>
          <input type="text" id="perm_district" name="perm_district" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="perm_state">State:</label>
          <input type="text" id="perm_state" name="perm_state" >
        </div>
        <div class="col-md-4">
          <label for="perm_country">Country:</label>
          <input type="text" id="perm_country" name="perm_country" >
        </div>
        <div class="col-md-4">
          <label for="perm_pin_code">Pin Code:</label>
          <input type="number" id="perm_pin_code" name="perm_pin_code" >
        </div>
      </div>
    </div>

    
      <hr>
        <!-- Residential Status Dropdown -->
    <label for="residential_status">Residential Status:</label>
    <select id="residential_status" name="residential_status" onchange="toggleAddressSection()" required>
      <option value="">-- Select --</option>
      <option value="resident_indian">Resident Indian</option>
      <option value="non_resident_indian">Non Resident Indian</option>
      <option value="foreign_national">Foreign National</option>
      <option value="indian_origin">National of Indian Origin</option>
      <option value="oci">Overseas Citizen of India</option>
    </select>
    
  <hr>
      <!-- Address Section -->
      <div id="address_section" class="address-section">
       
        <h3>Address Outside India (Applicable only for NRI/FNIO/OCI)</h3>
        <div class="row">
          <div class="col-md-6">
          <label for="outside_house_no">House Number:</label>
          <input type="text" id="outside_house_no" name="outside_house_no">
        </div>
        <div class="col-md-6">
          <label for="outside_area">Area:</label>
          <input type="text" id="outside_area" name="outside_area" >  
        </div>
      </div>
        <div class="row">
          <div class="col-md-6">
            <label for="outside_city">City/Town/Village:</label>
          <input type="text" id="outside_city" name="outside_city">
          
        </div>
        <div class="col-md-6">
          <label for="outside_district">District:</label>
          <input type="text" id="outside_district" name="outside_district">
        </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label for="outside_state">State:</label>
            <input type="text" id="outside_state" name="outside_state">
        </div>
          <div class="col-md-4">
            <label for="outside_country">Country:</label>
            <input type="text" id="outside_country" name="outside_country">
        </div>
        <div class="col-md-4">
          <label for="outside_pin_code">PIN Code:</label>
          <input type="number" id="outside_pin_code" name="outside_pin_code">
        </div>
        </div>
      </div>
    <!-- </div> -->


    <!-- Section 2 -->
    <!-- <div class="form-section" id="section2"> -->
        <h2>Section 2: KYC Details</h2>
        <div class="row">
          <div class="col-md-6">
            <label for="panNumber">PAN Number:</label>
        <input type="text" id="panNumber" name="panNumber" required>
        </div>
        <div class="col-md-6">
          <label for="aadharNumber">Aadhar Card Number:</label>
          <input type="number" id="aadharNumber" name="aadharNumber" required> 
        </div>
       </div> 
      <hr>
      
      <h2>Section 3: Occupation Details</h2>
      
      <!-- Educational Qualification -->

      <div class="row">
        <div class="col-md-6">
          <label for="educationalQualification">Educational Qualification:</label>
          <input type="text" class="form-control" id="educationalQualification" name="educationalQualification">
    
      </div>
      <div class="col-md-6">
        <label for="presentOccupation">Present Occupation:</label>
        <input type="text" class="form-control" id="presentOccupation" name="presentOccupation">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="sourceOfIncome">Source of Income:</label>
        <input type="text" class="form-control" id="sourceOfIncome" name="sourceOfIncome">
    </div>
    <div class="col-md-6">
      <label for="presentEmployer">Name of Present Employer:</label>
      <input type="text" class="form-control" id="presentEmployer" name="presentEmployer">
    </div>
  </div>
    <div class="row">
        <div class="col-md-4">
          <label for="natureOfDuties">Exact Nature of Duties:</label>
          <input type="text" class="form-control" id="natureOfDuties" name="natureOfDuties">
      </div>
      <div class="col-md-4">
        <label for="lengthOfService">Length of Service:</label>
        <input type="text" class="form-control" id="lengthOfService" name="lengthOfService">
      </div>
      <div class="col-md-4">
        <label for="annualIncome">Annual Income:</label>
        <input type="text" class="form-control" id="annualIncome" name="annualIncome">
    </div>
  </div>  
<!-- </div> -->

   

    <!-- <div class="form-section" id="section3"> -->
       
      <h2>Section 4: Nominee Details</h2>
          <!-- Nominee Details Section -->
          <div class="row">
            <div class="col-md-6">
              <label for="nomineeName">Nominee Name:</label>
              <input type="text" class="form-control" id="nomineeName" name="nomineeName" >
          </div>
          <div class="col-md-6">
            <label for="share">% Share:</label>
            <input type="text" class="form-control" id="share" name="share" >
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label for="nomineeRelationship">Relationship with Nominee:</label>
            <input type="text" class="form-control" id="nomineeRelationship" name="nomineeRelationship" >
        </div>
        
      </div>
    <hr>
    <h2>Section 5: Bank Details</h2>
      <div class="row">
        <div class="col-md-6">
          <label for="bankName">Bank Name:</label>
          <input type="text" class="form-control" id="bankName" name="bankName" >
      </div>
      <div class="col-md-6">
        <label for="accountNumber">Account Number:</label>
        <input type="text" class="form-control" id="accountNumber" name="accountNumber">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <label for="ifscCode">IFSC Code:</label>
        <input type="text" class="form-control" id="ifscCode" name="ifscCode" placeholder="Enter IFSC code">
    </div>
    <div class="col-md-6">
      <label for="accountType">Account Type:</label>
      <select class="form-control" id="accountType" name="accountType">
          <option value="">Select Account Type</option>
          <option value="savings">Savings</option>
          <option value="current">Current</option>
          <option value="fixed">Fixed Deposit</option>
      </select>
    </div>
  </div>      
  <!-- </div> -->


  <!-- <div class="form-section" id="section4"> -->
    
    <h4>Upload Documents</h4>
    <p>Please follow the file format and size guidelines:</p>
    <ul>
        <li>Photo, Signature, and Nominee Signature: JPG/JPEG format, 5KB - 50KB</li>
        <li>Other documents (e.g., PAN, Aadhaar, Bank Passbook): PDF format, up to 500KB</li>
    </ul>

    <div class="row">
        <!-- Photo Upload -->
        <div class="form-group col-md-6">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control-file" id="photo" name="photo" accept=".jpg,.jpeg" required>
            <div class="alert" id="photoAlert">File must be JPG/JPEG format, size 5KB - 50KB.</div>
        </div>

        <!-- Signature Upload -->
        <div class="form-group col-md-6">
            <label for="signature">Signature:</label>
            <input type="file" class="form-control-file" id="signature" name="signature" accept=".jpg,.jpeg" required>
            <div class="alert" id="signatureAlert">File must be JPG/JPEG format, size 5KB - 50KB.</div>
        </div>
    </div>

    <div class="row">
        <!-- Nominee Signature Upload -->
        <div class="form-group col-md-6">
            <label for="nomineeSignature">Nominee Signature:</label>
            <input type="file" class="form-control-file" id="nomineeSignature" name="nomineeSignature" accept=".jpg,.jpeg" required>
            <div class="alert" id="nomineeSignatureAlert">File must be JPG/JPEG format, size 5KB - 50KB.</div>
        </div>

        <!-- PAN Card Upload -->
        <div class="form-group col-md-6">
            <label for="panCard">PAN Card (PDF):</label>
            <input type="file" class="form-control-file" id="panCard" name="panCard" accept=".pdf" required>
            <div class="alert" id="panCardAlert">File must be PDF format, size up to 500KB.</div>
        </div>
    </div>

    <div class="row">
        <!-- Aadhaar Card Upload -->
        <div class="form-group col-md-6">
            <label for="aadharCard">Aadhaar Card (PDF):</label>
            <input type="file" class="form-control-file" id="aadharCard" name="aadharCard" accept=".pdf" required>
            <div class="alert" id="aadharCardAlert">File must be PDF format, size up to 500KB.</div>
        </div>

        <!-- Blank Cheque / Bank Passbook Upload -->
        <div class="form-group col-md-6">
            <label for="bankDocument">Blank Cheque / Bank Passbook (PDF):</label>
            <input type="file" class="form-control-file" id="bankDocument" name="bankDocument" accept=".pdf" required>
            <div class="alert" id="bankDocumentAlert">File must be PDF format, size up to 500KB.</div>
        </div>
    </div>

    <div class="row">
        <!-- Nominee Aadhaar Upload -->
        <div class="form-group col-md-6">
            <label for="nomineeAadhar">Nominee Aadhaar Card (PDF):</label>
            <input type="file" class="form-control-file" id="nomineeAadhar" name="nomineeAadhar" accept=".pdf" required>
            <div class="alert" id="nomineeAadharAlert">File must be PDF format, size up to 500KB.</div>
        </div>

      
   
  </div>
  


    <!-- Navigation Buttons -->
    <!-- <div class="navigation">
      <button type="button" id="prevBtn" onclick="navigate(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="navigate(1)">Next</button>
    </div> -->

    <div class="col-12"> 
                                    
        <button  type="submit" class="btn  w-100 py-3" style="background-color: #0d1126; color: #ffffff;" name="policy_form_btn">Submit</button>
      </div>

      </div>
    
    
  </form>
  </div>
  </div>
 <? include('./includes/policy_footer.php'); ?>
