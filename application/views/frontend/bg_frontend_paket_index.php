
<!-- **************************************
                Page Title
*************************************** -->
<section class="do-normal-page-title-section">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="do-page-title-wrapper">
                <div class="do-default-page-title col-md-7 col-sm-7 col-xs-12">
                    <h2>PAKET</h2>
                    <p>DAFTAR PAKET KAMI</p>
                </div>

                <div class="do-breadcumb">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                        <li><span>PAKET</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!-- DO PAGE TITLE END -->

<section class="do-blog-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="do-portfolio-works do-work-item-withspace">
                <?php
                foreach ($data_paket_home_header->result() as $paket) {
                    ?>
                    <div class="do-blog-masonry-items col-md-4 col-sm-4 col-xs-12">
                        <div class="do-blog-item-wrapper appear fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="do-blo-title-excerpt">
                                <h3 align="center">
                                    <strong><?php echo $paket->nama_paket; ?></strong>
                                </h3>
                                <?php
                                $detailpaket = $this->Web_model->data_paket_home($paket->id_paket);
                                foreach ($detailpaket->result() as $detail) {
                                    if ($detail->id_paket == $paket->id_paket) {
                                        echo '<p># ' . $detail->nama_barang . ' --- ' . $detail->jumlah . ' Unit(s)</p>';
                                    }
                                }
                                echo '<p><strong>Harga Rp. ' . number_format($paket->harga, 0, '', '.') . ',-</strong></p>'
                                ?>
                            </div>
                        </div>
                    </div> 
                    <?php
                }
                ?>
            </div> 
            <div class="do-blog-sidebar col-md-4 col-sm-4 col-xs-12">
            </div>
        </div>
        <?php // echo $this->pagination->create_links(); ?>  
    </div>
</section>