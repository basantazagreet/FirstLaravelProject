<form method="POST" action="/updateemployee">
@csrf

<input type="hidden" name="id" value = {{$data['id']}}  >

<input type="text" name="name" value="{{$data['name']}}" >
<br><br>

<input type="email" name="email" value="{{$data['email']}}" >
<br><br>

<input type="text" name="address" value="{{$data['address']}}" >
<br><br>

<input type="submit" value="Update data">
<input type="reset" values="Cancel">

</form>