<!-- Modal Recuperar Senha -->
<div class="modal fade" id="recuparModal" tabindex="-1" role="dialog" aria-labelledby="recuperarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recuperarModalLabel" style="text-align: center;"><i class="fa fa-unlock" aria-hidden="true"></i> Recuperar Acesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="margin-top: -40px">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <form action="" method="post" role="form" class="lead">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="titEsqueceu">Para recuperar a senha, digite seu email</p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="email" name="emailrecuperar" id="emailrecuperar" class="form-control input-md ipt-custom" data-rule="emailrecuperar" data-msg="Informe um e-mail valido" placeholder="E-mail">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope  form-control-feedback ipt-icon"></span>
              </div>
            </div>
      
            <button type="submit" class="btn btn-skin btn-block btn-lg"><span class="fa fa-paper-plane"></span> Enviar</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>