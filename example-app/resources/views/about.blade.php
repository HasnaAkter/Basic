@for($i=0; $i<100; $i++)



<img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dHJhdmVsJTIwdG91cnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60 " style="width: 80px;height: 70px;" alt="">

@endfor

@for($i=0; $i<100; $i++)



<button style="width: 70px; height: 40px;>Submit</button>


@endfor



 @forelse($Datakey as $countryName)

<li >{{$countryName}}</li>


@empty

<p>No user</p>
 
@endforelse



