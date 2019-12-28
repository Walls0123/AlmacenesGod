
@section('content')
 <div class="container">
     <h1>Amenidades disponibles </h1>
     <table class="table ">
@foreach ($amenidades as $amenidad)
<tr>{{$amenidad->nombre}}</tr>

@endforeach

</table>
 </div>
