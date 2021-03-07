<h1>This is coming from hello view.</h1>






@include('inner')

@foreach ($users as $user)
<h5>{{$user}}</h5>
@endforeach


<script>
var data = @json($users);
console.warn(data[0]);


</script>