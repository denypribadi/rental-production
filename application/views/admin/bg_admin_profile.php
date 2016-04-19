<div class="content-page">
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-file'></i> Edit Profile Admin</h1>
            <h3>Form Edit Profile Admin</h3>            	
        </div>
        <!-- Page Heading End-->	
        <div class="row">
            <div class="col-md-12 portlets">
            </div>
        </div>

        <?php
        $x = $id->row();
        echo form_open_multipart('update_frontend/update_profile/' . $x->id_admin . '');
        ?>
        <?php
        foreach ($data_profile->result() as $x)
            ;
        ?>
        <form>
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Form Edit Profile Admin</strong> </h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <!--USERNAME-->
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">Username </label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="input-text" value="<?php echo $x->username; ?>"required>
                        </div>
                    </div>
                    <!--PASSWORD -->
                    <div class="form-group">
                        <label for="input-text" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" class="form-control" id="input-text" value="<?php echo $x->password; ?>"   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image Avatar </label>
                        <div class="col-sm-10">
                            <input type="file" name="userfile" class="btn btn-default">
                            <input type="submit" class="btn btn-default" name="upload" value="Save">
<?php echo form_close(); ?>
                        </div>
                    </div>
                    <input type="hidden"name="gambar_lama" value="<?php echo $x->avatar; ?>">
                    <a href="#"><img src="<?php echo base_url('assets/avatar/' . $x->avatar . ''); ?>"height="100px" width="100px"></a>




                </div>

            </div>
