@yield('master')

@section('pestaña')
<title>Editar Alumnos</title>
@endsection

@section('titulo')
<h1>Editar Alumnos</h1>
@stop

@section('contenido')
<form action="{{url('/actualizarAlumno')}}/{{$alumno->id}}"method="POST">
</form>
@stop