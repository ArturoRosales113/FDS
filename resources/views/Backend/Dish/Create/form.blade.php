<div class="col-md-12">

   {!! Form::open(['route' => ['dishes.store'], 'method' => 'POST', 'class' => 'form-horizontal row justify-content-center','files' => 'true']) !!}
   <div class="col-md-6">
    <div class="card">
    <div class="card-header">
     <h5 class="card-title">Detalles del Platillo</h5>
    </div>
    <div class="card-body">
     <div class="row justify-content-center ">
      <div class="col-lg-10">
       <div class="form-group my-3">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',old('name'),array('class' => 'form-control')) !!}
       </div>
       <div class="form-group my-3">
        {!! Form::label('description','Descripción') !!}
        {!! Form::textarea('description' , old('description'),array('class' => 'form-control')) !!}
       </div>
      </div>
      </div>

      <div class="row justify-content-center">
       <div class="col-sm-10">
        <div class="btn-group bootstrap-select form-group my-3">
         <label for="">Selecciona una categoría</label>
         <select class="selectpicker" name="category_id" data-size="7" data-style="btn btn-info" title="Single Select" tabindex="-98">
           <option class="bs-title-option" selected="" value="Default">Categorías</option>
           @foreach ($categories as $cat)
            <option value="{{ $cat -> id }}">{{ $cat -> name}}</option>
           @endforeach
         </select>
        </div>
       </div>
      </div>

      <div class="row justify-content-center">
       <div class="col-sm-12 col-lg-5">
        <div class="form-group my-3">
         {!!Form::label('price','Precio')!!}
         {!! Form::text('price',old('price'),array('class' => 'form-control', 'placeholder' => '$00.00')) !!}
        </div>
       </div>
       <div class="col-sm-12 col-lg-5">
        <div class="form-group my-3">
         {!!Form::label('available','Disponible')!!}
         {!! Form::text('available',old('price'),array('class' => 'form-control')) !!}
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
     </div>
     <div class="col-md-4">
      <div class="card">
       <div class="card-header">
        <h5 class="card-title">Fotos del Platillo</h5>
       </div>
       <div class="card-body">
        <div class="row justify-content-center">
         <div class="col-md-6" id="dish_photos_container">
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail">
                  <img src="{{ url('img/image_placeholder.jpg') }}" alt="...">
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
              <div>
               <span class="btn btn-rose btn-round btn-file">
                                 <span class="fileinput-new">Seleccionar...</span>
                                 <span class="fileinput-exists">Cambiar</span>
                                 <input type="hidden"><input type="file" name="dishphoto[0]">
                             </span>
                  <a href="#!" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
              </div>
          </div>
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail">
                  <img src="{{ url('img/image_placeholder.jpg') }}" alt="...">
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
              <div>
               <span class="btn btn-rose btn-round btn-file">
                                 <span class="fileinput-new">Seleccionar...</span>
                                 <span class="fileinput-exists">Cambiar</span>
                                 <input type="hidden"><input type="file" name="dishphoto[1]">
                             </span>
                  <a href="#!" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
              </div>
          </div>
          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
              <div class="fileinput-new thumbnail">
                  <img src="{{ url('img/image_placeholder.jpg') }}" alt="...">
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
              <div>
               <span class="btn btn-rose btn-round btn-file">
                                 <span class="fileinput-new">Seleccionar...</span>
                                 <span class="fileinput-exists">Cambiar</span>
                                 <input type="hidden"><input type="file" name="dishphoto[2]">
                             </span>
                  <a href="#!" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
              </div>
          </div>
         </div>
        </div>
       </div>
       <div class="card-footer">
        <div class="row">

        </div>
       </div>
      </div>
     </div>
   {!! Form::close() !!}
</div>
