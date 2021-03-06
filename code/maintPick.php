<?php
session_start();

if(isset($_SESSION['id'])){
    $username = $_SESSION['username']; 
    $id = $_SESSION['id'];
    $roleId = $_SESSION['roleId'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
} else{
    header("Location: index.php");
}

require("themeparkSiteBuilder.php");
$siteBuilder = new themeParkSiteBuilder();

$siteBuilder->getOpeningHtmlTags('Maintenance');

$siteBuilder->getGreyOverLay();

$siteBuilder->getMenu();
?>
<div class = "content">
    <h1>Select Report Type</h1>
    <a href="activemaintenanceReport.php" class="add_ticket_button">
        <button class="add_maintenance" name="active">Active Tickets</button>
    </a>
    <a href="closedmaintenanceReport.php" class="add_ticket_button" name="closed">
        <button class="mod_maintenance" name="closed">Closed Tickets</button>
    </a>
    
 </div>