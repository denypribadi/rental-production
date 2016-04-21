  
<?php echo form_open_multipart('update_frontend/insert_portofolio'); ?>
<div class="content-page">

    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-file'></i> Settings Portofolio</h1>
            <h3> Settings Portofolio</h3>            	</div>
        <!-- Page Heading End-->				<!-- Page Heading End-->				<!-- Your awesome content goes here -->
        <div class="row">
            <div class="col-sm-6 portlets">
                <div class="widget">
                    <div class="widget-header transparent">

                        <h2><strong>Input New</strong> PORTOFOLIO</h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content padding">							
                        <div id="basic-form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul Portofolio</label>
                                <input type="text" name="judul_portofolio" class="form-control" id="exampleInputEmail1" placeholder="Enter Judul Portofolio" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori Portofolio</label>
                                <select name="kategori_portofolio" class="form-control">
                                    <?php
                                    echo "<option value=not_kategori>---- Pilih Kategori ----</option>";
                                    foreach ($kategori_portofolio->result() as $g) {
                                        echo " <option value=$g->id_kategori_portofolio>$g->kategori_portofolio </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Client </label>
                                <input type="text" name="client_portofolio" class="form-control" id="exampleInputEmail1" placeholder="Enter Client" required>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Desc Portofolio</label>
                                <div class="col-sm-10">
                                    <textarea class="summernote" name="desc_portofolio"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Image Portofolio </label>
                                <div class="col-sm-10">
                                    <input type="file" name="userfile" class="btn btn-default">
                                    <br>
                                    <br>
                                    <input type="submit" class="btn btn-default" name="upload" value="Save">
                                    <?php echo form_close(); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <h2><strong> Settings Produk</strong> </h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content">
                        <br>					
                        <div class="table-responsive">

                            <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>

                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Image</th>
                                        <th>Client</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>

                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Image</th>
                                        <th>Client</th>
                                        <th></th>
                                    </tr>
                                </tfoot>

                                <tbody>
                                    <?php
                                    foreach ($data_portofolio as $verlipost) {
                                        $gambarporto = $verlipost->img_portofolio;
                                        ?>


                                        <tr>
                                            <td><b><?php echo $verlipost->judul; ?></b></td>
                                            <td><i>  <span class="label label-default"><?php echo $verlipost->kategori_portofolio; ?></span></i></td>
                                            <td><img src="<?php echo base_url('assets/img_portofolio/' . $gambarporto . ''); ?>"height="80px"width="80px"></td>
                                            <td> <span class="label label-success"><?php echo $verlipost->client; ?></span>
                                            </td>

                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a href="<?php echo base_url('admin/portofolio_delete/' . $verlipost->id_portofolio . ''); ?>"data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                    <a href="<?php echo base_url('admin/portofolio_edit/' . $verlipost->id_portofolio . ''); ?>" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                </div>
                                            </td>

                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
