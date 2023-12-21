@if ( session('updateClave') )
<div class="alert alert-success" role="alert">
  <strong>Se ha actualizado la contraseña </strong>
</div>
@endif


@if ( session('name') )
<div class="alert alert-success" role="alert">
  <strong>El nombre se ha actualizado </strong>
</div>
@endif


@if ( session('claveIncorrecta') )
  <div class="alert alert-danger" role="alert">
    <strong>Las contraseñas no coinciden</strong>
  </div>
@endif


@if ( session('clavemenor') )
<div class="alert alert-warning" role="alert">
  <strong>Lo siento !</strong>
    {{ session('clavemenor') }}
</div>
@endif