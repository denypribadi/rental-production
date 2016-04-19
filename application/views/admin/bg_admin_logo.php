	 <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            					<!-- Page Heading Start -->
				<div class="page-heading">
            	<h1><i class='fa fa-file'></i> Logo Company</h1>
            	<h3>Form Edit Logo</h3>            	
            	</div>
            	<!-- Page Heading End-->	
            	<div class="row">
				<div class="col-md-12 portlets">
				</div>
				</div>

<?php
$x = $id->row();
 echo form_open_multipart('update_frontend/upload_logo/'.$x->id_logo.'');?>
<?php
foreach ($data_logo->result() as $x);
?>
				
				<div class="widget">
					<div class="widget-header transparent">
						<h2><strong>Form Edit LOGO</strong> </h2>
						<div class="additional-btn">
							<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
							<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
						</div>
					</div>
					<div class="widget-content padding">
					
						
						
					
						  
						  
						  
						  
						  
						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Image </label>
							<div class="col-sm-10">
							   <input type="file" name="userfile" class="btn btn-default">
							   			<input type="submit" class="btn btn-default" name="upload" value="Save">
							  			<?php echo form_close();?>
							</div>
						  </div>
						  <input type="hidden"name="gambar_lama" value="<?php echo $x->logo;?>">
						<a href="#" class="rounded-image profile-image"><img src="<?php echo base_url('assets/company/logo/'.$x->logo.'');?>"></a>
						
						  
					
					</div>
					
				</div>
		