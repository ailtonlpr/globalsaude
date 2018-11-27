<?= $this->Html->css('https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css',['id'=>'bootstrap-css']) ?>
<?= $this->Html->css('stylepagto.css') ?>
<?= $this->Html->script('script.js') ?>
<?= $this->Html->script('jquery.priceformat.min.js') ?>
<script type="text/javascript">
    var priceTot = '492.96';
    var arrResumoFatura = [];
    var arrResumoFatura2 = [];
    var totDep = 0;
</script>

<div class="container">

    <div class="titAcima alert alert-success">
        <ul style="list-style:none">
            <li style="display: inline-table;width: 37%;"><?= $this->Html->image('logo_simpec_sp.png',['height'=>40]) ?> <span>Global Saúde Consultoria</span></li>
            <li style="display: inline-table;"><h3>Proposta de Adesão</h3></li>
        </ul>
    </div>
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            </div>
        </div>
    </div>
    <!-- <form role="form"> -->
        <div class="row setup-content" id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>Dados Pessoais</h3>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-9">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Nome Completo:</label>
                                <div class='input-group'>
                                  <?= $this->Form->hidden('_csrfToken',['value'=>$_csrfToken]) ?>
                                  <?= $this->Form->text('S_ADESAO_S_NOME',['class'=>'form-control nome','maxlength'=>'50','placeholder'=>'Nome Completo','id'=>'d_nome','required'=>'required']); ?>
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Data de Nascimento:</label>
                                <div class='input-group date'>
                                  <?= $this->Form->text('S_ADESAO_D_DATANASCIMENTO',['class'=>'form-control dateNasc','maxlength'=>'8','id'=>'d_datanasc','required'=>'required','placeholder'=>'__/__/____']); ?>
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Sexo:</label>
                                <select required='required' name='S_ADESAO_S_SEXO' class="sel sexo" id="d_sexo">
                                  <option value=""></option>
                                    <option value="1">Feminino</option>
                                    <option value="2">Masculino</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">CPF:</label>
                                <div class='input-group'>
                                  <?= $this->Form->text('S_ADESAO_I_CPF',['class'=>'form-control cpf','maxlength'=>'50','placeholder'=>'Informe o CPF','id'=>'d_cpf','required'=>'required']); ?>
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-credit-card"></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">RG:</label>
                                <div class='input-group'>
                                  <input name="S_ADESAO_S_RG" type='text' maxlength="12" class="form-control rg" id="d_rg" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-credit-card"></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Orgão Emissor:</label>
                                <div class='input-group'>
                                  <input name="S_ADESAO_S_ORGAO_EMISSOR" type='text' maxlength="6" class="form-control org"  id="d_orgao" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-star"></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">PIS/PASEP:</label>
                                <div class='input-group'>
                                  <input name="S_ADESAO_I_PIS_PASESP" type='text' class="form-control pis" id="d_pispasep" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-credit-card"></span>
                                  </span>
                                </div>
                              </div>  
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Cartão Nacional de Saúde:</label>
                                <div class='input-group'>
                                  <input name="S_ADESAO_I_CNS" type='text' class="form-control sus" id="d_sus" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-credit-card"></span>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Estado Civil:</label>
                                <select required='required' name='S_ADESAO_S_ESTADOCIVIL' class="sel2 estadocivil" id="d_estadocivil">
                                  <option value="">&nbsp;</option>
                                  <option value="1">Casado(a)</option>
                                  <option value="2">Divorciado(a)</option>
                                  <option value="3">Separado(a)</option>
                                  <option value="4">Solteiro(a)</option> 
                                  <option value="5">Viúvo(a)</option>  
                                </select>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Nome da Mãe sem abreviaturas:</label>
                                <div class='input-group'>
                                  <input required="required" name='S_ADESAO_S_NOME_MAE' type='text' maxlength="50" class="form-control nomemae" id="d_nomemae" />
                                  <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                  </span>
                                </div>
                              </div>  
                            </div>
                        </div>
                    </div>
                    <button id="btnDP" class="btn btn-primary nextBtn pull-right" type="button" >Avançar</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>Contatos</h3>
                    <div class="modal-body">
                        <div class='row'>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">CEP:</label>
                                    <input type="text" name='S_ADESAO_I_CEP' class="form-control cep" required="required" />
                                 </div>
                            </div>
                            <div class='col-md-8'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Endereço Residencial:</label>
                                    <div class='input-group'>
                                        <input id='rua' type="text" name='S_ADESAO_S_ENDERECO' class="form-control" required="required" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                        </span>
                                    </div>
                              </div>
                            </div>
                            <div class='col-md-2'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Número:</label>
                                    <input id='numero' type="text" name="S_ADESAO_I_NUMERO" maxlength="10" class="form-control" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Complemento:</label>
                                    <input id='completo' name="S_ADESAO_S_COMPLEMENTO" maxlength="20" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class='col-md-4'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Bairro:</label>
                                    <input id='bairro' name="S_ADESAO_S_BAIRRO" type="text" class="form-control" required="required" />
                                </div>
                            </div>
                            <div class='col-md-5'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Cidade:</label>
                                    <input id='cidade' name="S_ADESAO_S_CIDADE" type="text" class="form-control" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-2'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">UF:</label>
                                    <div class='input-group'>
                                        <input id='uf' type="text" name="S_ADESAO_S_UF" class="form-control" required="required" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-star"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-4'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Telefone Celular:</label>
                                    <div class='input-group'> 
                                        <input type="text" name="S_ADESAO_I_TELEFONECELULAR" class="form-control telcel" required="required" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-phone"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Telefone Residencial:</label>
                                    <div class='input-group'>
                                        <input type="text" name="S_ADESAO_I_TELEFONEFIXO" class="form-control telfixo" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-phone-alt"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Telefone Comercial:</label>
                                    <div class='input-group'>
                                        <input type="text" name="S_ADESAO_I_TELEFONECOMERCIAL" class="form-control telcom" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-phone-alt"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Email:</label>
                                    <div class='input-group'>
                                        <input id='email' name="S_ADESAO_S_EMAIL" type="text" class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="botoes">
                        <button class="btn btn-primary nextBtn pull-right" type="button" >Avançar</button>
                        <button style="margin-right: 10px" class="btn btn-primary previousBtn pull-right" type="button" >Anterior</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12" id='basedep'>
                    <h3>Dependentes</h3>
                    <div class="lineDiv">&nbsp;</div>
                    <div>
                        <h4>Deseja incluir dependente?</h4>
                        <br />
                        <input type="radio" name="add_dpd" value="S"> SIM &nbsp;&nbsp; <input type="radio" name="add_dpd" value="N" checked> NÃO 
                    </div>
                    
                    <div class="modal-body dpd">
                        <button class="btn btn-info btn-sm btnAdd" title="Adicionar Dependente"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                        <button class="btn btn-danger btn-sm btnDel" title="Remover Dependente"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <div class="row linediv"><div class="col-md-12"><hr></div></div>
                        <div class='row'>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nome Completo:</label>
                                    <div class='input-group'>
                                        <input id='el_nm_1' type='text' name="nomed[]" maxlength="50" class="form-control nomed" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Data de Nascimento:</label>
                                    <div class='input-group date'>
                                        <input id='el_dtnasc_1' type="text" name="datanascd[]" class="form-control dateNascd" placeholder="__/__/____"  />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Sexo:</label>
                                    <select id='el_sx_1' name="sexod[]" class="sel sexod">
                                        <option value=""></option>
                                        <option value="1">Feminino</option>
                                        <option value="2">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Estado Civil:</label>
                                    <select id='el_estcivil_1' name="estadocivild[]" class="sel2 estadocivild">
                                        <option value=""></option>
                                        <option value="1">Casado</option>
                                        <option value="2">Divorciado</option>
                                        <option value="3">Separado</option>
                                        <option value="4">Solteiro</option> 
                                        <option value="5">Viúvo</option>  
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Grau Parentesco</label>
                                    <select id='el_gpcod_1' name="grauparentescod[]" class="sel2 grauparentescod">
                                        <option value=""></option>
                                        <option value="1">Cônjuge</option>
                                        <option value="2">Companheiro</option>
                                        <option value="3">Filho</option>  
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">CPF:</label>
                                    <div class='input-group'>
                                        <input id='el_cpf_1' type='text' name="cpfd[]" class="form-control cpfd" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-credit-card"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Cartão Nacional de Saúde:</label>
                                    <input id='el_crtnacsd_1' type="text" name="cartaonaciosauded[]" class="form-control susd" />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Número da Declaração de Nascido Vivo:</label>
                                    <input id='el_numdeclnascvivo_1' type="text" name="numdeclnascvivod[]" class="form-control numdnvd" />
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Nome da Mãe sem Abreviaturas:</label>
                                    <input id='el_nomemae_1' type="text" name="nomemaed[]" class="form-control nomemaed" />
                                </div>  
                            </div>
                        </div>  
                    </div>
                    <div class="botoes">
                        <button id="btnDPF" class="btn btn-primary nextBtn pull-right" type="button" >Avançar</button>
                        <button style="margin-right: 10px" class="btn btn-primary previousBtn pull-right" type="button" >Anterior</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>Resumo Fatura</h3>
                    <div class="modal-body">
                        <div class='row'>
                            <div class="col-md-8">
                                <div class='table-responsive'>
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Proponente</th>
                                                <th scope="col">Idade</th>
                                                <th scope="col">Valor em R$</th>
                                            </tr>
                                        </thead>
                                        <tbody class="corpo">                                        
                                        </tbody>
                                        <tfoot></tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p style='text-align:justify'><strong>ATENÇÃO:</strong> Os valores indicados ao lado sofrerão alteração caso haja reajuste anual do contrato coletivo entre a data de assinatura desta proposta de adesão e a data de sua 1 (primeira) cobrança, observando o disposto do item <strong>16</strong> da página <strong>04</strong> desta proposta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="botoes">
                        <button id="btnIrPagto" class="btn btn-primary nextBtn pull-right" type="button" >Avançar</button>
                        <button style="margin-right: 10px" class="btn btn-primary previousBtn pull-right" type="button" >Anterior</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-5">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3>Forma de Pagamento</h3>
                    <div class="modal-body">
                        <div class="row">
                            <div>
                                <h4>Leia o contrato.</h4>
                                <?= $this->Html->link('<i class="fa fa-file-text-o" aria-hidden="true"></i> Contrato',
                                'http://globalsaude.gted.com.br/Contrato.PDF',
                                ['class'=>'btn btn-skin btn-lg','escape' => false, 'target' => '_blank']); ?>
                                <br /><br />
                                <h4>Aceita o contrato?</h4>
                                <input type="radio" name="aceite" value="S"> SIM &nbsp;&nbsp; <input type="radio" name="aceite" value="N"> NÃO 
                            </div>
                        </div>
                        <div class='row btnPagto'>
                            <div class="col-md-12">
                                <div class='table-responsive'>
                                                        
                                    <!-- Declaração do formulário -->  
                                    <form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html?transaction_id=E339E025DFDF4E3BB4E40F8AC989118C">  
                                            <!-- Campos obrigatórios -->  
                                            <input name="receiverEmail" type="hidden" value="apispe@gmail.com">  
                                            <input name="currency" type="hidden" value="BRL">  
                                            <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
                                            <input name="itemId1" type="hidden" value="0001">  
                                            <input name="itemDescription1" type="hidden" value="PLANO SIGMA">  
                                            <input name="itemAmount1" type="hidden" value="492.96">  
                                            <input name="itemQuantity1" type="hidden" value="5">  
                                            <!-- Código de referência do pagamento no seu sistema (opcional) -->  
                                            <input name="reference" type="hidden" value="REF1234">  
                                            <!-- Informações de frete (opcionais) -->  
                                            <input name="shippingType" type="hidden" value="1">  
                                            <input name="shippingAddressPostalCode" type="hidden" value="06824060">  
                                            <input name="shippingAddressStreet" type="hidden" value="Rua Iguape">  
                                            <input name="shippingAddressNumber" type="hidden" value="140">  
                                            <input name="shippingAddressComplement" type="hidden" value="Casa 1">  
                                            <input name="shippingAddressDistrict" type="hidden" value="Jardim Dom Jose">  
                                            <input name="shippingAddressCity" type="hidden" value="Sao Paulo">  
                                            <input name="shippingAddressState" type="hidden" value="SP">  
                                            <input name="shippingAddressCountry" type="hidden" value="BRA">  
                                            <!-- submit do form (obrigatório) -->  
                                            <input alt="Pague com PagSeguro" name="submit"  type="image"  
                                    src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-pagar.gif"/>  
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="botoes">
                        <!-- <button class="btn btn-success pull-right" type="submit">Concluir</button> -->
                        <button style="margin-right: 10px" class="btn btn-primary previousBtn pull-right" type="button" >Anterior</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- </form> -->
