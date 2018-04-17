var counter = 1;
var limit = 3;
function addInput(attendants_array){
     if (counter == limit)  {
          var mensaje = "El límite es de" + limit + " fotos por platillo";
          swal(mensaje);
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.classList.add('fileinput fileinput-new text-center');
          newdiv.innerHTML = "<div class='fileinput fileinput-new text-center' data-provides='fileinput'><div class='fileinput-new thumbnail'><img src='{{url('img/image_placeholder.jpg') }}' alt='...'></div><div class='fileinput-preview fileinput-exists thumbnail' style=''></div><div><span class='btn btn-rose btn-round btn-file'><span class='fileinput-new'>Seleccionar...</span><span class='fileinput-exists'>Cambiar</span><input type='hidden'><input type='file' name='dishphoto["+counter+"]'></span><a href='#!' class='btn btn-danger btn-round fileinput-exists' data-dismiss='fileinput'><i class='fa fa-times'></i> Remover</a></div></div>";
          document.getElementById('dish_photos_container').appendChild(newdiv);
          counter++;
     }
}
