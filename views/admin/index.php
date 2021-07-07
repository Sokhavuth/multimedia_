<!--views/admin/index.php-->
<?php include('views/admin/partials/header.php'); ?>

<script src="<?php echo $BASE ?>/public/scripts/admin/post.js"></script>
<script src="<?php echo $BASE ?>/public/scripts/ckeditor/ckeditor.js"></script>
<link href='<?php echo $BASE ?>/public/styles/admin/partials/main.css' rel='stylesheet' />
<link href='<?php echo $BASE ?>/public/styles/admin/post.css' rel='stylesheet' />

<div class='Main region'>
    <div class='sidebar'>
        <?php include('views/admin/partials/menu.php') ?>
    </div>

    <div class='content'>
        <form action='<?php echo $BASE ?>/admin/post' method='post'>
            <input type='text' name='title' required placeholder='ចំណងជើង' />
            <textarea name='content' id='editor'></textarea>
            <div class='wrapper'>
                <select name='category'>
                    <option>ជាតិ</option>
                    <option>អន្តរជាតិ</option>
                    <option>ជំនួញ</option>
                </select>

                <input type='text' name='thumb' placeholder='តំណរភ្ជាប់​រូប' required />
                <input type='datetime-local' name='datetime' required />
                <input type='hidden' name='video' value='' />
                <input type='submit' value='បញ្ជូន' />
            </div>
        </form>

        <div class='video'>
            <select name='type'>
                <option>YouTube</option>
                <option>YTPlaylist</option>
                <option>Facebook</option>
            </select>
            <input type='text' name='id' required placeholder='ID' />

            <select name='ending'>
               <option>Yes</option>
               <option>No</option> 
            </select>

            <input type='submit' value='វីដេអូ' onClick='genJson()' />
        </div>

        <table class='viddata'></table>
    </div>
</div>

<script src="<?php echo $BASE ?>/public/scripts/ckeditor/config.js"></script>
<?php include('views/admin/partials/footer.php');