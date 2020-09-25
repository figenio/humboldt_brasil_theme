<?php
/**
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="header_wrapper">
  <div id="inner_header_wrapper">
  <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet"> 

  <div class="menu_wrapper">
      <nav id="main-menu"  role="navigation">
        <a class="nav-toggle" href="#">Menu</a>
        <div class="menu-navigation-container">
          <?php $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            print drupal_render($main_menu_tree);
          ?>
        </div>
        <div class="clear"></div>
      </nav><!-- end main-menu -->
    </div>

    <header id="header" role="banner">
        <!-- Título da página  -->
        <h1 class="page-title background-home"><?php print "Clube Humboldt do Brasil"; ?></h1>
        
      <div class="clear"></div>


    </header>
  </div>
</div>
  

<!-- Front page content: presentation -->
<div id="container">

  <div style="margin: auto; padding: 0 5%;k">
    
    <div style="display: inline-block; padding-top: 5%;">
      <div style="width: 45%; float: left; margin-top: 5%">
        <p class="presentation-title">Quem foi Alexander von Humboldt</p>
        <p style="font-size: medium;padding-left: 30px;"><a href="https://www.humboldt-foundation.de/web/humboldt-en.html" target="_blank" style="color: #707070">Veja mais <i class="arrow right"></i></a></p>
      </div>
      
        <div style="font-size: medium;
                    width: 54%;
                    float: right;
                    padding-left:2%">
          <p>Alexander von Humboldt (1769-1859) foi um pesquisador e explorador da natureza, cosmopolita e gênio universal, cientista e patrono. Sua longa jornada pela América Latina de 1799 a 1804 foi celebrada como a segunda descoberta científica da América do Sul. Membros das áreas de ciências naturais, como a geomorfologia, climatologia, ecologia ou oceanografia veem Humboldt como o fundador destas disciplinas. A obra-prima de seus anos mais avançados, dividida em cinco volumes, “Cosmos. Rascunho de uma Descrição do Mundo Físico”* se mantém única na abrangência de sua abordagem.</p>
          <p>Alexander von Humboldt não apenas investiu sua herança em seus próprios estudos, mas também financiou, de forma altruísta, outros acadêmicos e talentos, dentre eles Justus von Liebig e Felix Mendelssohn-Bartholdy.</p>
        </div>
    </div>

    <div style="display: inline-block; padding-top: 5%;">
      <div style="width: 45%; float: right; margin-top:3%">
        <p class="presentation-title">Fundação Alexander von Humboldt</p>
        <p style="font-size: medium;padding-left: 30px;"><a href="https://www.humboldt-foundation.de/entdecken/ueber-die-humboldt-stiftung/ueber-die-stiftung" target="_blank" style="color: #707070">Acesse o site da Fundação <i class="arrow right"></i></a></p>
        
      </div>
      <div style="font-size: medium;
                  width: 55%;
                  float: left;
                  padding-right:5%">
        <p>A Fundação Alexander von Humboldt promove a cooperação acadêmica entre cientistas estrangeiros e da Alemanha através de bolsas de pesquisa e prêmios. Os programas de financiamento são destinados a pós-doutorandos e pesquisadores experientes de todas as áreas do conhecimento. Além disso, o programa de ex-bolsistas presta um apoio flexível para a carreira e cooperações dos humboltianos ajustando-se individualmente às necessidades de cada pesquisador, muitas oportunidades de patrocínio são oferecidas por toda a vida.</p>
      </div>
    </div>

    <div style="display: inline-block; padding-top: 5%;">
      
      <div style="width: 45%; float: left; padding-right: 3%">
        <p class="presentation-title">A rede Humboldt Life</p>
        <p style="font-size: medium;padding-left: 30px;"><a href="https://www.humboldt-life.de/" target="_blank" style="color: #707070">Acesse a plataforma <i class="arrow right"></i></a></p>
      </div>
      
        <div style="font-size: medium;
                    width: 55%;
                    float: right;
                    padding-left:2%">
          <p>O Humboldt Life é a rede online da Fundação Alexander von Humboldt especialmente criada para atender as necessidades dos pesquisadores e projetada para promover informações pessoais e profissionais. Ela conecta todos os membros da comunidade Humboldt.</p>
        </div>
    </div>
  </div>


  <div style="display: inline-block; margin: 5% 0;padding: 3% 3% 1% 3%; background-color: #044d67; color: #fff">
    <p style="border-bottom: 10px solid #fff;
              padding-bottom: 12px;
              font-size: xxx-large;
              font-weight: bolder;
              line-height: 1;
              float: left;
              display: inline-block;
              margin: 5% 0 0 5%">O Clube</p>
      
    <div style="font-size: medium;
                width: 55%;
                float: right;
                padding-left:2%">
      <p>Com o objetivo de reunir pesquisadores brasileiros que participaram do programa de pesquisa da Fundação Alexander von Humboldt, foi criado, em 1996, o Clube Humboldt do Brasil. Para fomentar a cooperação acadêmica, científica e cultural com a Alemanha pretende-se promover o contato direto entre os associados, atualizá-los sobre prêmios e outras possibilidades de estudo em países de língua alemã, além de assegurar o contato com a Fundação e possibilitar o contato com Clubes Humboldt de outros países. O Clube também é um espaço de divulgação das pesquisas dos participantes através de encontros, boletins, da revista e do site.</p>
    </div>
  </div>
</div>

<div id="footer">
  <div id="footer_wrapper">
    <?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third']): ?> 
      <div id="footer-area" class="clearfix">
        <?php if ($page['footer_first']): ?>
        <div class="column"><?php print render($page['footer_first']); ?></div>
        <?php endif; ?>
        <?php if ($page['footer_second']): ?>
        <div class="column"><?php print render($page['footer_second']); ?></div>
        <?php endif; ?>
        <?php if ($page['footer_third']): ?>
        <div class="column"><?php print render($page['footer_third']); ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="footer_credit">
    <div class="footer_inner_credit">
    <?php if ($page['footer']): ?>
       <div id="foot">
        <?php print render($page['footer']) ?>
      </div>
   <?php endif; ?>

   <?php if (theme_get_setting('social_links', 'business_responsive_theme')): ?>
      <div class="social-icons">
       <ul>
        <li><a href="<?php print $front_page; ?>/rss.xml"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/rss.png'; ?>" alt="RSS Feed"/></a></li>
        <li><a href="http://www.facebook.com/<?php echo theme_get_setting('facebook_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/facebook.png'; ?>" alt="Facebook"/></a></li>
        <li><a href="http://www.twitter.com/<?php echo theme_get_setting('twitter_username', 'business_responsive_theme'); ?>" target="_blank" rel="me"><img src="<?php print base_path() . drupal_get_path('theme', 'business_responsive_theme') . '/images/twitter.png'; ?>" alt="Twitter"/></a></li>
       </ul>
      </div>
    <?php endif; ?>
      
    <div id="copyright">
     <p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?> </p> <p class="credits"> <?php print t('Designed by'); ?>  <a href="http://www.zymphonies.com">Zymphonies</a></p>
    <div class="clear"></div>
    </div>
  </div>
  </div>
</div>