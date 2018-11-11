<!-- Modal Add Fornecedor -->
<div class="modal fade" id="addFornecedorModal" tabindex="-1" role="dialog" aria-labelledby="addFornecedorModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addFornecedorModalLabel" style="text-align: center;"><i class="fa fa-pencil" aria-hidden="true"></i> Cadastro Fornecedor</h5>
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
                  <input type="text" name="cnpj" id="cnpj" class="form-control input-md ipt-custom" data-rule="cnpj" data-msg="Informe o CNPJ" placeholder="Informe o CNPJ">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-credit-card form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="razaosocial" id="razaosocial" class="form-control input-md ipt-custom" data-rule="required" data-msg="Informe a Razão Social" placeholder="Informe a Razão Social">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-credit-card form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="nomefant" id="nomefant" class="form-control input-md ipt-custom" data-rule="nomefant" data-msg="Informe o nome fantasia" placeholder="Informe o Nome Fantasia">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-star form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="cep" id="cep" class="form-control input-md ipt-custom" data-rule="required" data-msg="O CEP é obrigatório" placeholder="Insira o CEP">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="enderecoforn" id="enderecoforn" class="form-control input-md ipt-custom" data-rule="endereco" data-msg="Informe o endereço" placeholder="Insira o Endereço">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-home form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="numero" id="numero" class="form-control input-md ipt-custom" data-rule="required" data-msg="Informe o número" placeholder="Insira o Número">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-flag form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="complemento" id="complemento" class="form-control input-md ipt-custom" placeholder="Informe o completo">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-tags form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="bairro" id="bairro" class="form-control input-md ipt-custom" placeholder="Informe o Bairro">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-map-marker form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="cidade" id="cidade" class="form-control input-md ipt-custom" placeholder="Informe a Cidade">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-map-marker form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="estado" id="estado" class="form-control input-md ipt-custom" placeholder="Informe o estado">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-map-marker form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="nomecontato" id="nomecontato" class="form-control input-md ipt-custom" placeholder="Informe o Nome">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-user form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="emailcontato" id="emailcontato" class="form-control input-md ipt-custom" placeholder="Informe o E-mail">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="fonecontato" id="fonecontato" class="form-control input-md ipt-custom" placeholder="Informe o Telefone">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-phone-alt form-control-feedback ipt-icon"></span>
              </div>
            </div>    
            <button type="submit" class="btn btn-skin btn-block btn-lg"><span class="fa fa-sign-in"></span> Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>