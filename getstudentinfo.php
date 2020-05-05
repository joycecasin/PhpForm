<?php include ("includes/header.php"); ?>
<body>
<form action="index.php" class="pt-2">
    <button class="btn btn-primary" type="submit"><i class="fas fa-home pr-2"></i>Homepage</button>
</form>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>
<?php

require_once ('includes/config.php');

$query = "SELECT first_name, last_name, email, street, city, zip, phone, student_id FROM student ";
$response = @mysqli_query($dbc, $query);


// Opmaak van de tabel
if ($response){
    echo '<table align="left" cellspacing="5" cellpadding = "8"> 
    <tr>
        <td align="left"><b>First Name</b></td>
        <td align="left"><b>Last Name </b></td>
        <td align="left"><b>Email </b></td>
        <td align="left"><b>Street </b></td>
        <td align="left"><b>City </b></td>
        <td align="left"><b>Zip </b></td>
        <td align="left"><b>Phone </b></td>
        <td align="left"><b>Action </b></td>
    </tr>';

// Toont de data die in de database aanwezig is tot er geen rijen meer aanwezig zijn om te tonen
    while ($row = mysqli_fetch_array($response)){

        echo '<tr>
                <td align="left">' .  $row['first_name'] . '</td>
                <td align="left">' .  $row['last_name'] . '</td>
                <td align="left">' .  $row['email'] . '</td>
                <td align="left">' .  $row['street'] . '</td>
                <td align="left">' .  $row['city'] . '</td>
                <td align="left">' . $row['zip'] . '</td>
                <td align="left">' . $row['phone'] . '</td>
                <td align="left"><button class="btn btn-danger text-white"><a class="text-white" href="delete.php?id=' . $row['student_id'] . '">Delete</a></button></td>
                <!--<form action="getstudentinfo.php" method="get">
                    <input type="hidden" name="id_to_delete" value="">
                    <button type="submit" name="delete" value="" class="btn btn-outline-danger"><i class="fas fa-trash-alt pr-2"></i>Delete</button>
                </form>-->
                
                <!--<td>
                <form action="getstudentinfo.php" method="get">
                    <input type="hidden" name="id_to_edit" value="<?php echo $; ?>">
                    <button type="submit" name="edit" value="" class="btn btn-outline-info"><i class="fas fa-pencil-alt pr-2"></i>Edit</button>
                </form>
                </td>-->
                <td align="left">';
        echo '</tr>';
    }
    echo '</table>';

} else {
    echo "Couldn't issue database query";
    echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>


