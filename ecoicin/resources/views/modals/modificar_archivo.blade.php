<!--/Login-->
<div class="modal fade" id="modificar_archivo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Modificar ...</h5>
                    <form enctype="multipart/form-data" action="{{route('repositorio.update')}}" method="post">
                      {{ csrf_field() }}

                      <fieldset class="form-group">
                        <label for="exampleFormControlFile1">Informe</label>
                        <input type="file" name="informe_proyecto" class="form-control-file" required>
                      </fieldset>

                      <button type="submit" class="btn btn-primary submit mb-4 mx-auto d-block">Modificar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
