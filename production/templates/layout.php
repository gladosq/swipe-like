<!DOCTYPE html>
<html class="page" lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Swipe-like">
  <meta name="keywords" content="Swipe-like">
  <title>Swipe&Like</title>
  <link rel="preload" href="fonts/manrope-400.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/manrope-500.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/manrope-600.woff2" as="font" crossorigin="anonymous">
  <link rel="preload" href="fonts/manrope-800.woff2" as="font" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.min.css">
</head>
<body class="page-body">
  <header class="header">

    <?= isset($header) ? $header : ''; ?>

  </header>
  <main class="main">

    <?= isset($content) ? $content : ''; ?>

  </main>
  <footer class="footer" id="footer">

  </footer>
</body>
</html>
