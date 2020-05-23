<?php

require $_SERVER['DOCUMENT_ROOT'] . '/php2.local/autoload.php';

/**
 * 
 * @param App\Models\News $newsItem
 */

?>

<div id="page">
    <div id="page-bgtop">
        <div id="page-bgbtm">
            <div id="content">
                <?php if (isset($_GET['id'])): ?>               
                    <?php $newsItem = App\Models\News::findbyField(array($_GET['id'])); ?>
                    <div class="post">
                        <h2 class="title"><?php echo $newsItem->title; ?></h2>
                        <p class="meta">Posted by <a href="#"><?php echo $newsItem->author_name; ?></a> on <?php echo $newsItem->date; ?>
                        <div class="entry">
                            <p><?php echo $newsItem->content; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- end #content -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>       
</div>       
