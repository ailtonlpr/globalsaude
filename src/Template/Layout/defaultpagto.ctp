<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Caixa Odonto Nacional - SIMPEC ::. <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon', 'favicon.png', ['type'=>'image/png']); ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('/font-awesome/css/font-awesome.min.css') ?>
    <?= $this->Html->css('easyWizard.css') ?>
    <?= $this->Html->css('select2.min.css') ?>
    <?= $this->Html->css('nivo-lightbox.css') ?>
    <?= $this->Html->css('nivo-lightbox-theme/default/default.css') ?>
    <?= $this->Html->css('owl.carousel.css',['media'=>'screen']) ?>
    <?= $this->Html->css('owl.theme.css',['media'=>'screen']) ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('/bodybg/bg1.css',['id'=>'bodybg']) ?>
    <?= $this->Html->css('/color/default.css',['id'=>'t-colors']) ?>
    <?= $this->Html->css('bootstrap-clockpicker.min.css') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.css') ?>
    <?= $this->Html->css('alertify.core.css') ?>
    <?= $this->Html->css('alertify.default.css',['id'=>'toggleCSS']) ?>


    <style type="text/css">
    .boxAviso { position: relative; z-index: 100000; }
    .errElm { border: 1px solid red; }
    .navbar-brand > img { display: inline-block; }
    .txtDest { font-size: 32px !important; font-weight: 800; text-align: center; }
    .txtDestSmall { font-size: 30px !important; color: #ddd; margin: 20px 0 0 0; display: inline-block; }
    .txtBtnCotacao { font-size: 1.25em; margin: 10px 0 0 0; display: inherit; }
    #botaoproposta { padding-top: 60px !important; padding-bottom: 25px !important; }
    .obs { font-size: 13px; text-align: justify; }
    .btnEntrar { background: #277EB6 !important; color: #fff !important; border-radius: 6px; }
    .direction-center { text-align: center; }
    .lnkCadastre { text-decoration: underline; }
    .lnkEsqueceu, .titEsqueceu, .txtDescItens { font-size: 13px; }
    .ipt-custom { padding: 6px 24px 6px 12px; }
    .ipt-icon { font-size: 14px;right: 12px; }
    .ipt-icon2 { font-size: 14px;right: 12px; margin-top: 31px; }
    #bx-termo { overflow-y: scroll; }
    .txt1 { color: #277EB6; }
    .txt2 { color: #FCA110; }
    .destTit { border-radius: 4px; background: white;  border: none; padding-top: 15px; padding-bottom: 12px; padding-left: 10px; padding-right: 10px; }
    .destSubtit { margin-top: 18px; text-transform: uppercase;  font-weight: 600 !important; padding-left: 19px; padding-top: 19px; }
    ul.lead-list-new li { margin-bottom: 10px; }
    .titspace { color:#277EB6; }
    .subspace {padding-left: 10px;}
    ul.lead-list-new li span i { color:#277EB6; }
    .btn-contrata { text-align: center; }
    .cst-txt-frm-cotar { margin-bottom:30px !important; }
    .titDestCarr {padding-top: 5px;}
    #boxCarrosel { margin: 20px 0; }
    #frmcotar label { font-size: 14px !important; }
    .ajstBoxPlano { padding-top: 150px; }
    .lst-benef { margin-bottom: 0px !important; }
    .lst-benef li { display: inline-block; width: 100%; }
    .lst-benef li i { color: #277EB6; float: left; margin: 0 20px 20px 0; }
    .titBenef {float: left; line-height: 60px; margin-bottom: 0px;}
    .cl_e { float: left; width: 83px; }
    .cl_d { float: left; }
    .ajtprc { margin-top: 0px !important;}
    @media (max-width: 575.98px) {
      .lst-benef {  margin-top: 10px; }
      .cl_e { width: 100% }
      #cl-preco-carrosel { margin-top: 5px; }
    }
    </style>
    <style type="text/css">
        input { text-transform:uppercase !important; }
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
        .lineDiv {
            display: block;
            content: "";
            clear: both;
        }
        .alertify-log-custom {
            background: blue;
        }
        /*.linediv { display: none; }*/
        hr {
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #000;
            color: #fff;
            background-color: #fff;
            height: 8px;
        }
        /*
        input:invalid { border: 1px solid red; }
        input:valid { border: 1px solid green; }
        */
        .invalid { border: 1px solid red; }
        .txtred { color: red }
    </style>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.mask.min.js') ?>
    <?= $this->Html->script('bootstrap-clockpicker.min.js') ?>
    <?= $this->Html->script('select2.min.js') ?>
    <?= $this->Html->script('moment-with-locales.js') ?>
    <?= $this->Html->script('bootstrap-datetimepicker.js') ?>
    <?= $this->Html->script('alertify.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <?= $this->Flash->render(); ?>
    <?= $this->fetch('content'); ?>
    
    <?= $this->Html->script('jquery.easing.min.js') ?>
    <?= $this->Html->script('jquery.blockUI.js') ?>
    <?= $this->Html->script('wow.min.js') ?>
    <?= $this->Html->script('jquery.scrollTo.js') ?>
    <?= $this->Html->script('jquery.appear.js') ?>
    <?= $this->Html->script('stellar.js') ?>
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('nivo-lightbox.min.js') ?>
    <!-- <?= $this->Html->script('custom.js') ?> -->

    <script type="text/javascript">
        /*
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
            $('#btnEnvCotacao').attr('disabled', true);
            $('#btnEnvCotacao').html('').append('<i class="fa fa-paper-plane" aria-hidden="true"></i> Processando....');
            $('#frmcotar').block({ message: null });          
        });
        $(window).load(function() {
          <?php if(isset($erros) || isset($sucessocotar)) : ?>
            $('a[href="#plano"]').click();
          <?php endif; ?>
        });
        */
    </script>
</body>
</html>