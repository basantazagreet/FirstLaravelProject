<form method="POST" action="/updatecustomer">
@csrf

<input type="hidden" name="id" value = {{$data['id']}}  >

<input type="text" name="custname" value="{{$data['custname']}}" >
<br><br>

<input type="text" name="c_address" value="{{$data['c_address']}}" >
<br><br>

<input type="text" name="c_phone" value="{{$data['c_phone']}}" >
<br><br>

<input type="submit" value="Update data">
<input type="reset" values="Cancel">

</form>