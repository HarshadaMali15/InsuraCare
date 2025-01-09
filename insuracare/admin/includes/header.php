<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>
    InsuraCare
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />

  <!------Alertify js---------->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

  <!------Search box---------->
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css"/>
 

  <style>
    .form-control{
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }
    .form-select{
      border: 1px solid #b3a1a1 !important;
      padding: 8px 10px;
    }
 
  </style>

<script> 

function printDiv() { 

    var divContents = document.getElementById("GFG").innerHTML; 

    var a = window.open(' ', ' ', 'height=800, width=700'); 

    a.document.write('<html>'); 

    a.document.write('<body > '); 

    a.document.write(divContents); 

    a.document.write('</body></html>'); 

    a.document.close(); 

    a.print(); 

} 

</script> 
</head>

<body class="g-sidenav-show  bg-gray-200">
    <?php include('sidebar.php'); ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include('navbar.php'); ?>