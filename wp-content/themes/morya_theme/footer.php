<?php wp_footer(); ?>

<footer class="section_footer footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="text_info col-md-4 col-xl-4">
              <div class="pr-xl-4">
              <?php foreach( getInformations() as $information ): ?>
                 <p><?= get_field('texto_informativo', $information->ID) ?></p>
                <!-- Rights-->
                <?php endforeach ?>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4 itens_menu">
              <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Consistência</a></li>
                <li><a href="#">Consiência</a></li>
                <li><a href="#">Criatividade</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-xl-4">
                <h5 style="text-align: center; color: white">Redes sociais</h5>
                <ul class="social_midia nav-list">
                <?php foreach( getInformations() as $information ): ?>
                    <li><a href="<?= get_field('facebook', $information->ID) ?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="<?= get_field('instagram', $information->ID) ?>"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="<?= get_field('twitter', $information->ID) ?>"><i class="fab fa-twitter"></i></a></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    <script src="<?php bloginfo('template_url') ?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/popper.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url') ?>/assets/js/custom.js"></script>
</body>
</html>