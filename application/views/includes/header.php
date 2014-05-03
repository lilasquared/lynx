<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <!-- <link href="assets/css/sb-admin.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <!-- <link href="assets/css/font-awesome/font-awesome.min.css"rel="stylesheet" > -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  </head>
  <body>
  <?php $this->load->view('includes/nav'); ?>
  <div class="container">
    <div class="page-header">
      <h1>
        <?php echo $pageHead; ?>
        <small><?php echo $tagline;?></small>
      </h1>
    </div>
  <?php show_alert(); ?>