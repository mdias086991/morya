<?php
// Template Name: Home
get_header();
?>

<div class="container">
        <div class="row">
                <div class="col-md-12 text-center logo_image">
                        <img src="<?php bloginfo('template_url')?>/assets/images/Site_Morya.png" alt="">
                </div>
        </div>

       
                
        <div class="row">
                <div class="col-md-12 collapse-section">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item col-md-4 col-sm-12" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-consistencia" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <div class="col-md-8 col-sm-12 text-center session_images">
                                                        <img src="<?php bloginfo('template_url')?>/assets/images/logo.png"" alt="">
                                                </div>
                                        </a>
                                        <h4>Consistência</h4>
                                        <p>Nossa experiencia e história nos fazem consistentes. Já aprendemos muita coisa mas temos certeza de que a melhor lição ainda estar por vir. Nossa consistência também vem da confiança em nós mesmos e a de quem aposta nas nossas ideias para crescer</p>
                                </li>
                                <li class="nav-item col-md-4" role="presentation">
                                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-consistenciae" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <div class="col-md-8 col-sm-12 text-center session_images">
                                                        <img src="<?php bloginfo('template_url')?>/assets/images/logo.png"" alt="">
                                                </div>
                                        </a>
                                        <h4>Consistência</h4>
                                        <p>Nossa experiencia e história nos fazem consistentes. Já aprendemos muita coisa mas temos certeza de que a melhor lição ainda estar por vir. Nossa consistência também vem da confiança em nós mesmos e a de quem aposta nas nossas ideias para crescer</p>
                                </li>
                                <li class="nav-item col-md-4" role="presentation">
                                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-consistencia" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <div class="col-md-8 col-sm-12 text-center session_images">
                                                        <img src="<?php bloginfo('template_url')?>/assets/images/logo.png"" alt="">
                                                </div>
                                        </a>
                                        <h4>Consistência</h4>
                                        <p>Nossa experiencia e história nos fazem consistentes. Já aprendemos muita coisa mas temos certeza de que a melhor lição ainda estar por vir. Nossa consistência também vem da confiança em nós mesmos e a de quem aposta nas nossas ideias para crescer</p>
                                </li>
                        
                        </ul>
                </div>
             
        </div>
        <div class="row">
                <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row">
                        <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                        </div>
                        <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                </div>
        </div>
        <div class="row">
        <h4>Contatos</h4>
                <div class="col-md-4 col-sm-12 text-center">
                        <h4>Endereços</h4>
                        <p>Av Trancredo Neves, 251-Sala 1503 Torre B <br> Empresarial Trade Center <br> Salvador/Ba - 41.110.160</p>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                        <h4>Ligue pra nós</h4>
                        <p>(71) 3049-6562</p>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                        <h4>Mande um e-mail</h4>
                        <p>email_teste@email.com</p>
                </div>
        </div>
</div>



<?php get_footer()?>