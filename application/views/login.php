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

</head>
<!-- BEGIN HEAD -->
<body class="">


<?php echo $this->load->view('share/menu', '', TRUE);?>

<div class="page-login">
    <div class="container">
        <div class="page-login__wrap">
            <h2 class="page-login__heading">Login</h2>
            <p class="page-login__description">

            </p>

            <form action="#" class="page-login__form">
                <div class="form-group">
                    <a href="<?php echo site_url();?>pendonor" class="btn btn-outline-info btn-lg btn-block">
                        <span class="text">Pendonor</span>
                    </a>
                </div>

                <div class="page-login__separator"><span>or</span></div>

                <div class="form-group">
                    <div class="form-control-inline-icon inline-icon-right">
                        <input id="email" type="text" class="form-control" placeholder="User">
                        <span class="icon iconfont-right iconfont-user"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-control-inline-icon inline-icon-right">
                        <input id="password" type="password" class="form-control" placeholder="Password">
                        <span class="icon iconfont-right iconfont-block"></span>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <a href="<?php site_url();?>rs/profil_rs" ><button type="button" class="btn btn-primary btn-block page-login__submit-btn">Login</button></a>
                </div>
            </form>
        </div>
    </div>
</div>


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


</body>
</html>
