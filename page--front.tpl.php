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

<?php if(user_is_logged_in()){ ?>    
<div class="menu-admin">
  <div class="container">
    <?php
     print drupal_render(menu_tree('menu-menu-editores')); 
    ?>
  </div>
</div>
<?php }  ?>

<!-- / HEADER -->
<div id="principal">
    <section class="destaque">
      <div class="container">
      <div class="row">
        <div class="col-sm-8">
           <div id="carousel-destaque" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <?php print views_embed_view('destaque_home', 'block_1'); ?>
                </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-destaque" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                  <a class="right carousel-control" href="#carousel-destaque" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div> 
        </div>
        <div class="col-sm-4">
          <?php print views_embed_view('destaque_home', 'block_2'); ?>
        </div>
      </div>
    </div>
    </section>
<div class="container">
    <section class="noticias-videos">
          <div class="row">
            <div class="col-sm-8">
                  <h3>Notícias</h3>
                  <?php print views_embed_view('noticia_home1', 'default'); ?>
            </div>
            <div class="col-sm-4">
              <h3>Vídeos</h3>
              <?php print views_embed_view('videos_home', 'default'); ?>
            </div>
          </div> 
    </section>
    <section class="noticias-democratas">
      <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/democratas.png" />
      <?php print views_embed_view('noticia_home2', 'default'); ?>
    </section>
     <!--section class="artigos">
      <h3>Artigos</h3>
    </section-->
     <section class="artigos">
      <h3>Fotos</h3>
      <?php print views_embed_view('galerias_home', 'default'); ?>
    </section>
</div>
 </div><!-- / principal -->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.nicescroll.min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.parallax-1.1.3.j" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>
<script src="<?php echo $directory; ?>/js/geral.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll({offset: {top:0}});
    jQuery('.menu-rodape').localScroll({offset: {top:0}});
    jQuery('.seta').localScroll({offset: {top:0}});
})
</script>
 <!--[if !IE]><!-->
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.inview.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/custom_inview.js"></script>
<!--<![endif]-->
<script type="text/javascript">
    
    $('#carousel-destaque .view-content').unwrap();
    $('#carousel-destaque .view-content .item').unwrap();
</script>
