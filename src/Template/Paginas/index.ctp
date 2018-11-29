<div id="wrapper">
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <p class="bold text-left"><i class="fa fa-calendar" aria-hidden="true"></i> Segunda - Sábado, <i class="fa fa-clock-o" aria-hidden="true"></i> 08h as 19h</p>
          </div>
          <div class="col-sm-6 col-md-6">
            <p class="bold text-right">SAC (11) 4780-9494 &nbsp;&nbsp; <i class="fa fa-whatsapp"></i> (11) 94967-4445</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container navigation">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
        </button>
        <?= $this->Html->link(
          $this->Html->image('logo_simpec_sp.png',['height'=>40]).
          $this->Html->image('Caixa-Seguradora_Logo.jpg',['height'=>40]),
          ['controller'=>'paginas','action'=>'index'],
          ['escape'=>false,'class'=>'navbar-brand']
          ); 
        ?>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#plano">Plano</a></li>
          <li><a href="#beneficio">Benefícios</a></li>
          <li><a href="#especialidades">Especialidades</a></li>
          <li><a href="#contratar">Contratar</a></li>
          <li><a href="#footer">Contatos</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <section id="intro" class="home-section">
    <div class="container">
      <div class="row" id="boxCarrosel">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="wow bounceInUp" data-wow-delay="0.2s">
            <div id="owl-works" class="owl-carousel">
              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/carterinha-menor.jpg',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6" id="cl-preco-carrosel">
                  <div class="col-sm-12">
                    <div class="wow bounceInUp" data-wow-delay="0.3s">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="col-sm-12 pricing-box featured-price">
                          <div class="pricing-content featured ajtprc">
                            <h2>Plano SIGMA</h2>
                            <h3>R$ 41<sup>,08</sup> <span>/ por mês</span></h3>
                            <div class="price-bottom">
                              <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                            </div>
                          </div>
                        </div>
                      </div>    
                    </div>
                  </div>
                </div>
              </div> 

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-02.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">O que é um Plano Odontológico?</h5>
                  <p>É um Plano que oferece atendimento aos clientes em uma ampla rede de dentistas credenciados. A Rosângela só leva o Maurinho para a clínica do dentista de confiança da família, que faz parte desta rede.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-03.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">Porque ter um Plano Odontológico da Caixa Seguradora?</h5>
                  <p>Ele une os melhores serviços e uma ampla rede nacional de dentistas credênciados com mais de 23 mil opções de atendimento, com possibilidade de Reembolso. A família toda da Rosângela tem tudo isso por um valor acessível e com a solidez que a Caixa Seguradora oferece.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-04.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">Qual produto está disponível?</h5>
                  <p>A Caixa Seguradora oferece um tipo de plano odontológico, o Odonto SIGMA. Ele pode ser transformado em SIGMA Familiar caso haja a necessidade de incluir dependentes.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>   

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-05.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">O que o seguro cobre?</h5>
                  <p>Todas as coberturas odontológicas determinadas pela Agência Nacional de Saúde Suplementar (ANS) e outros 19 procedimentos adicionais. Rosângela, por exemplo, conta com atendimento de urgência, exames, procedimentos preventivos, restauração, tratamento de canal, cirurgia e outros.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-06.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">Quem pode ser considerado meu dependente?</h5>
                  <p>Cônjuge ou companheiro (a), filhos (as), solteiros (as), adotivos menores de 40 anos ou inválidos em qualquer idade, enteados (as) e tutelados até 21 anos. Também são considerados dependentes do Seguro SIGMA Familiar avós, bisavós, netos, bisnetos, tios, sobrinhos e irmãos.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-07.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">A partir de quando posso começar a usar o seguro?</h5>
                  <p>Maurinho já usou procedimentos de urgência e emergência após 24 horas. Para os demais procedimentos clínicos após 30 dias (para pagamento anual).</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-08.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">Após a contratação do plano, existe um prazo de carência para inclusão de novos dependentes?</h5>
                  <p>Sim, caso sejam incluídos após a contratação do Plano Odontológico SIGMA. Os novos dependentes deverão cumprir o período de carência de 30 dias, caso o pagamento seja anual, e 60 dias se o pagamento for mensal.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div> 

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-09.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">Como faço para obter mais informações sobre reembolso?</h5>
                  <p>O reembolso é compatível com o mercado. A tabela com os valores poderá ser encontrada na área logada do espaço “Sou Segurado” ou na Central de Relacionamento com o Cliente, com o orçamento do dentista em mãos e a descrição do procedimento que será realizado.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>

              <div class="item">
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <?= $this->Html->image('carrosel/odonto-10.png',['class'=>'img-responsive','alt'=>'img']); ?>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <h5 class="titDestCarr">Quais são as clínicas e profissionais disponíveis?</h5>
                  <p>A família do Maurinho pode ser atendida em todo o Brasil. São milhares de profissionais e clínicas que oferecem os melhores serviços.</p>

                  <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                 
                </div>
              </div>  

              <div class="item">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="col-sm-12 pricing-box featured-price">
                    <div class="wow bounceInUp" data-wow-delay="0.3s">
                      <div class="pricing-content featured">
                        <h2>Plano SIGMA</h2>
                        <h3>R$ 41<sup>,08</sup> <span>/ por pessoa</span></h3>
                        <div class="price-bottom">
                          <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: intro -->
  <section id="plano" class="intro">
    <div class="intro-content ajstBoxPlano">

      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Plano</h2>
                <p>SIGMA CA LE CP</p>
                <a href="https://www.odontoutilis.com.br/ConnectOdontoWeb/connect-listRedeAtendimentoCaixa.action?publico=true" target="_blank" class="btn btn-skin btn-lg"><i class="fa fa-university" aria-hidden="true"></i> Rede Refereciada</a>
                <br/>&nbsp;
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12"><?= $this->Flash->render('cotar'); ?><?= $this->Flash->render('cotarsucesso'); ?></div>
          <div class="col-lg-6">
            <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              <h2 class="h-ultra destTit"><span class="txt1">Caixa Odonto</span> <span class="txt2">Nacional</span></h2>
            </div>
            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
              <h4 class="h-light destSubtit"><span class="color">Plano SIGMA</span> </h4>
            </div>
            <div class="well well-trans">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <ul class="lead-list lead-list-new">
                  <li><span class="list titspace"><strong>Cobertura Nacional</strong></span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Atendimento 24 horas</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Urgências e Emergências</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Consultas</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Odontopediatria</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Radiologia (inclusive panorâmica)</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Prevenção (limpeza, aplicação de flúor)</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Cirurgia (extração de dentes)</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Dentística (restaurações)</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Endodontia (tratamento de canal)</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Periodontia (tratamento de gengiva)</span></li>
                  <li><span class="list subspace"><i class="fa fa-plus-square"></i> Prótese (novo rol mínimo)</span></li>
                  <li><span class="list titspace"><strong>Procedimentos do Rol mínimo da ANS</strong></span></li>
                </ul>
                <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]); ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" id="frmcotar">
            <div class="form-wrapper">
              <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                <div class="panel panel-skin">
                  <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Cotar Agora <small>(Preencha os campos abaixo que retornaremos)</small></h3>
                  </div>
                  <div class="panel-body">
                    <?= 
                      $this->Form->create(null, [
                          'url' => '/paginas/index',
                          'type' => 'post',
                          'id'=>'frmCotacao',
                          'role'=>'form',
                          'class'=>'contactForm lead'
                      ]);
                    ?>
                      <?= $this->Form->hidden('_csrfToken',['value'=>$_csrfToken]) ?>
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <label>Nome</label>
                            <?php  $css = (isset($erros['S_COTACAO_S_NOME'])) ? ' errElm' : ''; ?>
                            <?= $this->Form->text('S_COTACAO_S_NOME', ['class'=>'form-control ipt-custom input-md'.$css.'','placeholder'=>'Insira o Nome']); 
                            ?>
                            <?php
                              if(isset($erros['S_COTACAO_S_NOME'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_S_NOME']);
                              }
                            ?> 
                            <span class="glyphicon glyphicon-user form-control-feedback ipt-icon2"></span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <label>E-mail</label>
                            <?php  $css = (isset($erros['S_COTACAO_S_EMAIL'])) ? ' errElm' : ''; ?>
                            <?= $this->Form->text('S_COTACAO_S_EMAIL', ['class'=>'form-control input-md'.$css.'','placeholder'=>'Insira o E-mail']); 
                            ?>
                            <?php
                              if(isset($erros['S_COTACAO_S_EMAIL'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_S_EMAIL']);
                              }
                            ?>
                            <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon2"></span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Telefone Móvel</label>
                            <?php  $css = (isset($erros['S_COTACAO_I_NUMEROS']) || isset($erros['S_COTACAO_I_NUMERO_MOVEL'])) ? ' errElm' : ''; ?>
                            <?= $this->Form->text('S_COTACAO_I_NUMERO_MOVEL', ['class'=>'form-control input-md'.$css.'','placeholder'=>'Insira o Número','id'=>'phonemobile']); 
                            ?>
                            <?php
                              if(isset($erros['S_COTACAO_I_NUMEROS'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_I_NUMEROS']);
                              }else  if(isset($erros['S_COTACAO_I_NUMERO_MOVEL'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_I_NUMERO_MOVEL']);
                              }
                            ?>
                            <span class="glyphicon glyphicon-phone form-control-feedback ipt-icon2"></span>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Telefone Fixo</label>
                            <?php  $css = (isset($erros['S_COTACAO_I_NUMEROS']) || isset($erros['S_COTACAO_I_NUMERO_FIXO'])) ? ' errElm' : ''; ?>
                            <?= $this->Form->text('S_COTACAO_I_NUMERO_FIXO', ['class'=>'form-control input-md'.$css.'','placeholder'=>'Insira o Número','id'=>'phone']); 
                            ?>
                            <?php
                              if(isset($erros['S_COTACAO_I_NUMEROS'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_I_NUMEROS']);
                              } else if(isset($erros['S_COTACAO_I_NUMERO_FIXO'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_I_NUMERO_FIXO']);
                              }
                            ?>
                            <span class="glyphicon glyphicon-phone-alt form-control-feedback ipt-icon2"></span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <label>Horário bom para contato</label>
                            <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                <?= $this->Form->text('S_COTACAO_C_HORARIO_CONTATO',['class'=>'form-control input-md','placeholder'=>'Insira um Horário','autocomplete'=>'off']); ?>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <?php
                              if(isset($erros['S_COTACAO_C_HORARIO_CONTATO'])) {
                                echo $this->PaginasFuncoes->mensErroValidate($erros['S_COTACAO_C_HORARIO_CONTATO']);
                              }
                            ?>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <label>Observação</label>
                            <textarea name="S_COTACAO_S_OBSERVACAO" class="form-control input-md" rows="5"></textarea>
                            <span class="glyphicon glyphicon-tags  form-control-feedback ipt-icon"></span>
                          </div>
                        </div>
                      </div>

                      <!-- input type="submit" value="Enviar" class="btn btn-skin btn-block btn-lg" -->
                      <a href="javascript:void(0)" id="btnEnvCotacao" class="btn btn-skin btn-block btn-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</a>
                      <p class="lead-footer cst-txt-frm-cotar">* Entraremos em contato por telefone e e-mail mais tarde</p>
                      <?= $this->Form->hidden('S_COTACAO_I_ATIVO',['value'=>1]) ?>
                    <?= $this->Form->end(); ?>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: benefícios -->
  <section id="beneficio" class="home-section paddingbot-60">
    
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Benefícios</h2>
              <p>Conheça nosso diferencial</p>
            </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <?= $this->Html->image('dummy/img-1.jpg',['class'=>'img-responsive']); ?>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <ul class="lead-list lead-list-new lst-benef">
            <li>
              <div class="cl_e"><i class="fa fa-hospital-o fa-3x"></i></div>
              <div class="cl_d"><h5 class="titBenef">Pronto Socorro 24 Horas</h5></div>
            </li>
            <li>
              <div class="cl_e"><i class="fa fa-exclamation-triangle fa-3x"></i></div>
              <div class="cl_d"><h5 class="titBenef">Sem Carência</h5></div></li>
            <li>
              <div class="cl_e"><i class="fa fa-money fa-3x"></i></div>
              <div class="cl_d"><h5 class="titBenef">Opção de Reembolso</h5></div>
            </li>
            <li>
              <div class="cl_e"><i class="fa fa-user fa-3x"></i></div>
              <div class="cl_d"><h5 class="titBenef">Crianças até 35 meses e 29 dias não pagam</h5></div>
            </li>
            <li>
              <div class="cl_e"><i class="fa fa-smile-o fa-3x"></i></div>
              <div class="cl_d"><h5 class="titBenef">Instalação de Aparelho Ortodôntico</h5></div>
            </li>
            <li>
              <div class="cl_e"><i class="fa fa-money fa-3x"></i></div>
              <div class="cl_d"><h5 class="titBenef">Vidalink (Descontos em Farmácias)</h5></div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <!-- /Section: benefícios -->

  <!-- Section: especialidades -->
  <section id="especialidades" class="home-section bg-gray paddingbot-60">
    
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Especialidades</h2>
              <p>Nossas principais coberturas</p>
            </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Urgências e Emergências</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">
              <i class="fa fa-user-md fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Consultas</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-medkit fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Odontopediatria</h4>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-recycle fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Radiologia</h4>
              <p>(inclusive panorâmica)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-meh-o fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Prevenção</h4>
              <p>(limpeza, aplicação de flúor)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">
              <i class="fa fa-medkit fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Cirurgia</h4>
              <p>(extração de dentes)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-medkit fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Dentística</h4>
              <p>(restaurações)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-medkit fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Endodontia</h4>
              <p>(tratamento de canal)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">
              <i class="fa fa-stethoscope fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Periodontia</h4>
              <p>(tratamento de gengiva)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-medkit fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Prótese</h4>
              <p>(novo rol mínimo)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-book fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Procedimentos</h4>
              <p>(do Rol mínimo da ANS)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="box text-center">

              <i class="fa fa-book fa-3x circled bg-skin"></i>
              <h4 class="h-bold">Benefício adicional</h4>
              <p>(instalação de aparelho ortodôntico)</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /Section: especialidades -->

  <!-- Section: proposta -->
  <section id="contratar" class="home-section paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Caixa Seguradora</h2>
              <p>Plano Odontológico</p>
            </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 pricing-box featured-price">
          <div class="wow bounceInUp" data-wow-delay="0.3s">
            <div class="pricing-content featured">
              <h2>Plano SIGMA</h2>
              <h3>R$ 41<sup>,08</sup> <span>/ por pessoa</span></h3>
              <div class="price-bottom">
                <div class="btn-contrata"><?= $this->Html->link(
                    '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar',
                    '/pagamento',
                    ['class'=>'btn btn-skin btn-lg','escape' => false]);
                ?></div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: proposta -->

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Sobre nós</h5>
              <p>
                A CAIXA SEGURADORA ODONTO foi criada para atender necessidades específicas na área de ODONTOLOGIA, com soluções inovadoras, práticas e ofertando o melhor custo/benefício do mercado para nossos clientes. Prestando um serviço world class, com total imparcialidade, apresentamos soluções em TRATAMENTO EM PLANOS ODONTOLÓGICOS.
              </p>
            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Informações</h5>
                <ul>
                  <li><a href="#" data-toggle="modal" data-target="#comoModal">Como Utilizar</a></li>
                  <li><a href="https://www.odontoutilis.com.br/ConnectOdontoWeb/connect-listRedeAtendimentoCaixa.action?publico=true" target="_blank">Rede Referenciada</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#politicaModal">Política de Privacidade</a></li>
                  <!-- li><a href="#">Termos & Condições de Uso</a></li-->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Atendimento</h5>
              <p>
                Estamos disponível para atender o nosso cliente nos canais abaixo.
              </p>
              <ul>
                <li>
                  <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                              </span> Segunda - Sábado, 08h as 19h
                </li>
                <li>
                  <span class="fa-stack fa-lg">
                                     <i class="fa fa-circle fa-stack-2x"></i>
                                     <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                                  </span> (11) 94967-4445
                </li>
                <li>
                  <span class="fa-stack fa-lg">
                   <i class="fa fa-circle fa-stack-2x"></i>
                   <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span> (11) 4780-9494
                </li>
                <li>
                  <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                              </span> contato@caixaodontonacional.com.br
                </li>

              </ul>
            </div>
          </div>
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Siga-nos</h5>
              <ul class="company-social">
                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Forma de Pagamento</h5>
              <ul>
                <li><i class="fa fa-barcode" aria-hidden="true"></i> Boleto bancário</li>
                <li><i class="fa fa-credit-card" aria-hidden="true"></i> Cartão de crédito</li>
                <li><i class="fa fa-credit-card" aria-hidden="true"></i> Cartão de débito</li>
                <li><i class="fa fa-money" aria-hidden="true"></i> Transferência online</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Parceiros</h5>
              <ul>
                <li><?= $this->Html->image('logo+caixa+seguradora.png',['height'=>40]) ?><?= $this->Html->image('logo_simpec_sp.png',['height'=>40]) ?></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
            <div class="widget">
              <h5>Reguladora</h5>
              <ul>
                <li><?= $this->Html->image('_logo-ans.png',['height'=>40]) ?><?= $this->Html->image('ans_odonto.png',['height'=>40]) ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="wow fadeInLeft" data-wow-delay="0.1s">
              <div class="text-left">
                <p>&copy;Copyright - Caixa Odonto Nacional. Todos os direitos reservados.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="text-right"> 
                <div class="credits"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<? // echo $this->element('contratar'); ?>