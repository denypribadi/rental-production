<section class="do-blog-single-wrapper">
    	<div class="container">
    		<div class="row">
    			<!-- BLOG SINGLE CONTENT -->
    			<div class="do-blog-single-content col-md-8 col-sm-8 col-xs-12">
    				<div class="do-blog-single-img-wrapper">
                    <?php foreach($data_blog_detail as $v);?>
                   
    					<img src="<?php echo base_url('assets/img_blog/'.$v->gambar.'');?>" alt="Blog Single Image">

    					<div class="do-post-format-icon">
    						<i class="fa fa-quote-right"></i>
    					</div>
    				</div>

	    			<div class="do-blog-single-details ">
	    				<!--  POST TITLE -->
	    				<div class="do-blog-post-title-wrapper do-blog-single-inner-sec">
	    					<div class="do-blog-post-date">
	    						<span class="do-post-date"><?php echo $v->date;?></span>
                            
	    					</div>

	    					<div class="do-blog-post-titles">
	    						<h1><a href="#"><?php echo $v->judul;?></a></h1>
	    						<a href="#" class="do-blog-post-author">Posted By:<?php echo $v->pengirim;?></a>
	    					</div>
	    				</div>
	    				<!--  POST TITLE END-->

                        <!--  POST TEXT -->
                        <div class="do-blog-post-text do-blog-single-inner-sec">
                           <p><?php echo $v->desc;?>.</p>
                            <a href="<?php echo base_url('frontend/blog');?>" class="do-btn-round-outline">Back</a>
                        </div>
                        <!--  POST TEXT END -->

    				</div>
    			</div>
    			<!-- BLOG SINGLE CONTENT END -->

    	