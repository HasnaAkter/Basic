



<!-- @forelse($Datakey as $countryName)

<li>{{$countryName}}</li>


@empty

<p>No user</p>
 
@endforelse-->




@if($LoginStutasKey==true)

<h1>You are Loged In</h1>

@elseif($LoginStutasKey==false)

<h1>You are Not Loged In</h1>

@else

<h1>Login Staus Not Found</h1>

@endif