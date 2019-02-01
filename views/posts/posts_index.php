<div class="span8">
    <?php foreach($posts as $post):?>

    <h1><?php echo $post['post_subject'];?></h1>
    <p><?php echo $post['post_text'];?></p>
    <div>
        <span class="badge badge-success">Posted <?php echo $post['post_created'];?></span>
        <div class="pull-right"><span class="label">alice</span> <span class="label">story</span>
            <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
    <hr>
<?php endforeach;?>

</div>
    <div class="span8">
        <h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?= $post['post_subject']; ?></a></h1>
        <p><? echo $post['post_text']?></p>
        <div>
            <span class="badge badge-success">Posted <?php echo $post['post_created']; ?></span><div class="pull-right"><span class="label label-primary">alice</span> <span class="label label-primary">story</span> <span class="label label-primary">blog</span> <span class="label label-primary">personal</span></div>
        </div>
        <hr>
    </div>






