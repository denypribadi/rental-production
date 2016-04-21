
<!-- **************************************
                Page Title
*************************************** -->
<section class="do-normal-page-title-section">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="do-page-title-wrapper">
                <div class="do-default-page-title col-md-7 col-sm-7 col-xs-12">
                    <h2>PORTFOLIO</h2>
                    <p></p>
                </div>

                <div class="do-breadcumb">
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">HOME</a></li>
                        <li><span>PORTFOLIO</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!-- DO PAGE TITLE END -->


<!-- **************************************
            SINGLE PAGE CONTENT
*************************************** -->
<section class="do-portfolio-single-page-wrapper">
    <div class="container">
        <div class="row">
            <?php
            foreach ($data_portofolio_detail as $verliporto)
                ;
            ?>
            <!-- DO SINGLE PAGE DETAILS -->
            <div class="do-portfolio-single-page-content">

                <!-- DO PORTFOLIO MAIN IMAGE -->
                <div class="do-single-portfolio-img-wrapper">
                    <img src="<?php echo base_url('Assets/img_portofolio/' . $verliporto->img_portofolio . ''); ?>" alt="">
                </div>
                <!-- DO PORTFOLIO MAIN IMAGE END -->

                <!-- DO PORTFOLIO DETAILS -->
                <div class="do-single-portfolio-details">
                    <div class="col-md-8 col-sm-7 col-xs-12 do-image-details">
                        <h2><?php echo $verliporto->judul; ?></h2>
                        <p>
<?php echo $verliporto->desc; ?>
                    </div>

                    <div class="col-md-4 col-sm-5 col-xs-12 do-wrok-info">


                        <div class="do-portfolio-client-info">
                            <h3>client</h3>
                            <p><?php echo $verliporto->client; ?></p>
                        </div>
                    </div>
                </div>
                <!-- DO PORTFOLIO DETAILS END -->

                <!-- DO PORTFOLIO SUB IMAGE -->

            </div>
            <!-- DO SINGLE PAGE DETAILS END -->


            <!-- DO RELETED WORKS -->

        </div>
    </div>



</section>