<html>
<head>
<title>Registration form</title>
</head>
<center>
<body>
<form>
<table width="1000"px>
</tr>
<tr>
<td>
      <label for="first_name"> First Name: </label>
</td>
<td>
    <input type="text" maxlength="50" size"30">
</td>
</tr>
<tr>
<td>
    <label for="last_name"> Last Name: </label>
</td>
<td>
    <input type="text" maxlength="50" size"30">
</td>

</tr>
<tr>
<td>
    <label for="age"> Age: </label>
</td>
<td>
    <input type="text" maxlength="50" size"30">
</td>
</tr>
<tr>
<td>
    <label for="designation"> Designation: </label>
</td>
<td>
    <input type="radio" name="Junior Programmer">Junior Programmer
    <input type="radio" name="senior Programmer">senior Programmer
    <input type="radio" name="project lead">Project lead
</td>

</tr>
<tr>
<td>
    <label for="preferred language"> Preferred language: </label>
</td>
<td>
    <input type="radio" name="java">Java
    <input type="radio" name="php">PHP
    <input type="radio" name="c++">C++
</td>

</tr>
<tr>
<td>
<label for="email">E-mail: </label>
</td>
<td>
    <input type= "text" name="email" maxlength="50" size="30">
</td>
<tr>
<td>
    <label for="password"> Password: </label>

</td>
<td>
    <input type= "text" name="password" maxlength="50" size="30">
</td>
</tr>
<tr>
    <td>
            <label>Please choose a file</label>
</td>
<td>
                <input type="file" name="fileToUpload" id="fileToUpload">
</td>
</tr>
<td>

    <input type="submit" value='submit'
</td>
</tr>
<td>

    <input type="reset" value="reset"
</td>
</tr>
</table>
</form>
</body>
</html>