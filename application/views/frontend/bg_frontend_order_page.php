
<!-- **************************************
                Page Title
*************************************** -->
<section class="do-normal-page-title-section">
    <div class="container">
        <div class="row">
            <!-- Page Title -->
            <div class="do-page-title-wrapper">
                <div class="do-default-page-title col-md-7 col-sm-7 col-xs-12">
                    <h2>ORDER SERVICE</h2>
                    <p></p>
                </div>

                <div class="do-breadcumb">
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                        <li><span>ORDER</span></li>
                    </ul>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!-- DO PAGE TITLE END -->

<section class="do-portfolio-page-wrapper">
    <div class="container">
        <div class="row">
            <!--ISI-->
            <?php echo form_open('frontend/insertOrder'); ?>
            <div class="widget-content padding">
                <div class="form-horizontal">
                    <div class="form-group has-warning">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="" placeholder="Nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="" placeholder="Alamat" name="alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kota</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="" placeholder="Kota" name="kota">
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-sm-2 control-label">No Handphone</label>
                        <div class="col-xs-4">
                            <input type="text" maxlength="15" class="form-control" id="" placeholder="No Handphone" name="nohp">
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-xs-4">
                            <input type="email" class="form-control" id="" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Untuk Acara</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="" placeholder="Acara" name="acara">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Paket</label>
                        <div class="col-xs-4">
                            <select name="paket" class="form-control">
                                <option>--Pilih Paket--</option>
                                <?php
                                foreach ($data_paket_home_header->result() as $paket) {
                                    echo '<option value=' . $paket->id_paket . '>' . $paket->nama_paket . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Custom Item</label>
                        <div class="col-xs-4">
                            <textarea class="form-control" name="produk" placeholder="Custom Produk"></textarea>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-xs-4">
                            <button type="submit" class="btn btn-primary">Submit And Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!--ISI-->
        </div>
    </div>
</section>