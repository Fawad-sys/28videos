<h1>From Controller</h1>
{{ $data["name"] }}<br>
{{ $data["email"] }}<br>

@if($data["email"] == "email.test")
 "User is valid"
@else
 "invalid user."
@endif

<br>
<br>

@foreach($data as $item)
<h3>{{ $item }}</h3>
@endforeach

<br>
<br>

@for($i=2; $i<10; $i++)
<h4>{{ $i }}</h4>
@endfor