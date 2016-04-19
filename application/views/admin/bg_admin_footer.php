<div class="content-page">
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-file'></i> Edit Footer Frontend</h1>
            <h3>Form Edit Footer Frontend</h3>            	
        </div>
        <!-- Page Heading End-->	
        <div class="row">
            <div class="col-md-12 portlets">
            </div>
        </div>

        <?php
        $x = $id->row();
        echo form_open_multipart('admin/update_footer/' . $x->id_footer . '');
        ?>
        <?php
        foreach ($data_footer->result() as $x)
            ;
        ?>
        <form>
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Form Edit Footer Frontend</strong> </h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <!--ALAMAT-->
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">Alamat </label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" id="input-text" value="<?php echo $x->alamat; ?>"required>
                        </div>
                    </div>
                    <!--NOTELP -->
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">No telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="notelp" class="form-control" id="input-text" value="<?php echo $x->telp; ?>"   required>
                        </div>
                    </div>
                    <!--EMAIL-->
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="input-text" value="<?php echo $x->email; ?>"   required>
                        </div>
                    </div>
                    <!--SUBJECT-->
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">Subject footer</label>
                        <div class="col-sm-10">
                            <input type="text" name="subject_footer" class="form-control" id="input-text" value="<?php echo $x->subject; ?>"   required>
                        </div>
                        <input type="submit" class="btn btn-default" name="upload" value="Save">
                    </div>
                    </form>
<?php echo form_close(); ?>
                </div>


            </div>

    </div>
