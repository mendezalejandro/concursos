<div class="modal-body">
            <section class="content-header">
                <h1>
                    Sustanciar concurso
                </h1>
           </section>
           <div class="content">
               @include('adminlte-templates::common.errors')
               <div class="box box-primary">
                   <div class="box-body">
                       <div class="row">
                                @include('concursos.sustanciar_fields')
                       </div>
                   </div>
               </div>
           </div>
        </div>

 <div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   <button id="confirmarSustanciacion" type="button" class="btn btn-success" data-slug="">Confirmar</button>
 </div>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <script>
    var encodedFile="";

    $("#dictamenFile").on('change', function() {
        var reader = new FileReader();
        var encodedFile;
        reader.readAsDataURL(document.getElementById("dictamenFile").files[0]);
        reader.onload = function () {
            localStorage.setItem("base64file", reader.result);
        };
        reader.onerror = function (error) {
          console.log('Error: ', error);
        };
    });

    $('#confirmarSustanciacion').on('click', function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        alert(localStorage.getItem("base64file"))
        $.ajax({
                    /* the route pointing to the post function */
                    url: '/sustanciar/'+{!!$concurso->id!!},
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, file: localStorage.getItem("base64file")},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $('#myModal').hide();
                    },
                    error: function (data) { 
                        alert("error");
                    }
                }); 
    });

    </script>

