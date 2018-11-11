<!-- Modal Adesão -->
<div class="modal fade" id="adesaoModal" tabindex="-1" role="dialog" aria-labelledby="adesaoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adesaoModalLabel" style="text-align: center;"><i class="fa fa-file-text-o" aria-hidden="true"></i> Proposta de Adesão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="margin-top: -40px">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
          <form action="" method="post" role="form" class="lead">
            <div class="row">
              <h6>Proponente Titular</h6>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="nome" id="nome" class="form-control input-md ipt-custom" data-rule="nome" data-msg="Informe o nome completo" placeholder="Nome Completo">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-user form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                  <input type="text" name="rg" id="rg" class="form-control input-md ipt-custom" data-rule="required" data-msg="Informe o RG" placeholder="RG">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-credit-card form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group">
                  <input type="text" name="orgaoemissor" id="orgaoemissor" class="form-control input-md ipt-custom" data-rule="orgaoemissor" data-msg="Informe o Orgão Emissor" placeholder="Orgão Emissor">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-calendar form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="nomemae" id="nomemae" class="form-control input-md ipt-custom" data-rule="required" data-msg="O nome da mãe é necessário" placeholder="Nome da Mãe sem abreviaturas">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="sexo" id="sexo" class="form-control input-md ipt-custom" data-rule="required" data-msg="O sexo é necessário" placeholder="Sexo">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="estadocivil" id="estadocivil" class="form-control input-md ipt-custom" data-rule="required" data-msg="O Estado Civil é necessário" placeholder="Estado Civil">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="cpf" id="cpf" class="form-control input-md ipt-custom" data-rule="required" data-msg="O CPF é necessário" placeholder="CPF">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="pispasesp" id="pispasesp" class="form-control input-md ipt-custom" data-rule="required" data-msg="O PIS/PASESP é necessário" placeholder="PIS/PASESP">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="dtnasc" id="dtnasc" class="form-control input-md ipt-custom" data-rule="required" data-msg="A data de nascimento é necessária" placeholder="Data Nascimento">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="cartaonacionalsaude" id="cartaonacionalsaude" class="form-control input-md ipt-custom" data-rule="required" data-msg="O cartão nacional de saúde é obrigatório" placeholder="Cartão Nacional de Saúde">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="cep_" id="cep_" class="form-control input-md ipt-custom" data-rule="required" data-msg="O CEP é necessário" placeholder="CEP">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="endereco" id="endereco" class="form-control input-md ipt-custom" data-rule="required" data-msg="O endereço é necessário" placeholder="Endereço Residencial">
                  <div class="validation"></div>
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
              </div>
              
            </div>
                    
            <button type="submit" class="btn btn-skin btn-block btn-lg"><span class="fa fa-sign-in"></span> Salvar</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>