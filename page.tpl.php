<!-- HEADER -->
 <header>
    <div class="container">
        <div class="logo"><a href="http://plauto.com.br" title="<?php print t('Home'); ?>"><img src="<?php print base_path() . path_to_theme() .'/' ?>img/logo-plauto-2017.png" class="img-responsive" /></a></div>

        <div class="logo-democratas" ><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/democratas.png" /></div>
        <ul class="links-sociais">
            <li class="facebook"><a href="https://www.facebook.com/plautomiro" target="_blank">Facebook</a></li>
            <li class="twitter"><a href="https://twitter.com/plauto_miro" target="_blank">Twitter</a></li>
            <li class="youtube"><a href="https://instagram.com/plautomiro/" target="_blank">Instagram</a></li>
            <li class="email"><a href="http://plauto.com.br/fale-comigo">Email</a></li>
        </ul>        
        <?php print render($page['header']); ?>
    </div>
    <nav id="topnav" class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
               <div class="menu-secoes">
               <ul id="menu-secoes" class="nav navbar-nav">
                   <li><a href="http://plauto.com.br">Home</a></li>
                   <li><a href="http://plauto.com.br/deputado-plauto-miro">Sobre o Deputado</a></li>
                   <li><a href="http://plauto.com.br/noticias">Notícias</a></li>
                   <li><a href="http://plauto.com.br/videos">Vídeos</a></li>
                   <li><a href="http://plauto.com.br/fotos">Fotos</a></li>
                   <li><a href="#">Atuação</a></li>                  
                   <li><a href="http://plauto.com.br/fale-comigo">Fale Comigo</a></li>
                  </ul>
              </div>
           </div><!-- /.navbar-collapse -->
          </div>
        </nav>
</header>
<!-- / HEADER -->

<?php if(user_is_logged_in()){ ?>    
<div class="menu-admin">
  <div class="container">
    <?php
    $menu2 = menu_tree('menu-menu-editores');
    print render($menu2);
     //print drupal_render(menu_tree('menu-menu-editores')); 
    ?>
  </div>
</div>
<?php }  ?>

<div id="principal">

	<div class="container">

  <div class="extras">

       <?php if ($messages): ?>

              <div id="messages">

                <div class="section clearfix">

                <?php print $messages; ?>

              </div></div> <!-- /.section, /#messages -->

              <?php endif; ?>

              <?php if ($tabs): ?>

                <div class="tabs">

                  <?php print render($tabs); ?>

                </div>

              <?php endif; ?>

  </div>

			<div id="conteudo">	

              <h1 class="title" id="page-title"><?php print $title; ?></h1>		

    
		          <?php print render($page['content']); ?>

	    </div> <!-- conteudo -->

	</div><!-- container -->

</div><!-- principal -->



<!-- FOOTER-->
<footer>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 imprensa">
        <p>Contato para Imprensa: imprensa@plauto.com.br</p>
      </div>
       <div class="col-sm-6 copyright">
        <p>copyright 2015 - Deputado Plauto Miró</p>    
      </div>
    </div>

    
  </div>  
     
 </footer>
<!-- / FOOTER -->



<!--/ CONTENT -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/bootstrap.js" type="text/javascript"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/jquery.fancybox.js" type="text/javascript"></script>

<script src="<?php print base_path() . path_to_theme() .'/' ?>js/geral.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
  $(".fancybox").fancybox();
});
</script>

