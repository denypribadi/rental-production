
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
                		<p>PLACE FOR CREATIVE WORKS</p>
                	</div>

                	<div class="do-breadcumb">
                		<ul>
                			<li><a href="#">HOME</a></li>
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
    <section class="do-portfolio-page-wrapper">
    	<div class="container">
    		<div class="row">
                
                <div class="do-portfolio-works-wrapper">
                    <!-- Filter Button Start -->
                    <div id="do-portfolio-filter" class="do-portfolio-filter-btn-group-wrapper">
                        <div class="do-portfolio-filter-btn-group">
                            <a href="#" class="selected" data-filter="*">ALL</a>
                             <?php foreach ($data_portofolio_kategori->result() as $katpor){?>
                             <a href="#" data-filter=".<?php echo $katpor->kategori_portofolio;?>"><?php echo $katpor->kategori_portofolio;?></a>
                             <?php } ?>
                        </div>
                    </div>
                    <!-- Filter Button End -->

                    <!-- WORKS -->
                    <div class="do-portfolio-works do-work-item-withspace">
                    <?php foreach ($data_portofolio as $portofolio){

                    $c = array (' ');
            $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
            $s = strtolower(str_replace($d,"",$portofolio->judul));
            $link = strtolower(str_replace($c, '-', $s));
            $isi=substr($portofolio->desc,0,10);
                        ?>
                        <div class="do-work-item <?php echo $portofolio->kategori_portofolio;?>">
                            <div class="do-work-item-inner-wrap">
                                <img src="<?php echo base_url('Assets/img_portofolio/'.$portofolio->img_portofolio.'');?>" alt="">
                                <div class="do-work-item-hover">
                                    <a href="portfolio-single-one.html" class="do-single-page-link"></a>
                                    <div class="do-work-item-details">
                                        <h3 class="do-work-item-title">
                                            <a href="<?php echo base_url().'frontend/portofolio_detail/'.$portofolio->id_portofolio.'-'.$link.'.html';?>"><?php echo $portofolio->judul;?></a>
                                        </h3>
                                        <span class="do-work-item-subtitle"><?php echo $portofolio->kategori_portofolio;?></span>
                                    </div>
                                    <a href="<?php echo base_url('Assets/img_portofolio/'.$portofolio->img_portofolio.'');?>" class="do-work-item-popup"></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                      


                        <div id="do-portfolio-next-page-nav">
                            <a href="misc/portfolio-with-space-2.html"></a>
                        </div>

                    </div>
                    <!-- WORKS END -->
                </div>
    		</div>
    	</div>
    </section>