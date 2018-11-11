<!-- Modal Entrar -->
<div class="modal fade" id="entrarModal" tabindex="-1" role="dialog" aria-labelledby="entrarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="entrarModalLabel" style="text-align: center;"><i class="fa fa-desktop" aria-hidden="true"></i> Acessar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="margin-top: -40px">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <form action="" method="post" role="form" class="lead">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-md ipt-custom" data-rule="email" data-msg="Informe um e-mail valido" placeholder="Login">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-user form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="password" name="senha" id="senha" class="form-control input-md ipt-custom" data-rule="required" data-msg="A senha é obrigatória" placeholder="Senha">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-lock form-control-feedback ipt-icon"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <a class="lnkEsqueceu" data-toggle="modal" data-target="#recuparModal" href="#">Esqueceu sua senha?</a>
                </div>
              </div>
            </div>
      
            <button type="submit" class="btn btn-skin btn-block btn-lg"><span class="fa fa-sign-in"></span> Entrar</button>

          </form>
        </div>
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group direction-center">
              <span class="fa fa-user fa-1x"></span> Novo usuário? <a class="lnkCadastre" data-toggle="modal" data-target="#addUserModal" href="#">Cadastre-se</a>
            </div>
            <div class="form-group direction-center">
              <span class="fa fa-university fa-1x"></span> Nova farmácia? <a class="lnkCadastre" data-toggle="modal" data-target="#addFornecedorModal" href="#">Cadastre-se</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>