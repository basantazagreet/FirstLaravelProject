<html>


@if(Session::has('user'))
<h3>Data Saved for {{Session('user')}}</h3>
@endif


<form action="flashsubmit" method="post">
@csrf

<input type="text" name="user" placeholder="Enter username here">
<br><br>

<input type="text" name="address" placeholder="Enter address here">
<br><br>

<input type="email" name="email" placeholder="Enter email address here">
<br><br>


<input type="submit" value="Submit">
<input type="reset" value="Cancel">
</form>

</html>