<?php include "template-site/header.php"; ?>
<?php include "template-site/top.php"; ?>
<?php include "config/connect.php"; ?>

  <div id="topo">
    <div class="responsive">
      <a href="<?php echo $mainFolder ?>" class="logo"></a>
      <div class="container-menu">
        <div class="telefone"><i></i><small>00</small><span>0000-0000</span></div>
        <ul>
          <li><a href="">Página 1</a></li>
          <li><a href="">Página 2</a></li>
          <li><a href="">Página 3</a></li>
          <li><a href="">Página 4</a></li>
          <li><a href="">Página 5</a></li>
          <li><a href="">Página 6</a></li>
          <li><a href="">Página 7</a></li>
        </ul>
      </div>
      <div class="divider"></div>
    </div>
  </div>

  <div id="galeria">
    <div class="responsive">
      <div class="grid">
        <?php
        $fotos = $database->query("SELECT * FROM galeria")->fetchAll();
        foreach ($fotos as $foto) {
          ?>
          <a href="<?php echo $mainFolder ?>/upload/<?php echo $foto['imagem'] ?>">
            <figure><img src="<?php echo $mainFolder ?>/upload/<?php echo $foto['imagem'] ?>" alt=""></figure>
            <span>
           <?php echo utf8_decode($foto['titulo']) ?>
         </span>
          </a>
        <?php } ?>
      </div>
      <div class="divider"></div>
    </div>
  </div>
  <div id="rodape">
    <div class="responsive">
      <div class="container">
        <figure><img src="<?php echo $mainFolder ?>/includes/imgs/pessoa.jpg" alt=""></figure>
        <div class="content">
          <span>Pessoa ou Empresa</span>
          <p>
            Lorem ipsum dolor sit amet, lorem consectetur elit. Aliquam id mi ipsum sed ligula sollicitudin fermentum dolor.<br><br>
            Aliquam suscipit, massa quis posuere consecttur, enim libero tempor enim, ultriies est turpis nec risus. Nam in libero nulla, eu adipiscing nibh. In vitae massa vitae suscipit scelerisque lorem psum amed.
          </p>
        </div>
      </div>

      <div class="social">
        <span>Acesse Também:</span>
        <a href="www.fb.com/loremipsum">
          <i><img src="<?php echo $mainFolder ?>/includes/imgs/facebook.png" alt=""></i>
          <span>www.fb.com/loremipsum</span>
        </a>
        <a href="www.twitter.com/loremipsum">
          <i><img src="<?php echo $mainFolder ?>/includes/imgs/twitter.png" alt=""></i>
          <span>www.twitter.com/loremipsum</span>
        </a>
        <a href="www.flickr.com/loremipsum">
          <i><img src="<?php echo $mainFolder ?>/includes/imgs/flirck.png" alt=""></i>
          <span>www.flickr.com/loremipsum</span>
        </a>
      </div>
    </div>
  </div>
  <div id="copy">
    <div class="responsive">
      <span>Todos os direitos reservados - © 2012</span>
      <a href="https://www.rgb.com.br/" class="rgb" target="_blank"></a>
    </div>
  </div>

<?php include "template-site/footer.php"; ?>