</div>
<script type="text/javascript">
    function calendario(idt){
        $(idt).datetimepicker({
        format: 'DD/MM/YYYY',
        locale: 'pt-br',
        viewMode: 'years'
        });
    }
    function mascara(idt,mask,opc){           
        $(idt).mask(mask, {reverse: opc});
    }
    function listagem(idt){
        $(idt).select2({
            placeholder: "Selecione",
            allowClear: true,
            width:"100%"
        });
    }

    function limpa(){
        var tot = $("#matriz").find('.dpd:last').find('input').length;
        for(i=0;tot>i;i++){
            $("#matriz").find('.dpd:last').find('input')[i].value = '';
        }
    }

    function limparElementoClonado(obj){
        if(typeof obj == 'undefined' || obj == '')
            return false;

        // Removendo mascara se existir
        // obj.find('input').inputmask('remove');
      
        // Removendo estilização se existir
        obj.find('select').select2('destroy');
        obj.find('option[selected="selected"]').removeAttr('selected');

        return obj;
    }

    function idade(nascimento, hoje) {
        // var diferencaAnos = hoje.getFullYear() - nascimento.getFullYear();
        var diferencaAnos = hoje.getFullYear() - nascimento.substr(6, 4);
        if ( new Date(hoje.getFullYear(), hoje.getMonth(), hoje.getDate()) < 
             new Date(hoje.getFullYear(), nascimento.substr(3, 2), nascimento.substr(0, 2)) )
            diferencaAnos--;
        return diferencaAnos;
    }

    $(document).on("ready", function(){

        $('#btnDP').click(function(){
            arrResumoFatura = [];
            arrResumoFatura.push($("#d_nome").val());
            arrResumoFatura.push(idade($("#d_datanasc").val(),new Date()));
            console.log(arrResumoFatura);
        });


        $('#btnDPF').click(function(){
            arrResumoFatura2 = [];

            $("#step-4 table tbody.corpo").map(function(){
                $(this).find('tr').remove();
            });

            $('#step-4 table tfoot').map(function(){
                $(this).find('tr').remove();
            });

            $("#basedep .modal-body").map(function(){
                arrResumoFatura2.push(
                    new Array(
                        $(this).find('input[name="nomed[]"]').val(),
                        $(this).find('input[name="datanascd[]"]').val(),
                        idade($(this).find('input[name="datanascd[]"]').val(),new Date())
                    )
                );
            });
            console.log(arrResumoFatura2);

            var tg = '';
            tg  = '<tr>';
            tg += '<td>'+arrResumoFatura[0].toUpperCase()+'</td>';
            tg += '<td>'+arrResumoFatura[1],new Date()+'</td>';
            tg += '<td> R$ '+priceTot+'</td>';
            tg += '</tr>';
            $('#step-4 table tbody.corpo').append(tg);

            totDep = arrResumoFatura2.length;

            console.log(totDep);
            
            var obj = $('input[name="add_dpd"]')[1];
            if($(obj).is(':checked')){
                totDep -= 1;
            }
            
            for(i=0;i<totDep; i++)
            {
                var tag = '';
                tag  = '<tr>';
                tag += '<td>'+arrResumoFatura2[i][0].toUpperCase()+'</td>';
                tag += '<td>'+idade(arrResumoFatura2[i][1],new Date())+'</td>';
                tag += '<td class="preco">'+priceTot+'</td>';
                tag += '</tr>';
                $('#step-4 table tbody.corpo tr:last').after(tag);
            }

            tagf  = '';
            tagf += '<tr>';
            tagf += '<th colspan="2" scope="row" style="text-align:right">Total</th>';
            tagf += '<td id="totF"></td>';
            tagf += '</tr>';

            $('#step-4 table tfoot').append(tagf);

            var vlcalc = '';
            vlcalc = ( priceTot * (totDep+1) );

            $('#totF').html('').append( vlcalc.toFixed(2) );

            $('.preco, #totF').priceFormat({
                prefix: 'R$ ',
                centsSeparator: ',',
                thousandsSeparator: '.'
            });
        });

        $('#btnIrPagto').click(function(){
            $('input[name="aceite"]').prop('checked', false);
        });
        
        // console.log(arrResumoFatura);
        // console.log(arrResumoFatura2);

        $('.btnAdd').click(function(){

            // Removendo estilização se existir
            obj = $('.dpd');
            
            d_ant_0 = $(obj).find('.date input:first').attr('id');
            s_ant_0 = $(obj).find('select:first option[selected="selected"]').attr('value');
            s_ant_1 = $(obj).find('select:eq(1) option[selected="selected"]').attr('value');
            s_ant_2 = $(obj).find('select:last  option[selected="selected"]').attr('value');
            
            $(obj).find('select').select2('destroy');
            // $(obj).find('.date input:first').datetimepicker('destroy');

            s_ant_3 = $(obj).find('input[name="datanascd[]"]').attr('id');
            $('#'+s_ant_3).unmask();
            
            copia = obj.clone(true,true);

            // Limpando o elemento
            copia.removeClass('dpd');

            obj.before(copia);

            // atualizando objeto pai
            obj.find('select:first option[value="'+s_ant_0+'"]').attr('selected','selected');
            obj.find('select:eq(1) option[value="'+s_ant_1+'"]').attr('selected','selected');
            obj.find('select:last  option[value="'+s_ant_2+'"]').attr('selected','selected');

            
            $(".dpd input").map(function(){
                // Limpando inputs
                $(this).val('');
            });

            $(".dpd select").map(function(){
                // limpando select
                $(this).find('option[selected="selected"]').removeAttr('selected');
                $(this).val('').trigger('change');
            });

            $(".dpd select, .dpd select option").map(function(){
                $(this).removeAttr('data-select2-id');
                $(this).removeAttr('tabindex');
                $(this).removeAttr('aria-hidden');
            });


            $('.btnDel').show();
            $('.btnDel:first').hide();

            obj_el  = copia.find('input:first').attr('id');
            numprox = parseInt(obj_el.replace(/\D/g, '')) + 1;
            elmprox = obj_el.replace(/\d/g, '');
            newid   = elmprox+numprox;

            $('.dpd:last input:first').attr('id',newid);
            $('.dpd:last input:first').focus();

            obj_el  = copia.find('select:first').attr('id');
            numprox = parseInt(obj_el.replace(/\D/g, '')) + 1;
            elmprox = obj_el.replace(/\d/g, '');
            newid   = elmprox+numprox;            
            $('.dpd:last select:first').attr('id',newid);

            obj_el  = copia.find('select:eq(1)').attr('id');
            numprox = parseInt(obj_el.replace(/\D/g, '')) + 1;
            elmprox = obj_el.replace(/\d/g, '');
            newid   = elmprox+numprox;            
            $('.dpd:last select:eq(1)').attr('id',newid);

            obj_el  = copia.find('select:last').attr('id');
            numprox = parseInt(obj_el.replace(/\D/g, '')) + 1;
            elmprox = obj_el.replace(/\d/g, '');
            newid   = elmprox+numprox;            
            $('.dpd:last select:last').attr('id',newid);

            obj_el  = copia.find('.date input:first').attr('id');
            numprox = parseInt(obj_el.replace(/\D/g, '')) + 1;
            elmprox = obj_el.replace(/\d/g, '');
            newidte = elmprox+numprox;            
            $('.dpd:last .date input:first').attr('id',newidte);

            listagem(".sel");
            listagem(".sel2");
            $('#'+s_ant_3).mask('00/00/0000', {reverse: false});
            $('#'+newidte).mask('00/00/0000', {reverse: false});            
        });

        $('.btnDel').click(function(){
            obj =$(this).parent();
            obj.remove();
            $('#basedep .modal-body:last').addClass('dpd');
            $('#basedep .modal-body:last input:first').focus();
        });

        $('input[name="add_dpd"]').click(function(){
            if($(this).val() == 'S')
            {
                $('.dpd').show();
                $("input[name='nomed[]']").attr('required','required');
                $("input[name='datanascd[]']").attr('required','required');
                $("select[name='sexod[]']").attr('required','required');
                $("select[name='estadocivild[]']").attr('required','required');
                $("select[name='grauparentescod[]']").attr('required','required');
                $("input[name='nomemaed[]']").attr('required','required');               
            } 
            else if ($(this).val() == 'N'){
                $("input[name='nomed[]']").removeAttr('required');
                $("input[name='datanascd[]']").removeAttr('required');
                $("select[name='sexod[]']").removeAttr('required');
                $("select[name='estadocivild[]']").removeAttr('required');
                $("select[name='grauparentescod[]']").removeAttr('required');
                $("input[name='nomemaed[]']").removeAttr('required'); 
                $('.dpd').hide();
            }
        });

        $('input[name="aceite"]').click(function(){
            if($(this).val() == 'S'){

                var arr = [];
                var arrDados = { 'dadospessoal': {} }
                $("#step-1 input, #step-1 select").map(function(i){
                  arrDados['dadospessoal'][i]  =  { 'field':$(this).attr('name'),'valor':$(this).val() } 
                });
                arr.push(arrDados);

                var arrContatos = { 'contatos': {} }
                $("#step-2 input, #step-2 select").map(function(i){
                  arrContatos['contatos'][i]  =  { 'field':$(this).attr('name'),'valor':$(this).val() } 
                });
                arr.push(arrContatos);

                var arrDependentes = { 'dependentes': {} }
                $("#step-3 input, #step-3 select").map(function(i){
                  arrDependentes['dependentes'][i]  =  { 'field':$(this).attr('name'),'valor':$(this).val() } 
                });
                arr.push(arrDependentes);

                // Informando o endereço
                $('input[name="shippingAddressPostalCode"]').val($('input[name="S_ADESAO_I_CEP"]').val());
                $('input[name="shippingAddressStreet"]').val($('input[name="S_ADESAO_S_ENDERECO"]').val());
                $('input[name="shippingAddressNumber"]').val($('input[name="S_ADESAO_I_NUMERO"]').val());
                $('input[name="shippingAddressComplement"]').val($('input[name="S_ADESAO_S_COMPLEMENTO"]').val());
                $('input[name="shippingAddressDistrict"]').val($('input[name="S_ADESAO_S_CIDADE"]').val());
                $('input[name="shippingAddressState"]').val($('input[name="S_ADESAO_S_UF"]').val());

                var qtd = 1;
                if(totDep > 0)
                    qtd +=totDep;

                $('input[name="itemQuantity1"]').val(qtd);

                var arrAceite = { 'aceite': {} }
                $("#step-5 input, #step-5 select").map(function(i){
                  arrAceite['aceite'][i]  =  { 'field':$(this).attr('name'),'valor':$(this).val() } 
                });
                arr.push(arrAceite);

                $.ajax({
                    url : "https://globalsaude.gted.com.br/paginas/enviardados",
                    type : 'post',
                    data : JSON.stringify(arr),
                    dataType : 'json',
                    headers: {
                      'X-CSRF-Token':$("#step-1 input[name='_csrfToken']").val(),
                      'Content-Type':'application/json'
                    },
                    beforeSend : function(){
                        console.log('Enviando...');
                        // $('body').block({ message: null });
                        $('#loadProcess').css({display:"block"});
                    }
                })
                .done(function(msg){
                    alertify.alert("Contrato processado com sucesso.");
                    $.unblockUI();
                    $('#loadProcess').css({display:"none"});
                    $('.btnPagto').show();
                })
                .fail(function(jqXHR, textStatus, msg){
                    console.log(msg);
                    $.unblockUI();
                    $('#loadProcess').css({display:"none"});
                    alertify.alert("Não foi possível fazer o processamento do contrato. Tente novamente.");
                }); 
            }
            else if($(this).val() == 'N')
                $('.btnPagto').hide();

        });

        listagem(".sel");
        listagem(".sel2");

        mascara('.cpf','000.000.000-00',true);
        mascara('.cpfd','000.000.000-00',true);
        mascara('.pis','000.00000-00-0',true);
        mascara('.rg','00.000-000-0',true);
        mascara('.sus','00000000000.0000.0',true);
        mascara('.susd','00000000000.0000.0',true);
        mascara('.org','SSS-SS',true);
        mascara('.cep','00000-000',true);
        mascara('.telfixo','(00) 0000-0000',false);
        mascara('.telcel','(00) 00000-0000',false);
        mascara('.telcom','(00) 0000-0000',false);
        mascara('.numdnvd','00-00000000-0',false);
        mascara('.numero','0000000000',false);
        mascara('#el_dtnasc_1','00/00/0000',false);
        mascara('.dateNasc','00/00/0000',false);

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
        }

        $(".cep").blur(function() {
            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") 
            {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#ibge").val(dados.ibge);
                            $("#numero").focus();
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alertify.alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alertify.alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
                alertify.alert("Informe o CEP");
            }
        });   
    });
    $(window).load(function(){
        $("input[name='nome']").focus();
    });
    </script>
    <style type="text/css">

        #loadProcess {
            display: none;
            /* margin: 0 auto; */
            padding: 10px 0;
            width: 160px;
            top: 50%;
            position: absolute;
            left: 50%;
            z-index: 99999;
        }

        .dpd, .btnPagto { display: none; }

        .btnPagto { margin-top: 25px; }

        .has-error span.select2-selection__rendered { 
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            border: 1px solid #a94442;
        }
        .select2-selection__rendered {
            line-height: 32px !important;
        }
        .select2-selection {
            height: 34px !important;
        }

        .btnAdd {
            border-radius: 10px 0px 0px 10px;
            margin-top: -20px;
            position: absolute;
            right: 0;
            z-index: 10000;
        }
        .btnDel {
            border-radius: 10px 0px 0px 10px;
            display: none;
            margin-top: 12px;
            position: absolute;
            right: 0;
            z-index: 10000;
        }
    </style>
    <div id="loadProcess"><?= $this->Html->image('loading.gif',['width'=>'64px','height'=>'64px']);?></div>