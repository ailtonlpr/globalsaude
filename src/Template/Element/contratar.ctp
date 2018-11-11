
<style type="text/css">
  #myModalProposta #myModalLabel { font-size: 18px !important; }
  #myModalProposta h3 {  
      font-size: 24px !important;  
      font-weight: 500 !important;
      margin-top: 20px !important; 
      margin-bottom: 10px !important;  
      line-height: 1.1 !important;
      font-family: inherit !important;
  }
  #myModalProposta .step-number div.number { 
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
    line-height: 1.42857143 !important; 
  }
  
  #myModalProposta label {
    display: inline-block !important;
    max-width: 100% !important;
    margin-bottom: 5px !important;
    font-weight: 700 !important;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
    font-size: 14px !important;
  }

  #myModalProposta div.modal-footer.wizard-buttons .btn {
    color: #333 !important;
    font-weight: 400 !important;
    text-transform: none !important; 
  }
  #myModalProposta div.modal-footer.wizard-buttons .btn.btn-success {
    color: #FFF !important;
    text-transform: none !important; 
  }

  #myModalProposta div.modal-footer.wizard-buttons .btn-default:hover,
  #myModalProposta div.modal-footer.wizard-buttons .btn-default:focus {
      border: 1px solid #e0e0e0;
      outline: 0;
      color: #000;
      background-color: #e0e0e0;
  }

  #myModalProposta div.modal-footer.wizard-buttons .btn.btn-primary.wizard-button-finish { color: #FFF !important; }

