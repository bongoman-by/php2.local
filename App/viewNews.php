<title>Hовости</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <div id="header-wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="#">Новости</a></h1>

                </div>
            </div>
        </div>
        <!-- end #header -->
        <div id="page">
            <div id="page-bgtop">
                <div id="page-bgbtm">
                    <div id="content">
                        <?php foreach ($newsList as $newsItem): ?>
                            <div class="post">
                                <h2 class="title"><a href='<?php echo 'app/article.php?id=' . $newsItem->id; ?>'><?php echo $newsItem->title . ' # ' . $newsItem->id; ?></a></h2>
                                <p class="meta">Posted by <a href="#"><?php echo $newsItem->author_name; ?></a> on <?php echo $newsItem->date; ?>
                                <div class="entry">
                                    <p><?php echo $newsItem->short_content; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- end #content -->
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>
            <!-- end #page -->
        </div>        
    </div>
</body>
</html>
