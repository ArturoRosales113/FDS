<div class="col-md-12">
 <div class="card">
  {!! Form::open(['route' => ['dishes.store'], 'method' => 'POST', 'class' => 'form-horizontal','files' => 'true']) !!}
   <div class="card-header">
    <h5 class="card-title">Detalles del Platillo</h5>
   </div>
   <div class="card-body">
    <div class="row justify-content-center">
     <div class="col-lg-5">
      <div class="form-group my-3">
       {!! Form::label('name','Nombre') !!}
       {!! Form::text('name',old('name'),array('class' => 'form-control')) !!}
      </div>
      <div class="form-group my-3">
       {!! Form::label('description','Descripción') !!}
       {!! Form::textarea('description' , old('description'),array('class' => 'form-control')) !!}
      </div>
     </div>
     <div class="col-lg-5">
      <div class="row">
       <div class="col-sm-12">
        <div class="btn-group bootstrap-select form-group my-3">
         <label for="">Selecciona una categoría</label>
         <select class="selectpicker" name"category_id" data-size="7" data-style="btn btn-info" title="Single Select" tabindex="-98">
           <option class="bs-title-option" selected="" value="null">Categorías</option>
           @foreach ($categories as $cat)
            <option value="{{ $cat -> id }}">{{ $cat -> name}}</option>
           @endforeach
         </select>
        </div>
       </div>
      </div>
      <div class="row">
       <div class="col-sm-12 col-lg-6">
        <div class="form-group my-3">
         {!!Form::label('price','Precio')!!}
         {!! Form::text('price',old('price'),array('class' => 'form-control', 'placeholder' => '$00.00')) !!}
        </div>
       </div>
       <div class="col-sm-12 col-lg-6">
        <div class="form-group my-3">
         {!!Form::label('available','Disponible')!!}
         {!! Form::text('available',old('price'),array('class' => 'form-control')) !!}
        </div>
       </div>
      </div>
     </div>

     </div>
    </div>
    <div class="card-footer">
     <div class="row justify-content-center">
      <div class="col-md-">
        {!! Form::submit('Enviar',array('class' => 'btn btn-primary btn-fill')) !!}
      </div>
     </div>
    </div>
   </div>
  {!! Form::close() !!}
 </div>
