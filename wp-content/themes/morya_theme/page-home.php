<?php 
// Template Name: Home
get_header()?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-image text-center">
                    <img src="<?php bloginfo('template_url')?>/assets/images/Site_Morya.png" alt="">
                </div>
            </div>
        </div>

    <section>
        <div class="row section-content">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a  class="section_images_link" id="pills-consistency-tab" data-toggle="pill" href="#pills-consistency" role="tab" aria-controls="pills-consistency" aria-selected="true">
                        <?php 
                            $image = get_field('image_consistencia');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </a>
                    <h5 class="title_section">Consistência</h5>
                    <p class="text_link_images"><?php the_field('texto_consistencia') ?></p>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="section_images_link" id="pills-consiencia-tab" data-toggle="pill" href="#pills-consiencia" role="tab" aria-controls="pills-consiencia" aria-selected="false" style="margin: 0 9rem 0 9rem;">
                    <?php 
                            $image = get_field('imagem_consciencia');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </a>
                    <h5 class="title_section">Consiência</h5>
                    <p class="text_link_images"><?php the_field('texto_consciencia') ?></p>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="section_images_link" id="pills-creativity-tab" data-toggle="pill" href="#pills-creativity" role="tab" aria-controls="pills-creativity" aria-selected="false">
                        <img class="link_images" src="<?php bloginfo('template_url')?>/assets/images/criatividade.jpg" alt="">
                    </a>
                    <h5 class="title_section">Criatividade</h5>
                    <p class="text_link_images">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quaerat aliquam id tenetur nihil impedit nesciunt dolores libero ea fuga molestias dolore reiciendis debitis, labore, aspernatur quam voluptatibus neque natus.</p>
                </li>
            </ul>
        </div>
        
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-consistency" role="tabpanel" aria-labelledby="pills-consistency-tab">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="link_consiencia active" id="v-pills-here-tab" data-toggle="pill" href="#v-pills-here" role="tab" aria-controls="v-pills-here" aria-selected="true">Como chegamos aqui!</a>
                        <a class="link_consiencia" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">Quem já é de casa</a>
                        <a class="link_consiencia" id="v-pills-cine-tab" data-toggle="pill" href="#v-pills-cine" role="tab" aria-controls="v-pills-cine" aria-selected="false">Cine Morya</a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-here" role="tabpanel" aria-labelledby="v-pills-here-tab">
                               <?php the_field('chegamos_aqui')?>
                            </div>
                            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <?php echo do_shortcode("[Best_Wordpress_Gallery id='4']")?>
                            </div>
                            <div class="tab-pane fade" id="v-pills-cine" role="tabpanel" aria-labelledby="v-pills-cine-tab">
                                <?php echo do_shortcode("[Best_Wordpress_Gallery id='2']");?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-consiencia" role="tabpanel" aria-labelledby="pills-consiencia-tab">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="link_consiencia active" id="v-pills-life-tab" data-toggle="pill" href="#v-pills-life" role="tab" aria-controls="v-pills-life" aria-selected="true">Viver para servir</a>
                            <a class="link_consiencia" id="v-pills-voice-tab" data-toggle="pill" href="#v-pills-voice" role="tab" aria-controls="v-pills-voice" aria-selected="false">Nossas vozes</a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-life" role="tabpanel" aria-labelledby="v-pills-life-tab">
                                <div class="embed-container">
                                    <?php the_field('viver_para_servir'); ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-voice" role="tabpanel" aria-labelledby="v-pills-voice-tab">
                                <?php the_field('nossas_vozes') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="pills-creativity" role="tabpanel" aria-labelledby="pills-creativity-tab">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="link_consiencia active" id="v-pills-people-tab" data-toggle="pill" href="#v-pills-people" role="tab" aria-controls="v-pills-people" aria-selected="true">Moryanos e Moryanas</a>
                            <a class="link_consiencia" id="v-pills-shortlist-tab" data-toggle="pill" href="#v-pills-shortlist" role="tab" aria-controls="v-pills-shortlist" aria-selected="false">Shortlist Morya</a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-people" role="tabpanel" aria-labelledby="v-pills-people-tab">
                            <div class="row">
                                <div class="col-7">
                                    <div class="nav nav-pills profile_content  row" id="v-pills-tab" role="tablist">
                                    <?php foreach( getProfiles() as $profile ): ?>
                                        <a class="link_image_profile" id="v-pills-<?php echo $profile->ID ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $profile->ID ?>" role="tab" aria-controls="v-pills-<?php echo $profile->ID ?>" aria-selected="true">
                                            <img class="image_profile" src="<?= get_field('profile_imagem', $profile->ID)['url']?>" alt="">
                                        </a>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="tab-content" id="v-pills-tabContent">
                                    <?php foreach( getProfiles() as $profile ): ?>
                                        <div class="tab-pane fade" id="v-pills-<?php echo $profile->ID ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $profile->ID ?>-tab">
                                            <div class="profile_informations">
                                                <h4 class="profile_name"><?= get_field('profile_nome', $profile->ID)?></h4>
                                                <h6 class="profile_cargo"><?= get_field('profile_cargo', $profile->ID)?></h6>
                                            </div>   
                                            <p class="profile_history"><?= get_field('profile_historia', $profile->ID)?></p>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-shortlist" role="tabpanel" aria-labelledby="v-pills-shortlist-tab">
                            <?php echo do_shortcode("[Best_Wordpress_Gallery id='6']");?>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>


    <section class="contato" style="width: 100%;">
        <h6 class="title_contact" >Contatos: </h6>
        <div class="contact row" style="display: inline-flex; justify-content: center; width:100%">
            <div class="field_text address col-md-4">
                <h6><i class="fas fa-map-marker-alt fa-2x"></i>Endereço</h6>
                Av Trancredo neves
            </div>
            <div class="field_text call-us col-md-4">
                <h6><i class="fas fa-phone-alt fa-2x"></i>Ligue pra nós</h6>
                71 3049-6562
            </div>
            <div class="field_text send_email col-md-4">
                <h6><i class="fas fa-at fa-2x"></i>Mande um email</h6>
                matheus2006_dias@hotmail.com
            </div>
        </div>
    </section>
    </div>
<?php get_footer();?>
