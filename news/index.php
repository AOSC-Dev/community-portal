<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Summary of AOSC OS">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbaichina@members.fsf.org>">
    <link rel="icon" href="/img/favicons/aosc.ico">

    <title>Community Portal - News</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
  </head>

  <body>
  <?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/navgen.php';
    pushNavBar();
    addNavItem('/index.php', '/', $lang, array('en' => 'Portal', 'zh-cn' => '门户', 'zh-tw' => '門戶',), 'major');
    popNavBar();
  ?>

  <div class="jumbotron">
  <div class="container section-welcome">
      <div class="row">
      <div class="col-md-8 col-xs-8">
        <h1>News</h1>
        <p>Freshly off the shelf</p>
      </div>
      <div class="col-md-4 col-xs-4 shortcuts">
        <img src="/img/aosc.png">
          </div>
        </div>
  </div>
</div>
    
    <div class="container">

      <div class="row">

        <div class="col-sm-9 blog-main">

		<div class="blog-post">
            <h2 class="blog-post-title">Support of Anthon Starter 0.1.x Stopped</h2>
            <p class="lead blog-description">August 30th, 2014</p>
            <p>On the discussion about 0.1 we have discussed the endless bugs in 0.1. Developer @liushuyu said that he was 
            considering to give up 0.1.X for however hard he has tried, there were still many bugs which were caused by CMD.<br />
            (See also <a href="https://github.com/AOSC-Dev/Anthon-Starter/issues/4">issue #4</a>)</p>
            <p>So with a long-term consideration, we decided to give up all the development and technological support of version
            0.1.x. If you're going to use 0.1.x version of Anthon-Starter, you'll have no guarantee. We are very sorry to have
            caused you so much inconvenience.</p>
            <p>We need your support! The development of 0.2 is pushing forward slowly. Source code can be seed at out git repository
            on Github.</p>
            <p>Source codes and binaries of 0.1.x is still avaliable online. You can still download them, but we won't
            guarantee whether they won't cause damage or not.</p>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">Anthon Starter 0.1.2.0 Hits Green</h2>
            <p class="lead blog-description">July 11th, 2014</p>
            <p>On July 11th Junde Yi and his team for Anthon Starter announced the release of Anthon Starter 0.1.2.0. 
            Anthon Starter is a tool for installation / boot deployment of AOSC OS, and it's currently based on Batch. </p>
            <p>Yi also announced his plan for 0.2.0 branch, as it will be more portable according to his annoucement.</p>
            <p>For more details please check out the <a href="/ast">Anthon Starter Homepage</a>.</p>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">AnthonOS Final Release "Doge"</h2>
            <p class="lead blog-description">July 10th, 2014</p>
            <p>AnthonOS, the first final product of AOSC OS2 project was announced by Jeff Bai on July 10th, 2014.</p>
            <p>AnthonOS comes with KDE 4 as its default desktop environment, wrapped up with a complete suite of 
            graphical applications to make ease of use throughout your day: games, package management, multimedia
            and even some scientific or studio sensation!</p>
            <p><b>Known issues:</b></p>
            <ul>
              <li> You must select "This is a EFI system" when you install AnthonOS to prevent error on GRUB installation;</li>
              <li> AnthonOS defaults $HOME to /home/live although you can change your username when installing;</li>
              <li> It's pretty big due to inclusion of development toolkits and some unnecessary debug symbols;</li>
              <li> GRUB may think that there's a OSX if you boot the iso on a flash drive;</li>
            </ul>
            <p>For more details and download please check out the <a href="/aosc-os">AOSC OS Homepage</a>.</p>
          </div>

          <div class="blog-post">
            <h4>Well, it's always too late to check old news as we will not keep them...</h4>
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
