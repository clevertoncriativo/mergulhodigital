<?php $this->load->view('header.php'); ?>



<div class="wd-404 py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="404">
                <span><h1>404</h1></span>
            </div>
        </div>
        <div class="col-md-12">
          <h4 class="mb-3">Página não econtrada.</h4>
          <a class="btn btn-primary button" href="<?php echo base_url()?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Voltar</a>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('footer.php'); ?>