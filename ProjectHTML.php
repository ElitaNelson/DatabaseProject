<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
<body>

<h1><center>A DATABASE FOR YOUR INTERNET OF THINGS:</center></h1>
<center><img src="http://localhost/ElitaDrawing.jpeg" /></center>
<h2><center>HELPING YOU SEE BOTH THE FOREST AND THE TREES</center></h2>

<table>
<tr>
<td>

<form action="Query.php" method="post">

<center>Insert a new Provider</center><br>

Provider Name: <input type="text" name="ProviderName" /><br><br>

Phone Number: <input type="text" name="PhoneNumber" /><br><br>

<input type="submit" />

</form>

</td>
<td>

<form action="Query.php" method="post">

<center>Insert a new user</center><br>

User SSN: <input type="text" name="SSN" /><br><br>

First Name: <input type="text" name="Fname" /><br><br>

Last Name: <input type="text" name="Lname" /><br><br>

Gender:
<input type="radio" name="Sex" value="F">Female
<input type="radio" name="Sex" value="M">Male
<input type="radio" name="Sex" value="O">Other <br><br>

Authorized User?:
<input type="radio" name="AuthUser" value="Yes">Yes
<input type="radio" name="AuthUser" value="No">No <br><br>

<input type="submit" />

</form>

</td>
</tr>
</table>


</body>
</html>
