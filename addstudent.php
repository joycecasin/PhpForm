<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <title>Add Student</title>
</head>
<body>
<div class="container-fluid pt-2">
<form action="studentadded.php" method="post">
    <div class="row">
        <div class="col-md-6 ">
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
            <input type="text" class="form-control" name="street"  placeholder="Street">
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
            <button class="btn btn-primary" type="submit" name="submit" value=""><i class="fas fa-paper-plane pr-2"></i>Send</button>
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