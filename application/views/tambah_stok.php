<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title>Skripsi</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <?php echo $this->load->view('share/css', '', TRUE);?>
    <!-- END GLOBAL MANDATORY STYLES -->



    <!-- BEGIN THEME STYLES -->
   <?php echo $this->load->view('share/css', '', TRUE);?>
    <!-- END THEME STYLES -->
	<link href="<?php site_url(); ?>dist/table/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php site_url(); ?>data_umum/table/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php site_url(); ?>dist/table/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php site_url(); ?>dist/table/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php site_url(); ?>dist/table/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php site_url(); ?>dist/table/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<!-- BEGIN HEAD -->
<body class="">

<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="header-default">
  
   
</div>
<div class="job-overview">
    <header class="job-overview__header">
       
    </header>
	<br>
    <div class="container">
	  
        <div class="row">
           <div class="container">
        <div class="row">
            <div class="col-lg-12">
<div class="container">
    <?php echo $this->session->flashdata('pesan')?>
    <form class="page-contact__form" action="<?php echo site_url();?>darah/proses_tambah_stok" method="POST" >
        <h2 class="page-contact__form-heading">Tambah Stok Darah</h2>
        <div class="row justify-content-center">
		<br>
		<br>
            <div class="col-lg-5">
                <div class="form-group">
                    <input type="Date" name='tanggal' class="form-control" placeholder="Tangal Input">
                </div>
            </div>
            <div class="col-lg-5">
					<div class="form-group">
                                          <select class="form-control" required name="ukuran" >
										     <option> Pilih</option>
										 <?php
										 $i=0;
											foreach($data_ukuran1 as $data){
											$i++;
											?>
											 <option value="<?php echo $data->id_ukuran?>"><?php echo $data->ukuran ;?></option>
											<?php }?>
										  </select>
                    </div>
            </div>
		<div class="col-lg-5">
        <select class="form-control select2-form-control" tabindex="-1" aria-hidden="true" name="komponen">
		 <option>Pilih</option>
            <?php
										 $i=0;
											foreach($data_komponen1 as $data){
											$i++;
											?>
											 <option value="<?php echo $data->id_komponen?>"><?php echo $data->nama ;?></option>
											<?php }?>
        </select>  
		</div>
		<br>
		<br>
		<div class="col-lg-5">
        <select class="form-control select2-form-control select2" name="pendonor">
            <option>Pilih</option>
            <?php
										 $i=0;
											foreach($data_pendonor as $data){
											$i++;
											?>
											 <option value="<?php echo $data->id_pendonor?>"><?php echo $data->nama ;?></option>
											<?php }?>
        </select>  
		</div>
		<br>
		<br>
		<br>
		<br>
			<div class="col-lg-5">
			<select class="form-control" aria-hidden="true" name='gol_darah'>
            <option >Pilih</option>
            <option >A+</option>
            <option >B+</option>
            <option>AB+</option>
            <option >O+</option>
			</select>
			</div>
   
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="form-group">
                    <button class="btn btn-info btn-sm btn-info-flat" type='submit'>Tambah</button>
                </div>
            </div>
        </div>
		
    </form>
</div>
            </div>
           
        </div>
    </div>
        </div>
    </div>
</div>

<script src="<?php echo site_url();?>dist/vendors/jquery/jquery.min.js"></script>
<script src="<?php echo site_url();?>dist/vendors/tether/js/tether.min.js"></script>
<script src="<?php echo site_url();?>dist/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>dist/vendors/select2/js/select2.min.js"></script>
<script src="<?php echo site_url();?>dist/js/dropdown.animate.js"></script>


</body>
<?php echo $this->load->view('share/footer', '', TRUE);?>

<?php echo $this->load->view('share/script', '', TRUE);?>


<script>
    (function () {
        $(document).ready(function () {
            var dropDownToggle = $('.dropdown-toggle');

            $(".navbar-toggler").on("click", function () {
                $(this).toggleClass("is-active");
            });

            dropDownToggle.click(function() {
                var dropdownList = $(this).parent().find('.dropdown-menu');
                var dropdownOffset = $(this).offset();
                var offsetLeft = dropdownOffset.left;
                var dropdownWidth = dropdownList.width() / 2;
                var docWidth = $(window).width();

                var isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth);

                if (!isDropdownVisible) {
                    dropdownList.addClass('dropdown-menu-right');
                } else {
                    dropdownList.removeClass('dropdown-menu-right');
                }
            });
        });
    })(jQuery);
	
</script>
  <script src="<?php site_url(); ?>dist/table/vendor/metisMenu/metisMenu.min.js"></script>

        <script src="<?php site_url(); ?>dist/table/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php site_url(); ?>dist/table/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="<?php site_url(); ?>dist/table/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="<?php site_url(); ?>dist/table/dist/js/sb-admin-2.js"></script>


        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>

</body>
</html>