</style>
<div class="modal fade" id="myModalProposta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Proposta de Adesão</h4>
            </div>
            <div class="modal-body wizard-content" id="frm">
      <div class="wizard-step">
        <h3>Dados Pessoais</h3>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label for="message-text" class="col-form-label">Nome Completo:</label>
                <div class='input-group'>
                  <?= $this->Form->text('S_ADESAO_S_NOME',['class'=>'form-control nome','maxlength'=>'50','placeholder'=>'Nome Completo']); ?>
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
                  <?= $this->Form->text('S_ADESAO_D_DATANASCIMENTO',['class'=>'form-control dateNasc','maxlength'=>'8']); ?>
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
                <select required name='S_ADESAO_S_SEXO' class="sel sexo" title="O Sexo é obrigatório">
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
                  <input name="S_ADESAO_I_CPF" type='text' class="form-control cpf"  />
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
                  <input name="S_ADESAO_S_RG" type='text' maxlength="12" class="form-control rg" title="O RG é obrigatório" />
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
                  <input name="S_ADESAO_S_ORGAO_EMISSOR" type='text' maxlength="6" class="form-control org"  title="O Orgão Emissor é obrigatório" />
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
                  <input name="S_ADESAO_I_PIS_PASESP" type='text' class="form-control pis" />
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
                  <input name="S_ADESAO_I_CNS" type='text' class="form-control sus" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-credit-card"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="message-text" class="col-form-label">Estado Civil:</label>
                <select name='S_ADESAO_S_ESTADOCIVIL' class="sel2 estadocivil">
                  <option value="">&nbsp;</option>
                  <option value="1">Casado</option>
                  <option value="2">Divorciado</option>
                  <option value="3">Separado</option>
                  <option value="4">Solteiro</option> 
                  <option value="5">Viúvo</option>  
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="message-text" class="col-form-label">Nome da Mãe sem abreviaturas:</label>
                <div class='input-group'>
                  <input name='S_ADESAO_S_NOME_MAE' type='text' maxlength="50" class="form-control nomemae" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>
                  </span>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>
      <div class="wizard-step">
        <h3>Contatos</h3>
        <div class="modal-body">
          <div class='row'>
            <div class="col-md-2">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">CEP:</label>
                <input type="text" class="form-control cep" />
              </div>
            </div>
            <div class='col-md-8'>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Endereço Residencial:</label>
                <div class='input-group'>
                  <input id='rua' type="text" class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-map-marker"></span>
                  </span>
                </div>
              </div>
            </div>
            <div class='col-md-2'>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Número:</label>
                <input id='numero' type="text" maxlength="10" class="form-control" />
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-3'>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Complemento:</label>
                <input id='completo' maxlength="20" type="text" class="form-control" />
              </div>
            </div>
            <div class='col-md-4'>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Bairro:</label>
                <input id='bairro' type="text" class="form-control" />
              </div>
            </div>
            <div class='col-md-5'>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Cidade:</label>
                <input id='cidade' type="text" class="form-control" />
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-2'>
              <div class="form-group">
                <label for="message-text" class="col-form-label">UF:</label>
                <div class='input-group'>
                  <input id='uf' type="text" class="form-control" />
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
                  <input type="text" class="form-control telcel" />
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
                  <input type="text" class="form-control telfixo" />
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
                  <input type="text" class="form-control telcom" />
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
                  <input id='email' type="text" class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-envelope"></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wizard-step" id="matriz">
        <h3>Dependentes</h3>
        <div>
          <button class="btn btn-info btn-sm btnAdd" title="Adicionar Dependente"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
          <button class="btn btn-danger btn-sm btnDel" title="Remover Dependente"><i class="fa fa-trash" aria-hidden="true"></i></button>
          <div class="lineDiv">&nbsp;</div>
          <div class="modal-body">
            <div class="row linediv"><div class="col-md-12"><hr></div></div>
            <div class='row'>
              <div class="col-md-9">
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Nome Completo:</label>
                  <div class='input-group date'>
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
                    <input id='el_dtnasc_1' type="text" name="datanascd[]" class="form-control dateNascd" />
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
        </div>
      </div>
      <div class="wizard-step">
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
                  <tbody>
                  <tr>
                    <th scope="row">Titular</th>
                    <td>31</td>
                    <td>R$ 37,92</td>
                  </tr>
                  <tr>
                    <th scope="row">Dependente 1</th>
                    <td>20</td>
                    <td>R$ 37,92</td>
                  </tr>
                  <tr>
                    <th scope="row">Dependente 2</th>
                    <td>22</td>
                    <td>R$ 37,92</td>
                  </tr>
                  <tr>
                    <th scope="row">Dependente 3</th>
                    <td>25</td>
                    <td>R$ 37,92</td>
                  </tr>
                  </tbody>
                  <tfooter>
                    <tr>
                    <th colspan='2' scope="row" style='text-align:right'>Total</th>
                    <td>R$ 151,68</td>
                  </tr>
                  </tfooter>
                </table>
              </div>
            </div>
            <div class="col-md-4">
              <p style='text-align:justify'><strong>ATENÇÃO:</strong> Os valores indicados ao lado sofrerão alteração caso haja reajuste anual do contrato coletivo entre a data de assinatura desta proposta de adesão e a data de sua 1 (primeira) cobrança, observando o disposto do item <strong>16</strong> da página <strong>04</strong> desta proposta.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
            <div class="modal-footer wizard-buttons">
                <!-- The wizard button will be inserted here. -->
            </div>
        </div>
    </div>
</div>

<?= $this->Html->script('easyWizard.js') ?>
    <script>
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

        $(document).on("ready", function(){

          $('.btnAdd').click(function(){
            obj  = $(this).closest('.dpd');
            copia = obj.clone(true,true);
            obj.before(copia);
          });

          $('.btnDel').click(function(){
            obj =$(this).parent();
            obj.remove();
          });

      $("#contrato").trigger('click');

      calendario('.dateNasc');
      calendario('.dateNascd');
      listagem(".sel");
      listagem(".sel2");

      $("#myModalProposta").wizard({
        onfinish:function(){
          alert('AKIII');
          return false;
          console.log("Finalizando...");
        }
      });

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
  <style>
    .select2-selection__rendered {
      line-height: 32px !important;
    }
    .select2-selection {
        height: 34px !important;
    }
  </style>