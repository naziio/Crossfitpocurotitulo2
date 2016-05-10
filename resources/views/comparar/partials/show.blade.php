<div class="container-fluid">
<div class="table-responsive">
   <div class="col-md-6">

@if($user1->count() == 0) <h3>Usuario sin biografia completa.</h3>@endif
       @foreach ($user1 as $users1)<h3>{{ $users1->user->name}}</h3>
       @endforeach
       <table class="table table-condensed">
       <tr>
           <td rowspan="4" colspan="3">@if(! empty($users1))<img src="fotos/{{ $users1->path }}" style="width:200px;" alt="" border="1"/>@endif</td>
           <th><p>Estatura</p></th>

       </tr>
           @if($user1->count() == 0)<tr> <td>-- </td></tr>@endif
               @foreach ($user1 as $users1)
           <tr >
               <td>{{ $users1->estatura }} m </td>
               @endforeach
           </tr>
       <tr>
           <th><p>Peso</p></th>
       </tr>
           @if($user1->count() == 0)<tr> <td>-- </td></tr>@endif
           @foreach ($user1 as $users1)
           <tr >
               <td>{{ $users1->peso }} kg </td>
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
               <td>{{ $angies1->tiempo}}</td>
               <td>{{ $angies1->peso}}</td>
               <td>{{ $angies1->fecha}}</td>
               @endforeach
           </tr>
           <tr>
               @foreach($fran1 as $frans1)
               <th>Fran</th>
               <td>{{$frans1->tiempo}}</td>
               <td>{{$frans1->peso}}</td>
               <td>{{ $frans1->fecha}}</td>
               @endforeach
           </tr>
           <tr>
               @foreach($chelsea1 as $chelseas1)
               <th>Chelsea</th>
               <td>{{$chelseas1->tiempo}}</td>
               <td>{{ $chelseas1->peso}}</td>
               <td>{{ $chelseas1->fecha}}</td>
               @endforeach
           </tr>
           <tr>
               @foreach($barbara1 as $barbaras1)
               <th>Barbara</th>
               <td>{{ $barbaras1->tiempo}}</td>
               <td>{{ $barbaras1->peso}}</td>
               <td>{{ $barbaras1->fecha}}</td>
               @endforeach
           </tr>
           <tr>
               @foreach($cindy1 as $cindys1)
               <th>Cindy</th>
               <td>{{ $cindys1->tiempo}}</td>
               <td>{{ $cindys1->peso}}</td>
               <td>{{ $cindys1->fecha}}</td>
               @endforeach
           </tr>
           <tr>
               @foreach($helen1 as $helens1)
               <th>Helen</th>
               <td>{{ $helens1->tiempo}}</td>
               <td>{{ $helens1->peso}}</td>
               <td>{{ $helens1->fecha}}</td>
               @endforeach
           </tr>
</table>
   </div>
    <div class="col-md-6">
        @if($user2->count() == 0) <h3>Usuario sin biografia completa.</h3>@endif
        @foreach($user2 as $users2)<h3>{{ $users2->user->name}}</h3>
        @endforeach
        <table class="table table-condensed">
            <tr>
                <td rowspan="4" colspan="3">@if(! empty($users2))<img src="fotos/{{ $users2->path }}" style="width:200px;border-width:1px;" alt=""/>@endif</td>
                <th><p>Estatura</p></th>

            </tr>
            @if($user2->count() == 0)<tr> <th>-- </th></tr>@endif
            @foreach ($user2 as $users2)
            <tr >
                <td>  {{ $users2->estatura }} m </td>
                @endforeach
            </tr>
            <tr>
                <th><p>Peso</p></th>
            </tr>
            @if($user2->count() == 0)<tr> <th>-- </th></tr>@endif
            @foreach ($user2 as $users2)
            <tr >
                <td>{{ $users2->peso }} kg </td>
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
                <td>{{ $angies2->tiempo}}</td>
                <td>{{ $angies2->peso}}</td>
                <td>{{ $angies2->fecha}}</td>
                @endforeach
            </tr>
            <tr>
                @foreach($fran2 as $frans2)
                <th>Fran</th>
                <td>{{$frans2->tiempo}}</td>
                <td>{{$frans2->peso}}</td>
                <td>{{ $frans2->fecha}}</td>
                @endforeach
            </tr>
            <tr>
                @foreach($chelsea2 as $chelseas2)
                <th>Chelsea</th>
                <td>{{$chelseas2->tiempo}}</td>
                <td>{{ $chelseas2->peso}}</td>
                <td>{{ $chelseas2->fecha}}</td>
                @endforeach
            </tr>
            <tr>
                @foreach($barbara2 as $barbaras2)
                <th>Barbara</th>
                <td>{{ $barbaras2->tiempo}}</td>
                <td>{{ $barbaras2->peso}}</td>
                <td>{{ $barbaras2->fecha}}</td>
                @endforeach
            </tr>
            <tr>
                @foreach($cindy2 as $cindys2)
                <th>Cindy</th>
                <td>{{ $cindys2->tiempo}}</td>
                <td>{{ $cindys2->peso}}</td>
                <td>{{ $cindys2->fecha}}</td>
                @endforeach
            </tr>
            <tr>
                @foreach($helen2 as $helens2)
                <th>Helen</th>
                <td>{{ $helens2->tiempo}}</td>
                <td>{{ $helens2->peso}}</td>
                <td>{{ $helens2->fecha}}</td>
                @endforeach
            </tr>
        </table>

</div>

</div>
    </div>
