<div class="container-fluid">

   <div class="col-md-6">

@if($user1->count() == 0) <h3>Usuario sin biografia completa.</h3>@endif
       @foreach ($user1 as $users1)<h3>{{ $users1->user->name}}</h3>
       @endforeach
       <table class="table table-striped">
       <tr>
           <td rowspan="4" colspan="3">@if(! empty($users1))<img src="fotos/{{ $users1->path }}" style="width:200px" alt=""/>@endif</td>
           <td><p>Estatura</p></td>

       </tr>
           @if($user1->count() == 0)<tr> <th>-- </th></tr>@endif
               @foreach ($user1 as $users1)
           <tr >
               <th>{{ $users1->estatura }} m </th>
               @endforeach
           </tr>
       <tr>
           <td><p>Peso</p></td>
       </tr>
           @if($user1->count() == 0)<tr> <th>-- </th></tr>@endif
           @foreach ($user1 as $users1)
           <tr >
               <th>{{ $users1->peso }} kg </th>
               @endforeach
           </tr>

           <tr>
               <th>WOD</th>
               <th>Tiempo</th>
               <th>Peso</th>
               <th>Fecha</th>
           </tr>
           <tr>
               <th>Angie</th>
               @foreach($angie1 as $angies1)
               <th>{{ $angies1->tiempo}}</th>
               <th>{{ $angies1->peso}}</th>
               <th>{{ $angies1->fecha}}</th>
               @endforeach
           </tr>
           <tr>
               @foreach($fran1 as $frans1)
               <th>Fran</th>
               <th>{{$frans1->tiempo}}</th>
               <th>{{$frans1->peso}}</th>
               <th>{{ $frans1->fecha}}</th>
               @endforeach
           </tr>
           <tr>
               @foreach($chelsea1 as $chelseas1)
               <th>Chelsea</th>
               <th>{{$chelseas1->tiempo}}</th>
               <th>{{ $chelseas1->peso}}</th>
               <th>{{ $chelseas1->fecha}}</th>
               @endforeach
           </tr>
           <tr>
               @foreach($barbara1 as $barbaras1)
               <th>Barbara</th>
               <th>{{ $barbaras1->tiempo}}</th>
               <th>{{ $barbaras1->peso}}</th>
               <th>{{ $barbaras1->fecha}}</th>
               @endforeach
           </tr>
           <tr>
               @foreach($cindy1 as $cindys1)
               <th>Cindy</th>
               <th>{{ $cindys1->tiempo}}</th>
               <th>{{ $cindys1->peso}}</th>
               <th>{{ $cindys1->fecha}}</th>
               @endforeach
           </tr>
           <tr>
               @foreach($helen1 as $helens1)
               <th>Helen</th>
               <th>{{ $helens1->tiempo}}</th>
               <th>{{ $helens1->peso}}</th>
               <th>{{ $helens1->fecha}}</th>
               @endforeach
           </tr>
</table>
   </div>
    <div class="col-md-6">
        @if($user2->count() == 0) <h3>Usuario sin biografia completa.</h3>@endif
        @foreach($user2 as $users2)<h3>{{ $users2->user->name}}</h3>
        @endforeach
        <table class="table table-striped">
            <tr>
                <td rowspan="4" colspan="3">@if(! empty($users2))<img src="fotos/{{ $users2->path }}" style="width:200px" alt=""/>@endif</td>
                <td><p>Estatura</p></td>

            </tr>
            @if($user2->count() == 0)<tr> <th>-- </th></tr>@endif
            @foreach ($user2 as $users2)
            <tr >
                <th>  {{ $users2->estatura }} m </th>
                @endforeach
            </tr>
            <tr>
                <td><p>Peso</p></td>
            </tr>
            @if($user2->count() == 0)<tr> <th>-- </th></tr>@endif
            @foreach ($user2 as $users2)
            <tr >
                <th>{{ $users2->peso }} kg </th>
                @endforeach
            </tr>
            <tr>
                <th>WOD</th>
                <th>Tiempo</th>
                <th>Peso</th>
                <th>Fecha</th>
            </tr>
            <tr>
                <th>Angie</th>
                @foreach($angie2 as $angies2)
                <th>{{ $angies2->tiempo}}</th>
                <th>{{ $angies2->peso}}</th>
                <th>{{ $angies2->fecha}}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($fran2 as $frans2)
                <th>Fran</th>
                <th>{{$frans2->tiempo}}</th>
                <th>{{$frans2->peso}}</th>
                <th>{{ $frans2->fecha}}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($chelsea2 as $chelseas2)
                <th>Chelsea</th>
                <th>{{$chelseas2->tiempo}}</th>
                <th>{{ $chelseas2->peso}}</th>
                <th>{{ $chelseas2->fecha}}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($barbara2 as $barbaras2)
                <th>Barbara</th>
                <th>{{ $barbaras2->tiempo}}</th>
                <th>{{ $barbaras2->peso}}</th>
                <th>{{ $barbaras2->fecha}}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($cindy2 as $cindys2)
                <th>Cindy</th>
                <th>{{ $cindys2->tiempo}}</th>
                <th>{{ $cindys2->peso}}</th>
                <th>{{ $cindys2->fecha}}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($helen2 as $helens2)
                <th>Helen</th>
                <th>{{ $helens2->tiempo}}</th>
                <th>{{ $helens2->peso}}</th>
                <th>{{ $helens2->fecha}}</th>
                @endforeach
            </tr>
        </table>

</div>


    </div>
