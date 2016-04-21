<!-- Left Sidebar Start -->
<?php $avatar = $this->session->userdata('avatar'); ?>
<?php $nama_user = $this->session->userdata('username'); ?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->
        <form role="search" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="profile.html" class="rounded-image profile-image"><img src="<?php echo base_url('Assets/avatar/' . $avatar . ''); ?>"></a>
            </div>
            <div class="col-xs-8">


                <div class="profile-text">Welcome <b><?php echo $nama_user; ?></b></div>
                <div class="profile-buttons">
                    <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                    <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                    <a href="javascript:;" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">

            <ul>
                <?php foreach ($id->result() as $tampil)
                    ; ?>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Frontend</span> 
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="<?php echo base_url('admin/about/' . $tampil->id_about . ''); ?>"><span>Edit About US</span></a></li>
                        <li><a href="<?php echo base_url('admin/logo/' . $tampil->id_logo . ''); ?>"><span>Edit Logo Company</span></a></li>
                        <li><a href="<?php echo base_url('admin/slider/' . $tampil->id_slider . ''); ?>"><span>Edit Slider</span></a></li>
                        <li><a href="<?php echo base_url('admin/footer/' . $tampil->id_footer . ''); ?>"><span>Edit Footer </span></a></li>
                        <li><a href="<?php echo base_url('admin/blog/'); ?>"><span>Settings Produk</span></a></li>
                        <li><a href="<?php echo base_url('admin/paket/'); ?>"><span>Settings Paket</span></a></li>
                        <li><a href="<?php echo base_url('admin/portofolio/'); ?>"><span>Settings Portofolio</span></a></li>
                    </ul></li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-home-3'></i><span>Admin</span> 
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href="<?php echo base_url('admin/profile/' . $tampil->id_admin . ''); ?>"><span>Edit Profile </span></a></li>
                    </ul></li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <div class="clearfix"></div><br><br><br>
    </div>

</div>
<!-- Left Sidebar End -->		    