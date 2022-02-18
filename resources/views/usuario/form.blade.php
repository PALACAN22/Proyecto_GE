<h1>{{ $modo }} Usuario</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
<label for="PrimerNombre">Primer Nombre</label>
<input type="text" class="form-control" name="PrimerNombre" value="{{ isset($usuario->PrimerNombre)?$usuario->PrimerNombre:old('PrimerNombre') }}" id="PrimerNombre">
</div>

<div class="form-group">
<label for="SegundoNombre">Segundo Nombre</label>
<input type="text" class="form-control" name="SegundoNombre" value="{{ isset($usuario->SegundoNombre)?$usuario->SegundoNombre:old('SegundoNombre') }}" id="SegundoNombre">
</div>

<div class="form-group">
<label for="PrimerApellido">Primer Apellido</label>
<input type="text" class="form-control" name="PrimerApellido" value="{{ isset($usuario->PrimerApellido)?$usuario->PrimerApellido:old('PrimerApellido') }}" id="PrimerApellido">
</div>

<div class="form-group">
<label for="SegundoApellido">Segundo Apellido</label>
<input type="text" class="form-control" name="SegundoApellido" value="{{ isset($usuario->SegundoApellido)?$usuario->SegundoApellido:old('SegundoApellido') }}" id="SegundoApellido">
</div>

<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{ isset($usuario->Correo)?$usuario->Correo:old('Correo') }}" id="Correo">
</div>

<div class="form-group">
<label for="Foto"></label>
@if(isset($usuario->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$usuario->Foto }}" width="100" alt="">
@endif
<input class="form-control" type="file" name="Foto" value="" id="Foto">
</div>
<br/>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{ url('usuario') }}">Regresar</a>
