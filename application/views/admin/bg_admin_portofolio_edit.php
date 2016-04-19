<?php
$x = $id_portofolio->row();
 echo form_open_multipart('update_frontend/update_portofolio/'.$x->id_portofolio.'');?>
   <div class="content-page">
<?php
foreach  ($data_portofolio_id->result() as $x);
?>


            <div class="content">
            <!-- Page Heading Start -->
			<div class="page-heading">
            <h1><i class='fa fa-file'></i> Settings PORTOFOLIO Frontend </h1>
            <h3> Settings PORTOFOLIO Frontend</h3>            	</div>
            <!-- Page Heading End-->				
            <!-- Page Heading End-->				
            <!-- Your awesome content goes here -->
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
			<label for="exampleInputEmail1">Judul </label>
			<input type="text" name="judul_portofolio" class="form-control" id="exampleInputEmail1" value="<?php echo $x->judul;?>" required>
			</div>
			<div class="form-group">
			<label for="exampleInputEmail1">Kategori Portofolio</label>
			<select name="kategori_portofolio" class="form-control">
				<?php 
echo "<option value=not_kategori>---- Pilih Kategori ----</option>";
foreach ($kategori_portofolio->result() as $g)
{
echo " <option value=$g->id_kategori_portofolio>$g->kategori_portofolio </option>";
}
?>
</select>
</div>
<div class="form-group">
			<label for="exampleInputEmail1">Client Portofolio </label>
			<input type="text" name="client_portofolio" class="form-control" id="exampleInputEmail1" value="<?php echo $x->client;?>" required>
			</div>
			
 <div class="form-group">
			<label class="col-sm-2 control-label">Desc PORTOFOLIO</label>
			<div class="col-sm-10">
			<textarea class="summernote" name="desc_portofolio"><?php echo $x->desc;?></textarea>
			</div>
            </div>
           <div class="form-group">
							<label class="col-sm-2 control-label">Image </label>
							<img src="<?php echo base_url('assets/img_portofolio/'.$x->img_portofolio.'');?>"height="250px" width="250px">
							<div class="col-sm-10">
							   <input type="file" name="userfile" class="btn btn-default">
							   <input type="hidden" name="gambar_lama" value="<?php echo $x->img_portofolio;?>">
							   <br>
							   <br>
							   			<input type="submit" class="btn btn-default" name="upload" value="Save">
							  			<?php echo form_close();?>
							</div>
							</div>
          
			</div>
			</div>
			</div>
			</div>
			</div>