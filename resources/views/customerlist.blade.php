<h1>This is customers data</h1>




<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Operation</th>
</tr>

@foreach($customers as $customer)
<tr>
<td>{{$customer['id']}}</td>
<td>{{$customer['custname']}}</td>
<td>{{$customer['c_address']}}</td>
<td>{{$customer['c_phone']}}</td>
<td><a href={{"deletecustomer/".$customer['id']}}>Delete</a>
<a href={{"editcustomer/".$customer['id']}}>Edit</a>

</td>
</tr>
@endforeach

</table>


Using image from database:




<img src='img/bWy7vn9SisHCBLyMvHjmXkKEmoH6TWYRMRcMBrWL.png' alt="tag" height=300 width=300/>