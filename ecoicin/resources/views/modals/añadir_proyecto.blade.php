<!--/Login-->
<div class="modal fade" id="añadir_proyecto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Añadir proyecto</h5>
                    <form action="{{route('repositorio')}}" method="get">
                      <fieldset class="form-group">
                        <label class="mb-2">Nombre proyecto: </label>
                        <input name="nombre_proyecto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">Año: </label>
                        <input name="fecha_creacion" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label class="mb-2">Autores: </label>
                        <input name="autores" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="tipo_proyecto"><b>Area Informatica</b></label>
                          <select class="form-control" id="tipo_proyecto">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="exampleFormControlFile1">Documento N°1</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </fieldset>

                      <fieldset class="form-group">
                        <label for="exampleFormControlFile1">Documento N°2</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile2">
                      </fieldset>

                      <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Completar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
