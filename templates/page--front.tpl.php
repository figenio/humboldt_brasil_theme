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
          <li><a href="<?php print $front_page; ?>/rss.xml"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M6.503 20.752c0 1.794-1.456 3.248-3.251 3.248-1.796 0-3.252-1.454-3.252-3.248 0-1.794 1.456-3.248 3.252-3.248 1.795.001 3.251 1.454 3.251 3.248zm-6.503-12.572v4.811c6.05.062 10.96 4.966 11.022 11.009h4.817c-.062-8.71-7.118-15.758-15.839-15.82zm0-3.368c10.58.046 19.152 8.594 19.183 19.188h4.817c-.03-13.231-10.755-23.954-24-24v4.812z"/></svg></a></li>
          <!-- <li><a href="http://www.twitter.com/" target="_blank" rel="me"><svg xmlns="http://www.twitter.com" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></a></li> -->
          <li><a href="https://www.facebook.com/clubehumboldtbrasil/" target="_blank" rel="me"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg></a></li>
          <li><a href="https://instagram.com/clubehumboldtbrasil?igshid=1314l6is17fd4" target="_blank" rel="me"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a></li>
          <li><a href="https://www.youtube.com/channel/UCwy4tUlPPT_6A77eu_weeeQ" target="_blank" rel="me"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg></a></li>
        </ul>
      </div>
    <?php endif; ?>
      
    <div id="copyright">
     <p class="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, Clube Humboldt do Brasil </p>
    <div class="clear"></div>
    </div>
  </div>
  </div>
</div>