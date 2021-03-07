<h1>Please enter Employee details</h1>


<form method="POST" action="addemployee">
@csrf
<input type="text" name="name" placeholder="Enter Name">
<br><br>

<input type="email" name="email" placeholder="Enter email">
<br><br>

<input type="text" name="address" placeholder="Enter Address">
<br><br>

<input type="submit" value="Add data">
<input type="reset" values="Cancel">

</form>