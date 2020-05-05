<?php include ("includes/header.php"); ?>
<body>
<?php
if (isset($_POST['submit'])){
    $data_missing = array();
    if (empty($_POST['first_name'])){
        // Adds name to array als deze leeg is
        $data_missing[] = 'First Name';

    } else {
        // Trim white space from the name and store the name
        $f_name = trim($_POST['first_name']);
    }

    if (empty($_POST['last_name'])){
        // Adds name to array
        $data_missing[] = 'Last Name';

    } else {
        // Trim white space from the name and store the name
        $l_name = trim($_POST['last_name']);
    }

    if (empty($_POST['email'])){
        // Adds name to array
        $data_missing[] = 'Email';

    } else {
        // Trim white space from the name and store the name
        $email = trim($_POST['email']);
    }

    if (empty($_POST['street'])){
        // Adds name to array
        $data_missing[] = 'Street';

    } else {
        // Trim white space from the name and store the name
        $street = trim($_POST['street']);
    }

    if (empty($_POST['city'])){
        // Adds name to array
        $data_missing[] = 'City';

    } else {
        // Trim white space from the name and store the name
        $city = trim($_POST['city']);
    }

    if (empty($_POST['state'])){
        // Adds name to array
        $data_missing[] = 'State';

    } else {
        // Trim white space from the name and store the name
        $state = trim($_POST['state']);
    }

    if (empty($_POST['zip'])){
        // Adds name to array
        $data_missing[] = 'Zip Code';

    } else {
        // Trim white space from the name and store the name
        $zip = trim($_POST['zip']);
    }

    if (empty($_POST['phone'])){
        // Adds name to array
        $data_missing[] = 'Phone Number';

    } else {
        // Trim white space from the name and store the name
        $phone = trim($_POST['phone']);
    }

    if (empty($_POST['birth_date'])){
        // Adds name to array
        $data_missing[] = 'Birth Date';

    } else {
        // Trim white space from the name and store the name
        $b_date = trim($_POST['birth_date']);
    }

    if (empty($_POST['sex'])){
        // Adds name to array
        $data_missing[] = 'Sex';

    } else {
        // Trim white space from the name and store the name
        $sex = trim($_POST['sex']);
    }

    if (empty($_POST['lunch'])){
        // Adds name to array
        $data_missing[] = 'Lunch Cost';

    } else {
        // Trim white space from the name and store the name
        $lunch = trim($_POST['lunch']);
    }

    if (empty($data_missing)){
        require_once ('includes/config.php');
        $query = "INSERT INTO student (first_name,last_name,email,street,city,state,zip,phone, birth_date,sex,date_entered,lunch_cost,student_id) VALUES (?,?,?,?,?,?,?,?,?,?,NOW(),?,NULL)";

        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "ssssssisssd", $f_name,$l_name,$email, $street, $city, $state, $zip,$phone,$b_date,$sex,$lunch);

        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if ($affected_rows == 1){
            echo 'Student Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else {
            echo 'Error Occurred <br>';
            echo mysqli_error($dbc);

            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    }else{
        echo 'You need to enter the following data <br>';
        foreach ($data_missing as $missing){
            echo "$missing<br>";
        }
    }
}
?>
<div class="container-fluid">
    <form action="studentadded.php" method="post">
        <div class="row pt-2">
            <div class="col-md-6">
                <input type="text" class="form-control" name="first_name" placeholder="First name">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="last_name" placeholder="Last name">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" name="street" placeholder="Street">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" name="state" maxlength="2" placeholder="State (2 karakters)">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" name="zip" maxlength="5" placeholder="Zip Code">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="phone" placeholder="Phone Number">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="birth_date" placeholder="Birth Date">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="sex" placeholder="Sex (M/F)">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="lunch" placeholder="Lunch Cost">
            </div>
        </div>
        <div class="row">
            <div class="col pt-3 pb-3">
                <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-paper-plane pr-2"></i>Send</button>
            </div>
        </div>

    </form>
    <form action="index.php">
        <button class="btn btn-primary" type="submit"><i class="fas fa-home pr-2"></i>Homepage</button>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>