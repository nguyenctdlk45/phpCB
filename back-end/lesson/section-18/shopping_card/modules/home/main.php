<?php
$list_mobile = get_product(1);
$list_laptop= get_product(2);
?>
<div id="main-content-wp" class="home-page">
        <div class="wp-inner clearfix">
                <?php
                get_sidebar();
                ?>
                <div id="content" class="fl-right">
                        <div class="section list-cat">
                                <div class="section-head">
                                        <h3 class="section-title">Điện thoại</h3>
                                </div>
                                <div class="section-detail">
                                        <?php
                                        if (!empty($list_mobile)) {
                                        ?> 
                                        <ul class="list-item clearfix">
                                                <?php
                                                foreach ($list_mobile as $item) {
                                                ?>          
                                                                <li>
                                                                        <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                                                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                                                        </a>
                                                                        <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                                                        <p class="price"><?php echo $item['price'];  ?></p>
                                                                </li>
                                                        
                                                <?php
                                                }
                                                ?>
                                        </ul>
                                        <?php
                                        }
                                        ?>
                                </div>
                        <div class="section list-cat">
                                <div class="section-head">
                                        <h3 class="section-title">laptop</h3>
                                </div>
                                <div class="section-detail">
                                        <?php
                                        if (!empty($list_laptop)) {
                                        ?> 
                                        <ul class="list-item clearfix">
                                                <?php
                                                foreach ($list_laptop as $item) {
                                                ?>          
                                                                <li>
                                                                        <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                                                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                                                        </a>
                                                                        <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                                                        <p class="price"><?php echo $item['price'];  ?></p>
                                                                </li>
                                                        
                                                <?php
                                                }
                                                ?>
                                        </ul>
                                        <?php
                                        }
                                        ?>
                                </div>
                        </div>
                        
                </div>
        </div>
</div>