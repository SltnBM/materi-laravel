<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
<form method="GET" action="/welcome">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>

    <p>Gender</p>
<input type="radio" id="html" name="fav_language" value="HTML">
<label for="html">Male</label><br>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Female</label><br><br>

    <label>Naationality</label><br><br>
<select name="negara" id="negara">
    <option value="Indonesia">Indonesia</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Singapura">Singapura</option>
    <option value="Thailand">Thailand</option>
</select>

    <p>Language Spoken</p>
<input type="checkbox">
<label> Bahasa Indonesia</label><br>
<input type="checkbox">
<label for="vehicle2"> English</label><br>
<input type="checkbox">
<label for="vehicle3"> Other</label><br>

    <p>Bio</p>
<textarea rows="10" cols="40"></textarea><br><br>
<button type="submit">Sign Up</button>
</form>
<!-- <a href="welcome"><button>Sign Up</button></a> -->
</body>
</html>