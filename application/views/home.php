<?php $this->load->view('header.php'); ?>

 <div class="wd-banner">

  <div class="wd-overlay"></div>

    <div class="caption">

      <h1>Uma agência digital de desenvolvimento web e expertise na plataforma linxcommerce</h1>
  					
    </div>
  </div>


<section id="quem-somos">


</section>


<section id="clientes">

<div class="py-5">
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-8" >
          <h2>Alguns dos nossos clientes</h2>          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6"> <img class="img-fluid d-block" src="<?php echo base_url('assets/imgs/clients/c-1.png')?>"> </div>
        <div class="col-lg-3 col-md-6"> <img class="img-fluid d-block" src="<?php echo base_url('assets/imgs/clients/c-2.png')?>"> </div>
        <div class="col-lg-3 col-md-6"> <img class="img-fluid d-block" src="<?php echo base_url('assets/imgs/clients/c-3.png')?>"> </div>
        <div class="col-lg-3 col-md-6"> <img class="img-fluid d-block" src="<?php echo base_url('assets/imgs/clients/c-4.png')?>"> </div>
        <div class="col-lg-3 col-md-6"> <img class="img-fluid d-block" src="<?php echo base_url('assets/imgs/clients/c-5.png')?>"> </div>
      </div>
    </div>
  </div>
</section>

<section id="contato">

<div class="text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-10 p-4">
          <h2 class="">Contato</h2>
          <p class="mb-4 lead">Nos envie uma mensagem que entramos em contato com você.</p>                    
           <div class="cf-msg"></div>
          <form id="frmContact">
            <div class="form-row">
              <div class="form-group col-md-4"> 
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Nome*"> 
                
              </div>
              <div class="form-group col-md-4"> 
                <input type="text" class="form-control" id="Email" name="Email" placeholder="E-mail*"> 
                <small class="small-error Email"></small>
              </div>
              <div class="form-group col-md-4"> 
                <input type="text" class="form-control mask-telefone" id="Whatsapp" name="Whatsapp" placeholder="whatsapp*"> 
              </div>
            </div>
            <div class="form-group"> 
                <textarea class="form-control" id="Message" name="Message" rows="4" placeholder="Mensagem*"></textarea> 
            </div> 
            <button type="submit" class="btn btn-primary button">Enviar <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>


<?php $this->load->view('footer.php'); ?>