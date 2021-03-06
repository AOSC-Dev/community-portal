<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="/img/favicons/ast.ico">

    <title>Anthon Starter - Screenshot</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/navgen.php';
    pushNavBar();
    addNavItem('/index.php', '/', $lang, array('en' => 'Portal', 'zh-cn' => '门户', 'zh-tw' => '門戶',), 'major');
    addNavItem('/ast/index.php', '/ast/', $lang, array('en' => 'AST_home', 'zh-cn' => 'AST 主页', 'zh-tw' => 'AST_home',), 'minor');
    addNavItem('/ast/summary/index.php', '/ast/summary/', $lang, array('en' => 'History', 'zh-cn' => '历史', 'zh-tw' => 'History',));
    addNavItem('/ast/screenshot/index.php', '/ast/screenshot/', $lang, array('en' => 'Screenshot', 'zh-cn' => '截图', 'zh-tw' => 'Screenshot',));
    addNavItem('/ast/about/index.php', '/ast/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => 'About',));
    popNavBar();
  ?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/ast.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">Cheese!</h1>
        <p class="lead blog-description">And Anthon Starter Looks In Frame</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post">
            <h4 class="blog-post-title">0.2.0 (Development Version)</h4>
            <p><a target="_blank" href="/img/screenshots/0.2.0/0.jpg"><img src="/img/screenshots/0.2.0/0.jpg" width="250"></a>
          </div>

          <div class="blog-post">
            <h4 class="blog-post-title">0.1.2</h4>
            <a target="_blank" href="/img/screenshots/0.1.2/0.jpg"><img src="/img/screenshots/0.1.2/0.jpg" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.2/1.jpg" margin-left="10px"><img src="/img/screenshots/0.1.2/1.jpg" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.2/2.jpg"><img src="/img/screenshots/0.1.2/2.jpg" width="250"></a>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">0.1.1 (Alpha)</h2>
            <a target="_blank" href="/img/screenshots/0.1.1/0.PNG"><img src="/img/screenshots/0.1.1/0.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.1/1.PNG"><img src="/img/screenshots/0.1.1/1.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.1/2.PNG"><img src="/img/screenshots/0.1.1/2.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.1/3.PNG"><img src="/img/screenshots/0.1.1/3.PNG" width="250"></a>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">0.1.0</h2>
            <a target="_blank" href="/img/screenshots/0.1.0/截图1.PNG"><img src="/img/screenshots/0.1.0/截图1.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.0/截图2.PNG"><img src="/img/screenshots/0.1.0/截图2.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.0/截图3.PNG"><img src="/img/screenshots/0.1.0/截图3.PNG" width="250"></a>
          </div>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
