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
          <a class="navbar-brand" href="index.html">
              <img src="img/logo_simpec_sp.png" alt=""  height="40" />
              <img src="img/logo+caixa+seguradora.png" alt="" height="40" />
          </a>
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
            <!-- li><a href="#" class="btnEntrar" data-toggle="modal" data-target="#entrarModal">Entrar</a></li -->
            <!--li><a href="https://www.odontoutilis.com.br/ConnectOdontoWeb/connect-listRedeAtendimentoCaixa.action?publico=true" target="_blank" class="btnEntrar">Rede</a></li -->
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
                              <h3>R$ 37<sup>,92</sup> <span>/ por mês</span></h3>
                              <div class="price-bottom">
                                <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
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

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-03.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">Porque ter um Plano Odontológico da Caixa Seguradora?</h5>
                    <p>Ele une os melhores serviços e uma ampla rede nacional de dentistas credênciados com mais de 23 mil opções de atendimento, com possibilidade de Reembolso. A família toda da Rosângela tem tudo isso por um valor acessível e com a solidez que a Caixa Seguradora oferece.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-04.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">Qual produto está disponível?</h5>
                    <p>A Caixa Seguradora oferece um tipo de plano odontológico, o Odonto SIGMA. Ele pode ser transformado em SIGMA Familiar caso haja a necessidade de incluir dependentes.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>   

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-05.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">O que o seguro cobre?</h5>
                    <p>Todas as coberturas odontológicas determinadas pela Agência Nacional de Saúde Suplementar (ANS) e outros 19 procedimentos adicionais. Rosângela, por exemplo, conta com atendimento de urgência, exames, procedimentos preventivos, restauração, tratamento de canal, cirurgia e outros.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-06.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">Quem pode ser considerado meu dependente?</h5>
                    <p>Cônjuge ou companheiro (a), filhos (as), solteiros (as), adotivos menores de 40 anos ou inválidos em qualquer idade, enteados (as) e tutelados até 21 anos. Também são considerados dependentes do Seguro SIGMA Familiar avós, bisavós, netos, bisnetos, tios, sobrinhos e irmãos.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-07.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">A partir de quando posso começar a usar o seguro?</h5>
                    <p>Maurinho já usou procedimentos de urgência e emergência após 24 horas. Para os demais procedimentos clínicos após 30 dias (para pagamento anual).</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-08.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">Após a contratação do plano, existe um prazo de carência para inclusão de novos dependentes?</h5>
                    <p>Sim, caso sejam incluídos após a contratação do Plano Odontológico SIGMA. Os novos dependentes deverão cumprir o período de carência de 30 dias, caso o pagamento seja anual, e 60 dias se o pagamento for mensal.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div> 

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-09.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">Como faço para obter mais informações sobre reembolso?</h5>
                    <p>O reembolso é compatível com o mercado. A tabela com os valores poderá ser encontrada na área logada do espaço “Sou Segurado” ou na Central de Relacionamento com o Cliente, com o orçamento do dentista em mãos e a descrição do procedimento que será realizado.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <?= $this->Html->image('carrosel/odonto-10.png',['class'=>'img-responsive','alt'=>'img']); ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <h5 class="titDestCarr">Quais são as clínicas e profissionais disponíveis?</h5>
                    <p>A família do Maurinho pode ser atendida em todo o Brasil. São milhares de profissionais e clínicas que oferecem os melhores serviços.</p>

                    <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                   
                  </div>
                </div>  

                <div class="item">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="col-sm-12 pricing-box featured-price">
                      <div class="wow bounceInUp" data-wow-delay="0.3s">
                        <div class="pricing-content featured">
                          <h2>Plano SIGMA</h2>
                          <h3>R$ 37<sup>,92</sup> <span>/ por pessoa</span></h3>
                          <div class="price-bottom">
                            <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
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
                  <div class="btn-contrata"><a href="#" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
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
                      <div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
                      <div id="errormessage"></div>

                      <form action="cotar.php" id="frmCotacao" method="post" role="form" class="contactForm lead">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <label>Nome</label>
                              <input type="text" name="first_name" id="first_name" class="form-control ipt-custom input-md" placeholder="Insira o Nome" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                              <div class="validation"></div>
                              <span class="glyphicon glyphicon-user form-control-feedback ipt-icon2"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <label>E-mail</label>
                              <input type="email" name="emailcotacao" id="emailcotacao" class="form-control input-md" placeholder="Insira o E-mail" data-rule="emailcotacao" data-msg="Please enter a valid email">
                              <div class="validation"></div>
                              <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon2"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Telefone Móvel</label>
                              <input type="text" name="phonemobile" id="phonemobile" class="form-control input-md" placeholder="Insira o Número" data-rule="required" data-msg="The phone number is required">
                              <div class="validation"></div>
                              <span class="glyphicon glyphicon-phone form-control-feedback ipt-icon2"></span>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Telefone Fixo</label>
                              <input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" placeholder="Insira o Número" data-msg="The phone number is required">
                              <div class="validation"></div>
                              <span class="glyphicon glyphicon-phone-alt form-control-feedback ipt-icon2"></span>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                              <label>Horário bom para contato</label>
                              <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                  <input type="text" name="horariocotacao" id="horariocotacao" class="form-control input-md" value="" placeholder="Insira um Horário" data-rule="required" data-msg="The time is required">
                                  <div class="validation"></div>
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-time"></span>
                                  </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                              <label>Observação</label>
                              <textarea name="obs" class="form-control input-md" rows="5"></textarea>
                              <span class="glyphicon glyphicon-tags  form-control-feedback ipt-icon"></span>
                            </div>
                          </div>
                        </div>

                        <!-- input type="submit" value="Enviar" class="btn btn-skin btn-block btn-lg" -->
                        <a href="javascript:void(0)" id="btnEnvCotacao" class="btn btn-skin btn-block btn-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</a>
                        <p class="lead-footer cst-txt-frm-cotar">* Entraremos em contato por telefone e e-mail mais tarde</p>

                      </form>
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
              <img src="img/dummy/img-1.jpg" class="img-responsive" alt="" />
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
                <div class="cl_e"><i class="fa fa-user-circle-o fa-3x"></i></div>
                <div class="cl_d"><h5 class="titBenef">Crianças até 35 meses e 29 dias não pagam</h5></div>
              </li>
              <li>
                <div class="cl_e"><i class="fa fa-smile-o fa-3x"></i></div>
                <div class="cl_d"><h5 class="titBenef">Instalação de Aparelho Ortodôntico</h5></div>
              </li>
              <li>
                <div class="cl_e"><i class="fa fa-id-card-o fa-3x"></i></div>
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
                <h3>R$ 37<sup>,92</sup> <span>/ por pessoa</span></h3>
                <div class="price-bottom">
                  <div class="btn-contrata"><a href="#" data-toggle="modal" data-target="#adesaoModal" class="btn btn-skin btn-lg"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Contratar</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
          <form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post">
          <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
          <input type="hidden" name="code" value="D0FBD17E1A1A3E2004776FAEEE34D089" />
          <input type="hidden" name="iot" value="button" />
          <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/120x53-pagar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
          </form>
          <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
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
                  <li><img src="img/logo+caixa+seguradora.png" alt="" height="40" /><img src="img/logo_simpec_sp.png" alt=""  height="40" /></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Reguladora</h5>
                <ul>
                  <li><img src="img/_logo-ans.png" alt="" height="40" /><img src="img/ans_odonto.png" alt="" height="40" /></li>
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
                    <input type="text" name="nome" id="nome" class="form-control input-md ipt-custom" data-rule="email" data-msg="Informe o nome completo" placeholder="Nome Completo">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-user form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <div class="form-group">
                    <input type="text" name="cpf" id="rg" class="form-control input-md ipt-custom" data-rule="required" data-msg="Informe o RG" placeholder="RG">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-credit-card form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                  <div class="form-group">
                    <input type="text" name="datanasc" id="datanasc" class="form-control input-md ipt-custom" data-rule="datanasc" data-msg="Informe o Orgão Emissor" placeholder="Orgão Emissor">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-calendar form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="O nome da mãe é necessário" placeholder="Nome da Mãe sem abreviaturas">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="O sexo é necessário" placeholder="Sexo">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="O Estado Civil é necessário" placeholder="Estado Civil">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="O CPF é necessário" placeholder="CPF">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="O PIS/PASESP é necessário" placeholder="PIS/PASESP">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A data de nascimento é necessária" placeholder="PIS/PASESP">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A data de nascimento é necessária" placeholder="Cartão Nacional de Saúde">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A data de nascimento é necessária" placeholder="CEP">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-envelope form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="emailadd" id="emailadd" class="form-control input-md ipt-custom" data-rule="required" data-msg="A data de nascimento é necessária" placeholder="Endereço Residencial">
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
        
  
  
  <!-- Modal Política Privacidade -->
  <div class="modal fade" id="politicaModal" tabindex="-1" role="dialog" aria-labelledby="politicaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="politicaModalLabel" style="text-align: center;"><i class="fa fa-file-text-o" aria-hidden="true"></i> Política de Privacidade</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="margin-top: -40px">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="panel-body">
            <p>Nós, da Caixa Odonto Nacional, sob a razão social de Sindicato Das Micro e Pequena Empresas Industria e de Serviços da Construção Civil no Estado de São Paulo ( Simpec ) CNPJ: 17.450.202/0001-38, estamos comprometidos em resguardar sua privacidade. O intuito deste documento é esclarecer quais informações são coletadas dos clientes de nosso site: https://caixaodontonacional.com.br – e respectivos serviços – e de que forma esses dados são manipulados e utilizados.</p>
            <p>Para oferecer nossos serviços, a Caixa Odonto Nacional, por meio de seu site e de seu aplicativo, do equipamento onde este está instalado ou sendo utilizado e dos dispositivos sincronizados com este, coleta diversos dados e informações, visando, sobretudo, proporcionar uma experiência cada melhor para você. A Caixa Odonto Nacional reconhece que a sua privacidade é muito importante, portanto tomamos todas as medidas possíveis para protegê-la. Nesse sentido, a presente Política de Privacidade (“Política”) visa lhe informar como as suas informações e dados serão coletados, usados, compartilhados e armazenados por meio dos nossos sites e respectivos serviços.</p>
            <p>Este documento é parte integrante do nosso Termo de Uso, que contém uma visão geral da nossa plataforma.</p>
            <p>Este documento foi redigido de forma simples e acessível, justamente para que você possa ler e entender a forma como utilizamos os seus dados para lhe oferecer uma experiência segura e confortável no uso dos serviços que oferecemos a você.</p>
            <p>A aceitação da nossa Política será feita quando você se cadastrar em nossa plataforma para o usufruir dos nossos serviços. Isso indicará que você está ciente e em total acordo com a forma como utilizaremos as suas informações e seus dados.</p>
            <p>Caso não concorde com esta Política, por favor, não continue o seu procedimento de registro e não use os nossos serviços. Todavia, por favor, nos informe a sua discordância para que possamos melhorá-los.</p>
            <p>A presente Política está dividida da seguinte forma para facilitar a sua compreensão:</p>
            <p>
              <ul type="1">
                <li>Sobre a coleta de dados</li>
                <li>Sobre o uso de seus dados pessoais</li>
                <li>Sobre o acesso aos seus dados pessoais</li>
                <li>Sobre o compartilhamento de dados</li>
                <li>Sobre o uso de informações fornecidas a nossos clientes</li>
                <li>Sobre o cancelamento da assinatura e alteração/exclusão de informações pessoais</li>
                <li>Mudanças na Política de Privacidade</li>
                <li>Lei Aplicável</li>
              </ul>
            </p>
            <p>Qualquer dúvida em relação à nossa política de privacidade pode ser esclarecida entrando em contato conosco.</p>
            <p>Envie um e-mail para <a href="mailto:contato@caixaodontonacional.com.br" target="_top">contato@caixaodontonacional.com.br</a>.</p>
            <h6>1. Sobre a coleta de dados</h6>
            <p>Informações fornecidas por você – Coletamos informações de identificação pessoal – como nome, telefone, e-mail, endereço, data de nascimento, cpf e rg  – via preenchimento do formulário de cotação de plano odontológico ou da realização da contratação do serviço do plano odontológico. Eventualmente, a solicitação de algumas informações pode ser feita por meio de contato direto da Caixa Odonto Nacional com os usuários via e-mail ou telefone.</p>
            <p>Informações de navegação no site – Quando você visita nosso site, é inserido um ‘cookie’ no seu navegador por meio do software Google Analytics, para identificar quantas vezes você retorna ao nosso endereço. São coletadas informações como endereço IP, localização geográfica, fonte de referência, tipo de navegador, duração da visita e páginas visitadas.</p>
            <p>Histórico de contato – Aqui na Caixa Odonto Nacional, armazenamos informações a respeito de todos os contatos já realizados com nossos usuários, a partir de nossa página e interações via e-mail.</p>
            <p>Dados gerados na utilização de nossos serviços – Se você se utilizar de algum de nossos serviços, coletaremos ainda outras informações suas e das pessoas que visitarem o site que você cadastrar em nossa plataforma. Nesse caso, coletaremos dados de contato como seu nome, e-mail e telefone, dados locacionais como país, cidade e estado de onde o acesso está ocorrendo, dados de perfil profissional, incluindo cargo.</p>
            <p>Dados do Facebook – Ao utilizar sua conta no Facebook para se integrar aos nossos serviços, poderemos coletar todos os dados que forem disponibilizados pelo Facebook ao nosso sistema, bem como, Instagram, Youtube, Linkedin, Skype, WhatsApp e Twitter.</p>
            <h6>2. Sobre o uso de seus dados pessoais</h6>
            <p>Todos os dados que coletamos são utilizados para a prestação de nossos serviços, e não custa lembrar, prezamos muito a sua privacidade. Por isso, todos os dados e informações sobre você são tratadas como confidenciais, e somente as usaremos para os fins aqui descritos e autorizados por você, principalmente para que você possa utilizar nossos serviços de forma plena, visando sempre melhorar a sua experiência como usuário. Desta forma, poderemos personalizar o serviço para este adequar cada vez mais aos seus gostos e interesses. Ademais, seus dados também podem ser utilizados para criarmos novos serviços, produtos e funcionalidades.</p>
            <p>Para prestar nossos serviços, cruzaremos os dados que coletarmos com outros que tivermos sobre o mesmo titular em nossas bases de dados, inclusive os dados dos visitantes do site que você cadastrar em nossa plataforma. Em especial, utilizaremos os dados para monitorar as ações dos visitantes às páginas que você cadastrar, para criar perfis dessa pessoas com base nos dados de seu comportamento e verificar quais são seus interesses, para classificar e qualificar essas pessoas de acordo com esse perfil, e para criar listas dinâmicas dessas pessoas para execução de ações de marketing direcionadas, que são realizadas automaticamente de acordo com a classificação dos visitantes do seu site.</p>
            <p>Eventualmente, poderemos utilizar dados para finalidades não previstas nesta política de privacidade, mas estas estarão dentro das suas legítimas expectativas. O eventual uso dos seus dados para finalidades que não cumpram com essa prerrogativa será feito mediante sua autorização prévia.</p>
            <p>Além do acima, utilizaremos seus dados para as seguintes finalidades:</p>
            <ul>
              <li>Seu e-mail é utilizado para a operação de envio do material ou informação por você requisitada no preenchimento do formulário. Também pode ser usado para envio de Newsletters, sempre relacionadas ao tema saúde. O e-mail será utilizado ainda para comunicar o lançamento de novos serviços ou de novos produtos da Caixa Odonto Nacional e parceiros. No entanto, o usuário pode cancelar a assinatura a qualquer momento.</li>
              <li>Os dados de download poderão ser divulgados como pesquisas e estatísticas, não sendo reveladas abertamente nenhuma informação pessoal, a menos que autorizada explicitamente.</li>
              <li>Funcionários da Caixa Odonto Nacional poderão eventualmente entrar em contato via e-mail ou telefone para fazer pesquisas ou apresentar produtos e serviços.</li>
              <li>Enviar a você mensagens a respeito de suporte ou serviço, como alertas, notificações e atualizações;</li>
              <li>Nos comunicar com você sobre produtos, serviços, promoções, notícias, atualizações, eventos e outros assuntos que você possa ter interesse;</li>
              <li>Realizar publicidade direcionada conforme seus gostos, interesses e outras informações coletadas;</li>
              <li>Personalizar o serviço para este adequar cada vez mais aos seus gostos e interesses;</li>
              <li>Para qualquer fim que você autorizar no momento da coleta de dados;</li>
              <li>Cumprir obrigações legais.</li>
            </ul>
            <p>A Caixa Odonto Nacional se reserva no direito de monitorar toda a plataforma, principalmente para assegurar que as regras descritas em nossa Política de Privacidade estão sendo observadas, ou ainda se não há violação ou abuso das leis aplicáveis. Portanto, a Caixa Odonto Nacional se reserva no direito de excluir determinado usuário, independente do tipo que for, caso a presente Política não seja respeitada.</p>
            <h6>3. Sobre o acesso aos seus dados pessoais</h6>
            <p>Poderão ver suas informações pessoais apenas funcionários da Caixa Odonto Nacional, e dentre estes, somente as pessoas com as devidas autorizações. Eventualmente, caso a inserção de suas informações se dê em ações criadas em parcerias, os parceiros explicitamente identificados também terão acesso à informação. Nenhum dado pessoal poderá ser divulgado publicamente.</p>
            <p>Todos os seus dados são confidenciais e qualquer usos destes estará de acordo com a presente Política. A Caixa Odonto Nacional empreenderá todos os esforços razoáveis de mercado para garantir a segurança dos nossos sistemas e dos seus dados. Nossos servidores estão localizados em diferentes locais do mundo para garantir sua estabilidade e segurança, e somente podem ser acessados por meio de canais de comunicação previamente autorizados.</p>
            <p>Todas as suas informações serão, sempre que possível, criptografadas, caso não inviabilizem o seu uso pela Caixa Odonto Nacional. A qualquer momento você poderá requisitar cópia dos seus dados armazenados em nossos sistemas. Manteremos os dados e informações somente até quando estas forem necessárias ou relevantes para as finalidades descritas nesta Política, ou em caso de períodos pré-determinados por lei, ou até quando estas forem necessárias para a manutenção de interesses legítimos da Caixa Odonto Nacional.</p>
            <p>A Caixa Odonto Nacional considera a sua privacidade algo extremamente importante e fará tudo que estiver a seu alcance para protegê-la. Todavia, não temos como garantir complemente que todos os dados e informações sobre você em nossa plataforma estarão livres de acessos não autorizados, principalmente caso haja compartilhamento indevido das credenciais necessárias para acessar a nossa plataforma. Portanto, você é o único responsável por manter sua senha de acesso em local seguro e é vedado o compartilhamento desta com terceiros. Você se compromete a notificar a Caixa Odonto Nacional imediatamente, por meio seguro, a respeito de qualquer uso não autorizado de sua conta, bem como o acesso não autorizado por terceiros a esta.</p>
            <h6>4. Sobre o compartilhamento de dados</h6>
            <p>Ao clicar nos botões de compartilhamento de conteúdo nas redes sociais disponíveis em nossas páginas, o usuário estará publicando o conteúdo por meio de seu perfil na rede selecionada. A Caixa Odonto Nacional não tem acesso ao login e senha dos usuários nessas redes, nem publicará conteúdo em nome do usuário sem que ele realize esta ação. Por ser uma plataforma online, a Caixa Odonto Nacional poderá operar em conjunto de outras empresas numa ampla gama de atividades, incluindo para fornecer as funcionalidades de localização, anunciantes, patrocinadores e parceiros comerciais, online e off-line, além de ferramentas de divulgação e análises de desempenho. Desta forma, nos reservamos no direito de compartilhar suas informações, incluindo dados de localização, cadastro e de interesses, com nossos parceiros, anunciantes e provedores de serviços, sempre que for possível, de forma anônima, visando preservar a sua privacidade. Por meio deste documento, você autoriza expressamente tais compartilhamentos.</p>
            <p>A Caixa Odonto Nacional permite que outras empresas e redes de anúncio anunciem em nossa plataforma por meio de diferentes tecnologias. Portanto, você poderá eventualmente receber diretamente anúncios, conteúdo e links exibidos de forma personalizada, de acordo com seus interesses e comportamentos em nossa plataforma ou em outros serviços com os quais você interaja. Para tanto, dados podem ser compartilhados entre a Caixa Odonto Nacional e essas outras empresas, principalmente identificadores únicos, endereços IP, cookies e scripts java, que podem ser utilizados para medir a eficiência da publicidade online. Por meio deste documento, você autoriza expressamente tais compartilhamentos.</p>
            <p>Todavia, a Caixa Odonto Nacional não se responsabiliza pelos atos, anúncios e conteúdo gerados por nossos parceiros comerciais e redes de anúncio, e esta Política não se aplica a eles, uma vez que a Caixa Odonto Nacional não as controla.</p>
            <p>Todas os dados, informações e conteúdos sobre você podem ser considerados ativos no caso de negociações em que a Caixa Odonto Nacional fizer parte. Portanto, nos reservamos no direito de incluir seus dados dentre os ativos da empresa caso esta venha a ser vendida, adquirida ou fundida com outra. Por meio desta Política você concorda e está ciente desta possibilidade.</p>
            <p>A Caixa Odonto Nacional se reserva no direito de fornecer seus dados e informações sobre você, incluindo interações suas, caso seja requisitado judicialmente para tanto, ato necessário para que a empresa esteja em conformidade com as leis nacionais, ou caso você autorize expressamente.</p>
            <h6>5. Sobre o uso de informações fornecidas a nossos clientes</h6>
            <p>A Caixa Odonto Nacional disponibiliza a seus clientes, por meio do software RD Station, ferramentas para criação de Landing Pages, CRM, envio de e-mail marketing, entre outras que envolvem o gerenciamento de informações pessoais de usuários com quem seus clientes mantêm relacionamento.</p>
            <p>No entanto, a Caixa Odonto Nacional não controla as informações solicitadas utilizando seu sistema. Esses dados pertencem aos clientes, que os utilizam, divulgam e protegem de acordo com suas políticas de privacidade. São eles também os responsáveis por coletar, gerenciar e processar as informações confidenciais. Para informar-se melhor em relação à sua responsabilidade pelos dados que coletar, recomendamos a leitura do contrato de prestação de serviços que fechamos com você para o uso de nossos sistemas.</p>
            <h6>6. Sobre o cancelamento da assinatura e alteração/exclusão de informações pessoais</h6>
            <p>Você pode optar por não receber mais qualquer tipo de e-mail da Caixa Odonto Nacional.</p>
            <p>Em todos os e-mails que enviamos há sempre um link para cancelar a assinatura disponível nas últimas linhas. Ao clicar nesse link você será automaticamente descadastrado da lista.</p>
            <p>É importante mencionar que ao preencher qualquer formulário novamente ficará caracterizada a reinserção do seu e-mail à lista. Portanto, a requisição de cancelamento deve ser feita novamente caso seja de seu interesse.</p>
            <p>Todos os dados coletados serão excluídos de nossos servidores quando você assim requisitar ou quando estes não forem mais necessários ou relevantes para lhe oferecermos os nossos serviços, salvo se houver qualquer outra razão para a sua manutenção, como eventual obrigação legal de retenção de dados ou necessidade de preservação destes para resguardo de direitos da Caixa Odonto Nacional. Para alterar suas informações pessoais ou excluí-las do nosso banco de dados, basta enviar um e-mail para <a href="mailto:contato@caixaodontonacional.com.br" target="_top">contato@caixaodontonacional.com.br</a>.</p>
            <h6>7. Mudanças na Política de Privacidade</h6>
            <p>Essa Política de Privacidade pode passar por atualizações. Desta forma, recomendamos visitar periodicamente esta página para que você tenha conhecimento sobre as modificações. Caso sejam feitas alterações relevantes que ensejem novas autorizações suas, publicaremos uma nova política de privacidade.</p>
            <p>Antes de usar informações para outros fins que não os definidos nesta Política de Privacidade, solicitaremos sua autorização.</p>
            <h6>8. Lei Aplicável</h6>
            <p>Este documento é regido e deve ser interpretado de acordo com as leis da República Federativa do Brasil. Fica eleito o Foro da Comarca de Barueri, São Paulo, como o competente para dirimir quaisquer questões porventura oriundas do presente documento, com expressa renúncia a qualquer outro, por mais privilegiado que seja.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Como Utilizar -->
  <div class="modal fade" id="comoModal" tabindex="-1" role="dialog" aria-labelledby="comoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="comoModalLabel" style="text-align: center;"><i class="fa fa-id-card-o" aria-hidden="true"></i> Como Utilizar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" style="margin-top: -40px">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="panel-body">
            <h4 class="color">Como utilizar seu plano odontológico</h4>
            <h6 class="color">Confira os passos para ser atendido</h6>
            <p><strong>1</strong> - Consulte a REDE REFERENCIADA pelo site ou app, ou através da Central de Relacionamento (11) 4780-9494.</p>
            <p><strong>2</strong> - Entre em contato com o dentista escolhido e agende o procedimento.</p>
            <p><strong>3</strong> - Você comparece no consultório indicado levando seu cartão de identificação e um documento com foto.</p>
            <p><strong>4</strong> - Mesmo em atendimento de emergência, além do documento com foto, o beneficiário deve ter pelo menos o n° de identificação do cartão.</p>
            <p><strong>5</strong> - Em caso de solicitação de reembolso, entre em contato com a Central de Relacionamento para dar prosseguimento ao pedido.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


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
                    <input type="text" name="nome" id="nome" class="form-control input-md ipt-custom" data-rule="email" data-msg="Informe o nome do usuário" placeholder="Insira o Nome">
                    <div class="validation"></div>
                  </div>
                  <span class="glyphicon glyphicon-user form-control-feedback ipt-icon"></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="cpf" id="cpf" class="form-control input-md ipt-custom" data-rule="required" data-msg="Informe o CPF" placeholder="Insira o CPF">
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
                    <input type="text" name="fone" id="fone" class="form-control input-md ipt-custom" data-rule="email" data-msg="Informe o telefone valido" placeholder="Insira o Telefone">
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
  </div>

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
                    <input type="text" name="cnpj" id="cnpj" class="form-control input-md ipt-custom" data-rule="email" data-msg="Informe o CNPJ" placeholder="Informe o CNPJ">
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
                    <input type="text" name="endereco" id="endereco" class="form-control input-md ipt-custom" data-rule="endereco" data-msg="Informe o endereço" placeholder="Insira o Endereço">
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
  <script type="text/javascript">
    $('#carousel-example-generic').carousel({
      interval : 5000,
      pause : "hover",
      keyboard : true
    });

    $('.clockpicker').clockpicker({
      'default': 'now',
      placement: 'bottom',
    });

    $('#phonemobile').mask('(00) 00000-0000');
    $('#phone').mask('(00) 0000-0000');
    $('#horariocotacao').mask('00:00');

    $('#btnEnvCotacao').click(function(){
      $('#frmCotacao').submit();
    });
</script>