<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"> 

  <title>Books Been Read by Misha Berveno</title>

  <meta name="description" content="A collection of stories written and books read by Misha Berveno">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <?= css('/assets/css/normalize.css') ?>
  <?= css('/assets/css/app.css') ?>
	
  <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png?v=zX6QBrgJb8">
  <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png?v=zX6QBrgJb8" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png?v=zX6QBrgJb8" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png?v=zX6QBrgJb8" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png?v=zX6QBrgJb8" sizes="16x16">
  <link rel="manifest" href="/favicons/manifest.json?v=zX6QBrgJb8">
  <link rel="shortcut icon" href="/favicons/favicon.ico?v=zX6QBrgJb8">
  <meta name="apple-mobile-web-app-title" content="Stories Been Told">
  <meta name="application-name" content="Stories Been Told">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png?v=zX6QBrgJb8">
  <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=zX6QBrgJb8">
  <meta name="theme-color" content="#ffffff">


  <meta property="og:url" content="http://www.storiesbeentold.com/" /> 
  <meta property="og:title" content="Stories Been Told by Misha Berveno" /> 
  <meta property="og:description" content="There is writing, the stories I have to tell, and reading, the books I want to share." /> 
  <meta property="og:image" content="http://storiesbeentold.com/assets/images/SBT-logo2.png" />


  <script src="//use.typekit.net/wis8nvy.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-56636335-1', 'auto');
      ga('require', 'linkid', 'linkid.js');
  		ga('send', 'pageview');
	</script>
</head>

<body>
  <div class="grid">
    <header><?php snippet('header'); ?></header>
    <?php foreach($page->children()->visible()->flip() as $book): ?>
      <div class="main">
        <div class="col-4 title">
          <div class="title-float-right">
            <?php if($image = $book->image()): ?>
              <a href="<?php echo $book->link() ?>" target="_blank">
                <img src="<?php echo $image->url() ?>" width="100px">
              </a>
            <?php endif ?>
          </div>
        </div>

        <div class="col-8 text">
          <div class="text-float-left">
            <div class="book-dimensions">
              <h2><?php echo $book->title() ?></h2>
              <?php echo kirbytext($book->text()) ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</body>
</html>