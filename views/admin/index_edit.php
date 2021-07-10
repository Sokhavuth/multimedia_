<!--views/admin/index.php-->
<?php include('views/admin/partials/header.php'); ?>

<script src="<?php echo $BASE ?>/public/scripts/admin/post.js"></script>
<script src="<?php echo $BASE ?>/public/scripts/ckeditor/ckeditor.js"></script>
<link href='<?php echo $BASE ?>/public/styles/admin/partials/main.css' rel='stylesheet' />
<link href='<?php echo $BASE ?>/public/styles/admin/post.css' rel='stylesheet' />
<link href='<?php echo $BASE ?>/public/styles/admin/partials/listing.css' rel='stylesheet' />

<div class='Main region'>
    <div class='sidebar'>
        <?php include('views/admin/partials/menu.php') ?>
    </div>

    <div class='content'>
        <form action='<?php echo $BASE ?>/admin/post/edit/<?php echo $id ?>' method='post'>
            <input type='text' name='title' required value='<?php echo $post["title"] ?>' />
            <textarea name='content' id='editor'><?php echo $post["content"] ?></textarea>
            <div class='wrapper'>
                <select name='category' id="category">
                    <option>ជាតិ</option>
                    <option>អន្តរជាតិ</option>
                    <option>ជំនួញ</option>
                </select>
                <script>$("#category").val("<?php echo $post['category'] ?>").change()</script>

                <input type='text' name='thumb' value='<?php echo $post["thumb"] ?>' required />
                <input type='datetime-local' name='datetime' value="<?php echo $post['date'] ?>" required />
                <input type='hidden' name='video' value='<?php echo html_entity_decode($post["video"]) ?>' />
                <input type='submit' value='ចុះ​ផ្សាយ' />
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
               <option>ចប់​ហើយ</option>
               <option>មិន​ទាន់​ចប់</option> 
            </select>

            <input type='submit' value='បញ្ចូល​វីដេអូ' onClick='genJson()' />
        </div>

        <?php if($post['video'] != ''){ ?>
            <script>
                var entries = JSON.parse('<?php echo html_entity_decode($post["video"]) ?>')
            </script>
        <?php }else{ ?>
            <script>
               var entries = []
            </script>
        <?php } ?>

        <table class='viddata'></table>

        <style>
            .Listing{
                margin: 5px 0;
            }

            .Listing .wrapper{
                grid-template-columns: 100%;
                padding: 0;
            }
        </style>

        <div class='Listing'>
        <div class='wrapper'>
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
                <a href="<?php echo $BASE.'/admin/'.$route.'/delete/'.$post['id'] ?>">
                    <img class='delete' src="<?php echo $BASE ?>/public/images/delete.png" />
                </a>
            </div>
        </div>
        </div>
        </div>

        <script>
        if(entries.length > 0){

            let html = ``
            for(let v in entries){
                episode += 1
                html += `<tr>`
                html += `<td title="Delete" onClick="deleteRow(event)" class="episode">${episode}</td>`
                html += `<td class="td${episode}">${entries[v].type}</td>`
                html += `<td class="td${episode}">${entries[v].id}</td>`
                html += `<td class="td${episode}">${entries[v].ending}</td>`
                html += `</tr>`
            }

            if($('.viddata').html() === ''){
                $('.viddata').append('<tr>')
                $('.viddata').append('<th>ភាគ/លុប</th>')
                $('.viddata').append('<th>ប្រភេទ​</th>')
                $('.viddata').append('<th>អត្តសញ្ញាណ​</th>')
                $('.viddata').append('<th>ចប់ឬ​នៅ?</th>')
                $('.viddata').append('</tr>')
            }

            $('.viddata').append(`${html}`)

        }
        </script>
    </div>

    <script src="<?php echo $BASE ?>/public/scripts/ckeditor/config.js"></script>

</div>

<?php include('views/admin/partials/footer.php') ?>