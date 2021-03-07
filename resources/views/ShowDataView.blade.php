
<h1>The data parsed from JSON</h1>

<table>
<tr>
<th>ID</th>
<th>Email</th>
<th>First Name</th>
<th>Last Name</th>
<th>Avatar</th>
</tr>

@foreach ($collection as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['first_name']}}</td>
<td>{{$item['last_name']}}</td>
<td><img src="{{$item['avatar']}}" alt=''/></td>
</tr>
@endforeach




</table>