<h1>The list of our staffs is:</h1>




<table  border="1">
<tr>

<th>Name</th>
<th>Job</th>
<th>Email</th>
<th>Address</th>
<th>Phone</th>
<th>Operation</th>

</tr>

@foreach($staffs as $staff)
<tr>

<th>{{$staff['Name']}}</th>
<th>{{$staff['Job']}}</th>
<th>{{$staff['email']}}</th>
<th>{{$staff['address']}}</th>
<th>{{$staff['phone']}}</th>
<td><a href={{"deletestaff/".$staff['id']}}>Delete</a></td>
</tr>

@endforeach


</table>


<!-- Div add garna parcha pagination lai -->
<div>{{$staffs -> links()}}</div>


<!-- Tyo duita ugly arrows hatauna -->
<style>
.w-5{
    display:none
}
</style>