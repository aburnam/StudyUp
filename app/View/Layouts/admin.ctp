<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>StudyUp - Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo $this->Html->url('/css/twitter/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo $this->Html->url('/css/twitter/bootstrap-responsive.css');?>" rel="stylesheet">
    <link href="<?php echo $this->Html->url('/css/twitter/bootstrap-mycustomize.css');?>" rel="stylesheet">
    <?php
    if(Configure::read('debug') > 0){
        echo $this->Html->script('jquery/jquery-1.7.1.min');
    }else{
    ?>
    <script src="https://www.google.com/jsapi?key=ABQIAAAAa44qXAhHZFTYANZzBZYvahSJNboRFY-KWCF1_jCiST2eg5RhLRSZtibOiJfIYeMGYIUbzDeGeg5hww" type="text/javascript"></script>
    <script type="text/javascript">
        google.load("jquery", "1.7.1");
    </script>
    <?php
    }
    ?>

    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Give a quick and non-cross-browser friendly divider */
      .content .span5 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>
  </head>

  <body>

    <?php echo $this->element('top-nav');?> 

    <div class="container">
        <div class="content">
            <div class="row">
                <div class="span12">
                <?php if(isset($title)){?>
                <div class="page-header">
                    <div class="row">
                        <div class="span8">
                            <h1><?php echo $title; ?> <small><?php if(isset($description)) echo $description;?></small></h1>
                        </div>
                        <div class="span4" style="text-align: right;">
                            <?php
                            if (fileExistsInPath(APP.'View'.DS.'Elements'.DS . "Actions" . DS . $this->request->params['controller'] . DS . $this->request->params['action'] . ".ctp")){
                                echo $this->element("Actions" . DS . $this->request->params['controller'] . DS . $this->request->params['action'], array());
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!--builds dashboard-->
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>
                <?php echo $content_for_layout; ?>

                </div>
            </div>
        </div>

    </div> 

    <script src="<?php echo $this->Html->url('/js/twitter/bootstrap.min.js');?>"></script>

  </body>
</html>
