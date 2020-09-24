<?php
// Template Name: Template Artigo
get_header();
?>
<div class="content-article container">
        <div class="row">
            <div class="col-md-9 text_article">
                <?php the_content() ?>
            </div>
            <aside class="col-md-3">
                <div class="sidebar">
                    <div class="content" style="padding: 10px;">
                        <h1>Menu</h1>
                        <div class="circle_menu" style="display: inline-flex;">
                            <div class="menu_circle">
                                <img id="img_menu_circle" src="<?php bloginfo('template_url')?>/assets/images/calendario.png" alt="">
                            </div>
                            <div class="menu_circle">
                                <img id="img_menu_circle" src="<?php bloginfo('template_url')?>/assets/images/inegabilidade.png" alt="">
                            </div>
                            <div class="menu_circle">
                                <img id="img_menu_circle" src="<?php bloginfo('template_url')?>/assets/images/legislacao.png"  alt="">
                            </div>
                            <div class="menu_circle">
                                <img id="img_menu_circle" src="<?php bloginfo('template_url')?>/assets/images/dia-eleicao.png"  alt="">
                            </div>
                        </div>
                        <div class="section_photo">
                            <div class="big_photo">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/250x250.png" alt="" height="100%" width="100%" style="margin-bottom: 20px">
                            </div>
                            <div class="small_photo">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/250x250.png" alt="" height="100px" width="100%" style="margin-bottom: 20px">
                            </div>
                            <div class="small_photo">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/250x250.png" alt="" height="100px" width="100%" style="margin-bottom: 100px">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

</div>


<?php get_footer()?>