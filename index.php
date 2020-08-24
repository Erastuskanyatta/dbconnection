<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-form</title>
</head>
<body>

<h3>Please fill the following details</h3>
<fieldset>

<legend>Students details</legend>
<form action="connect.php" method="POST" >


<p>
<label for="name">Name</label>
<input type="text" name="name" placeholder="name.."  required = 'true'>
</p>

<p>
<label for="phone">Phone</label>
<input type="text " name="phone"  placeholder="phone.." required = 'true'>
</p> 


<p>
<label for="phone">Gender</label>
<select name="gender" id="phone"  require = 'true' name="gender">
    <option value="male">male</option> <br>
    <option value="female">female </option>
    <option value="others">others</option>
</select>

<div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Birth</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inputEmail" placeholder="birth" required = 'true' name="birth">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required = 'true' name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="Password" required = 'true' name="password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <label class="form-check-label"><input type="checkbox"> Remember me</label>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>





</fieldset>

<style>
body{
    background-color: whitesmoke;
    text-align: center;
}

h3{
    color: red;
}


</style>

</body>
</html>