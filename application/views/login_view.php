<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<h1>Meralco Leave Request App</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
    <form>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username" maxlength="20" pattern="^[A-Za-z0-9]*$" placeholder="Username" required/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password" maxlength="20" pattern="^[\S]*$" placeholder="Password" required/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
