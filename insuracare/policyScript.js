
let currentSection = 0;
const sections = document.querySelectorAll('.form-section');

function navigate(direction) {
  // Validate current section before navigating forward
  if (direction === 1 && !validateSection()) return;

  // Hide current section
  sections[currentSection].classList.remove('active');

  // Update section index
  currentSection += direction;

  // Show the next/previous section
  sections[currentSection].classList.add('active');

  // Adjust button visibility
  document.getElementById('prevBtn').style.display = currentSection === 0 ? 'none' : 'inline-block';
  document.getElementById('nextBtn').innerText = currentSection === sections.length - 1 ? 'Submit' : 'Next';
}

function validateSection() {
  const inputs = sections[currentSection].querySelectorAll('input');
  for (let input of inputs) {
    if (!input.checkValidity()) {
      input.reportValidity();
      return false;
    }
  }
  return true;
}

function toggleSpouseNameField() {
    const maritalStatus = document.getElementById('maritial_status').value;
    const spouseNameField = document.getElementById('spouse_name_field');

    if (maritalStatus === 'Married') {
        spouseNameField.style.display = 'block'; // Show spouse name field
    } else {
        spouseNameField.style.display = 'none'; // Hide spouse name field
    }
}
function togglePermanentAddress() {
    const checkbox = document.getElementById('same_as_correspondence');
    const permanentAddressSection = document.getElementById('permanent_address_section');
  
    if (checkbox.checked) {
      permanentAddressSection.style.display = 'none'; // Hide permanent address section
    } else {
      permanentAddressSection.style.display = 'block'; // Show permanent address section
    }
  }
 function toggleAddressSection() {
      const residentialStatus = document.getElementById('residential_status').value;
      const addressSection = document.getElementById('address_section');
      
      // Show the address section only if the user selects a non-resident status
      if (residentialStatus === 'resident_indian') {
        addressSection.style.display = 'none';
      } else {
        addressSection.style.display = 'block';
      }
    }
    
     
    // File validation logic
    document.getElementById('uploadForm').addEventListener('submit', function(event) {
      let valid = true;

      // Validate image files (JPG/JPEG, 5KB - 50KB)
      const imageFields = ['photo', 'signature', 'nomineeSignature', 'nomineeSignatureFile'];
      imageFields.forEach(field => {
          const fileInput = document.getElementById(field);
          const alertDiv = document.getElementById(field + 'Alert');
          if (fileInput.files.length > 0) {
              const file = fileInput.files[0];
              const fileSize = file.size / 1024; // Size in KB
              if (fileSize < 5 || fileSize > 50 || !['image/jpeg', 'image/jpg'].includes(file.type)) {
                  valid = false;
                  alertDiv.style.display = 'block';
              } else {
                  alertDiv.style.display = 'none';
              }
          }
      });

      // Validate PDF files (up to 500KB)
      const pdfFields = ['panCard', 'aadharCard', 'bankDocument', 'nomineeAadhar'];
      pdfFields.forEach(field => {
          const fileInput = document.getElementById(field);
          const alertDiv = document.getElementById(field + 'Alert');
          if (fileInput.files.length > 0) {
              const file = fileInput.files[0];
              const fileSize = file.size / 1024; // Size in KB
              if (fileSize > 500 || file.type !== 'application/pdf') {
                  valid = false;
                  alertDiv.style.display = 'block';
              } else {
                  alertDiv.style.display = 'none';
              }
          }
      });

      if (!valid) {
          event.preventDefault();
      }
  });

  console.log("policyScript.js loaded successfully!");
