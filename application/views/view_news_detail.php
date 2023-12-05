

<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1">
<div class="container">
<div class="breadcrumb-title">
<h2><?php echo $news_detail['news_title']; ?></h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index-2.html">Home</a></li>
<li><a href="blog-right-sidebar.html">Blog</a></li>
<li><?php echo $news_detail['news_title']; ?></li>
</ul>
</div>
</div>
</div>

<div class="blog-details-wrap ptb-100">
<div class="container">
<div class="row gx-5">
<div class="col-xl-8 col-lg-12">
<article>
<div class="post-img mt-0">
<img src="<?php echo base_url(); ?>public/uploads/<?php echo $news_detail['photo']; ?>" alt="Image">
<a href="posts-by-category.html" class="post-cat">Corporate</a>
</div>
<ul class="post-metainfo  list-style">
<li><i class="ri-calendar-event-line"></i><a href="posts-by-date.html"><?php echo $news_detail['news_date']; ?></a></li>
<li><i class="ri-message-2-line"></i>3 Comments</li>
</ul>
<h2><?php echo $news_detail['news_title']; ?></h2>
<div class="post-para">

<blockquote class="wp-block-quote">
<span class="wp-quote-icon"><i class="flaticon-quote"></i></span>
<div class="wp-quote-text">
<p><?php echo $news_detail['news_content_short']; ?></p>
</div>
</blockquote>

<?php echo $news_detail['news_content']; ?>


</div>
</article>


<div class="comment-box-wrap">
<div class="comment-box-title mb-30">
<h4><span>3</span> Comments</h4>
</div>
    <div class="comment-item-wrap">

        <?php $count = 0; ?>
        <?php foreach($comment as $comment_row): ?>
            <?php $count++; if($count % 2 == 0){ ?>
                <div class="comment-item <?php echo "reply"; ?>">
                    <div class="comment-author-img">
                        <img src="<?php echo base_url(); ?>assets/site/img/blog/author.jpg" alt="mage">
                    </div>
                    <div class="comment-author-wrap">
                        <div class="comment-author-info">
                            <div class="row align-items-start">
                                <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                    <div class="comment-author-name">
                                        <h5><?php echo $comment_row->client_name;?> <span class="comment-date"><?php echo $comment_row->date_created;?></span></h5>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                    <a href="#cmt-form" class="reply-btn"><?php //echo $count; ?></a>
                                </div> -->
                                <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                    <div class="comment-text">
                                        <p><?php echo word_limiter($comment_row->comment_body, 20);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }else{ ?>
                <div class="comment-item">
                    <div class="comment-author-img">
                        <img src="<?php echo base_url(); ?>assets/site/img/blog/author.jpg" alt="mage">
                    </div>
                    <div class="comment-author-wrap">
                        <div class="comment-author-info">
                            <div class="row align-items-start">
                                <div class="col-md-9 col-sm-12 col-12 order-md-1 order-sm-1 order-1">
                                    <div class="comment-author-name">
                                        <h5><?php echo $comment_row->client_name;?> <span class="comment-date"><?php echo $comment_row->date_created;?></span></h5>
                                    </div>
                                </div>
                                <!-- <div class="col-md-3 col-sm-12 col-12 text-md-end order-md-2 order-sm-3 order-3">
                                    <a href="#cmt-form" class="reply-btn"><?php //echo $count; ?></a>
                                </div> -->
                                <div class="col-md-12 col-sm-12 col-12 order-md-3 order-sm-2 order-2">
                                    <div class="comment-text">
                                        <p><?php echo word_limiter($comment_row->comment_body, 20);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        <?php endforeach; ?>


    </div>
<div id="cmt-form">
<div class="comment-box-title mb-25">
<h4>Leave A Comment</h4>
<p>Your email address will not be published. Required fields are marked.</p>
</div>
<?php echo form_open_multipart(base_url().'news/leave_comment/'.$news_detail['news_id'] ,array('class' => 'comment-form')); ?>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="hidden" name="news_id" id="name" value="<?php echo $news_detail['news_id']; ?>">
<input type="text" name="client_name" id="name" required placeholder="Name*">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" name="client_email" id="email" required placeholder="Email Address*">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<input type="url" name="client_website" id="website" placeholder="Website">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea name="comment_body" id="comment" cols="30" rows="10"  required="required" placeholder="Please Enter Your Comment Here" ></textarea>
</div>
</div>
</div>
<div class="row align-items-center">
<div class="col-md-12">
<div class="form-check checkbox">
<input class="form-check-input" type="checkbox" id="test_2">
    <label class="form-check-label" for="test_2">
        Save my name,email,website addres in this browser for the next time I commnet.
    </label>
</div>
</div>
<div class="col-md-12 mt-20">
<button class=" style btn-disabled"></button>
<button type="submit" class="btn style1">POST A COMMENT<i class="ri-arrow-right-s-line"></i></button>
</div>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-12">
<div class="sidebar">
<div class="sidebar-widget">
<div class="widget-title">
<h4>Categories <span></span></h4>
</div>
<ul class="list-style category-box">

    <?php foreach($categories as $category): ?>
    <li>
        <a href="posts-by-category.html">
        <i class="ri-arrow-right-line"></i>
        <?php echo $category->category_name; ?>
        </a>
    </li>
    <?php endforeach; ?>

</ul>
</div>

<?php if(count($news) > 1){ ?>
    <div class="sidebar-widget">
    <div class="widget-title">
    <h4>Trending Post <span></span></h4>
    </div>
    <div class="popular-post-widget">

        <?php foreach($news as $item): ?>
            <?php if($item->news_id != $news_detail['news_id']){ ?>
            <div class="pp-post-item">
            <a href="blog-details-right-sidebar.html" class="pp-post-img">
            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $item->photo; ?>" alt="Image">
            </a>
            <div class="pp-post-info">
            <span><i class="ri-calendar-event-line"></i><?php echo $item->news_date; ?></span>
            <h6>
            <a href="blog-details-no-sidebar.html">
                <?php echo $item->news_title; ?>
            </a>
            </h6>
            </div>
            </div>
            <?php } ?>
        <?php endforeach; ?>

    </div>
    </div>
<?php } ?>

<div class="sidebar-widget">
<div class="widget-title">
<h4>Our Forex Rates</h4>
</div>
<ul class="tag-list list-style">
    
    <?php foreach($currency as $rate): ?>
        <?php if($rate->currency != 'UGX'){ ?>
    <li class="col-lg-12 row" style="border-bottom:2px dotted navy;">
        <div class="text-danger col-lg-12"> <?php echo $rate->currency; ?></div>
        <div class="row" style="font-size:9pt!important;  padd-left:0px; padding-right:0px;">
            <div class="col-lg-6 text-success"><small>WE BUY: <?php echo $rate->we_buy; ?></small></div>
            <div class="col-lg-6 text-danger"><small>WE SELL: UGX <?php echo $rate->we_sell; ?> </small></div>
        </div>
    </li>
    <?php } ?>
    <?php endforeach; ?>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
