<div id="home" class="intro route bg-image" style="background-image: url('<?= base_url('assets/img/emailer/background_emailer.jpg')?>'); background-repeat: no-repeat; background-size: cover;">
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
            <p class="intro-subtitle"><span class="text-slider-items">Correio Elegante, Declare o seu amor, Confie no seu potencial</span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-box-2">
                                <h5 class="title-left">
                                    Declare-se
                                </h5>
                            </div>
                        <div>
                        <form method="post" role="form" class="contactForm">
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    Nome:<input type="text" name="name" value="<?= set_value('name') ?>" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    Seu Email:<input type="email_from" class="form-control" name="email_from" value="<?= set_value('email_from') ?>" id="email_from" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    Email do seu amor:<input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>" placeholder="Email do seu amor" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    Assunto:<input type="text" class="form-control" name="subject" id="subject" value="<?= set_value('subject') ?>"placeholder="Assunto do Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    Declaração:<textarea class="form-control" name="body" value="<?= set_value('body') ?>"rows="5" data-rule="required" data-msg="Escreva a sua declaração" placeholder="Escreva a sua declaração"></textarea>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outline-danger button-big">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>      
</div>