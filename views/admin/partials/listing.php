<!--views/admin/partials/listing.php-->
<link href='<?php echo $BASE ?>/public/styles/admin/partials/listing.css' rel='stylesheet' />
<script src="<?php echo $BASE ?>/public/scripts/admin/paginate.js"></script>

<div class='Listing region'>
    <div class='info'><?php echo $message ?></div>

    <div class="wrapper">
        <?php foreach($posts as $post){ ?>
        <div class='item'>
            <div class="thumb-wrapper">
                <a href="<?php echo $BASE.'/'.$route.'/'.$post['id'] ?>">
                    <img class="thumb" src="<?php echo $post['thumb'] ?>" />
                    <?php if($post['video']){ ?>
                    <img class='play-icon' src="<?php echo $BASE ?>/public/images/play.png" />
                    <?php } ?>
                </a>
            </div>

            <div class='title-wrapper'>
                <div class='title'>
                    <a href="<?php echo $BASE.'/'.$route.'/'.$post['id'] ?>"><?php echo $post['title'] ?></a>
                </div>
                <div class='author'><?php echo $post['author'] ?></div>
            </div>

            <div class="edit-delete">
                <a href="<?php echo $BASE.'/admin/'.$route.'/edit/'.$post['id'] ?>">
                    <img class='edit' src="<?php echo $BASE ?>/public/images/edit.png" />
                </a>
                <a href="<?php echo $BASE.'/admin/'.$route.'/delete/'.$post['id'] ?>">
                    <img class='delete' src="<?php echo $BASE ?>/public/images/delete.png" />
                </a>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class='pagination'>
        <img onClick="paginate('<?php echo $route ?>', '<?php echo $BASE ?>')" 
        src="<?php echo $BASE ?>/public/images/load-more.png" />
    </div>
</div>