<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="app.js" defer></script>
</head>
<body>
<?php include('nav.php');?>
  <main>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
      {
        "width": "100%",
        "height": "100%",
     
        "screener_type": "crypto_mkt",
        "displayCurrency": "BTC",
        "colorTheme": "dark",
        "locale": "en"
      }
      </script>
  </main>
</body>
</html>