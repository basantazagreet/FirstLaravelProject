
<table  border="1">
<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Operation</th>

</tr>

@foreach($employees as $employee)
<tr>

<th>{{$employee['id']}}</th>
<th>{{$employee['name']}}</th>
<th>{{$employee['email']}}</th>
<th>{{$employee['address']}}</th>
<td><a href={{"deleteemployee/".$employee['id']}}>Delete</a>
<a href={{"editemployee/".$employee['id']}}>Edit</a></td>

</tr>

@endforeach


</table>