  
<?php echo form_open_multipart('update_frontend/insert_blog'); ?>
<div class="content-page">
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-file'></i> Settings BLOG Frontend</h1>
            <h3> Settings BLOG Frontend</h3>            	</div>
        <!-- Page Heading End-->				<!-- Page Heading End-->				<!-- Your awesome content goes here -->
        <div class="row">
            <div class="col-sm-6 portlets">
                <div class="widget">
                    <div class="widget-header transparent">

                        <h2><strong>Input New</strong> BLOG</h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content padding">							
                        <div id="basic-form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul </label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Enter Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori </label>
                                <select name="kategori" class="form-control">
                                    <?php
                                    echo "<option value=not_kategori>---- Pilih Kategori ----</option>";
                                    foreach ($kategori_blog->result() as $g) {
                                        echo " <option value=$g->id_kategori_blog>$g->kategori </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pengirim </label>
                                <input type="text" name="pengirim" class="form-control" id="exampleInputEmail1" placeholder="Enter Pengirim" required>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Desc BLOG</label>
                                <div class="col-sm-10">
                                    <textarea class="summernote" name="deskripsi_blog"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Image </label>
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
                        <h2><strong> Settings BLOG Frontend</strong> </h2>
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
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </tfoot>

                                <tbody>

<?php
$no = 1;
foreach ($data_blog as $verlipost) {
    $gambarblog = $verlipost->gambar;
    $status = $verlipost->status;
    ?>


                                        <tr>
                                            <td><?php echo $no++; ?>
                                            <td><b><?php echo $verlipost->judul; ?></b></td>
                                            <td><i>  <span class="label label-default"><?php echo $verlipost->kategori; ?></span></i></td>
                                            <td><img src="<?php echo base_url('assets/img_blog/' . $verlipost->gambar . ''); ?>"height="80px"width="80px"></td>
                                            <td><?php if ($status == '0') { ?>
                                                    <span class="label label-danger">Not Publish</span>
    <?php } else if ($status == '1') { ?>
                                                    <span class="label label-success">Publsih</span>
                                                <?php } ?>
                                            </td>

                                            <td>
                                                <div class="btn-group btn-group-xs">
                                                    <a href="<?php echo base_url('admin/blog_delete/' . $verlipost->id_blog . ''); ?>"data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                    <a href="<?php echo base_url('admin/blog_edit/' . $verlipost->id_blog . ''); ?>" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
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
