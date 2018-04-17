<div class="col-md-12">
 <div class="card">
  {!! Form::open(['route' => ['dishes.store'], 'method' => 'POST', 'class' => 'form-horizontal','files' => 'true']) !!}
   <div class="card-header">
    <h5 class="card-title">Detalles del Platillo</h5>
   </div>
   <div class="card-body">
    <div class="row">
     <div class="col-md-6">
      <div class="form-group">
       {!! Form::label('name','Nombre') !!}
       {!! Form::text('name',old('name'),array('class' => 'form-control')) !!}
      </div>
     </div>
     <div class="col-md-3">
      <div class="btn-group bootstrap-select form-group">
       <label for="">Selecciona una categoría</label>
       <select class="selectpicker" name"category_id" data-size="7" data-style="btn btn-info" title="Single Select" tabindex="-98">
         <option class="bs-title-option" selected="" value="null">Categorías</option>
         @foreach ($categories as $cat)
          <option value="{{ $cat -> id }}">{{ $cat -> name}}</option>
         @endforeach
       </select>
      </div>
     </div>     
      <div class="col-md-3">
         <button type="submit" class="btn btn-primary">Submit</button>
      </div>
     </div>
    </div>
   </div>  
  {!! Form::close() !!}
 </div>
</div>
