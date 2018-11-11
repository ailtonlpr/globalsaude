<!-- Modal Add User -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModalLabel" style="text-align: center;"><i class="fa fa-pencil" aria-hidden="true"></i> Cadastro Usuário</h5>
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
                  <input type="text" name="nomeuser" id="nomeuser" class="form-control input-md ipt-custom" data-rule="nomeuser" data-msg="Informe o nome do usuário" placeholder="Insira o Nome">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-user form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="cpf_" id="cpf_" class="form-control input-md ipt-custom" data-rule="required" data-msg="Informe o CPF" placeholder="Insira o CPF">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-credit-card form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="datanasc" id="datanasc" class="form-control input-md ipt-custom" data-rule="datanasc" data-msg="Informe a data de nascimento" placeholder="Insira a Data Nascimento">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-calendar form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A senha é obrigatória" placeholder="Insira o E-mail">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="fone" id="fone" class="form-control input-md ipt-custom" data-rule="fone" data-msg="Informe o telefone valido" placeholder="Insira o Telefone">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-phone-alt form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="password" name="senhaadd" id="senhaadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A senha é obrigatória" placeholder="Insira a Senha">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-lock form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="password" name="rsenhaadd" id="rsenhaadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A senha é obrigatória" placeholder="Repita a Senha">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-lock form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-check">
                  <input type="checkbox" name="options1" id="options1" value='1' class="">
                  <span class="txtDescItens">Concordo com os termos de uso e privacidade</span>
                  <br>
                  <input type="checkbox" name="options3" id="options3" value='3' class="">
                  <span class="txtDescItens">Quero receber novidades, notícias do Caixa Odonto Nacional</span>
                  <br><br>
                </div>
              </div>
            </div>
                    
            <button type="submit" class="btn btn-skin btn-block btn-lg"><span class="fa fa-sign-in"></span> Entrar</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>A