<!DOCTYPE html>
<html>
  <head>
    <title>Contact - Pixel Heart</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  

<style type="text/css">

body{

    padding-right: 0px;
    padding-left: 0px;

/* IE10 Consumer Preview */ 
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #00A3EF 100%);

/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #00A3EF 100%);

/* Opera */ 
background-image: -o-linear-gradient(top, #FFFFFF 0%, #00A3EF 100%);

/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #00A3EF));

/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #00A3EF 100%);

/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #00A3EF 100%);
}
  
  html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -200px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 200px;
      }

  #footer {
    /*position : absolute;
    bottom : 0;
    width:100%;
    height : 200px;
    margin-top : 40px;*/
    background-image:url('prova3.png');
  }

.video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}

.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.navbar-inner{

  border-radius :0px;
  -moz-border-radius:0px;
  -webkit-border-radius:0px;

} 

#omarPopOver{

  left: -150px!important;
}

#omarPopOver .arrow{

  left: 72%!important;
}

</style>



  </head>
  <body >
<!--     <div class="well">
<a href="#" id="example" class="btn btn-success" rel="popover" data-content="It's so simple to create a tooltop for my website!" data-original-title="Twitter Bootstrap Popover">hover for popover</a>
</div> -->
<div id="wrap">
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <ul class="nav">
          <li><a id="logo" href="/"><img src="logo.png"></a></li>
          <li><a href="/">Pixel Rush</a></li>
          <!-- <li><a href="#"><img src="img/appstore.png"></a></li> -->
        </ul>

        <ul class="nav pull-right">
    <li><a id="example" href="#" rel="popover" data-placement="bottom" data-content="<p>Facebook</p> <p>Twitter</p> <p>Google+</p>" data-original-title="Share"><i class="icon-star icon-white"></i></a></li>
    <li><a href="/contact"><i class="icon-envelope icon-white"></i></a></li>    
</ul>
      </div>
    </div>
    
  
  <body>
    <!-- <center> -->
  <div class="container pagination-centered">

    <div class="page-header">
      <h1>Contact</h1>
    </div>

<?php  
  
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
  
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
  
?>  
        <form method="POST" action="send.php" class="form-horizontal">  
            <div class="control-group">  
                <!-- <label class="control-label" for="input1">Name</label>   -->
                <!-- <div class="controls">   -->
                    <input type="text" name="contact_name" id="input1" class="span5" placeholder="Your name">  
                <!-- </div>   -->
            </div>  
            <div class="control-group">  
                <!-- <label class="control-label" for="input2">Email Address</label>   -->
                <!-- <div class="controls">   -->
                    <input type="text" name="contact_email" id="input2" class="span5" placeholder="Your email address">  
                <!-- </div>   -->
            </div>  
            <div class="control-group">  
                <!-- <label class="control-label" for="input3">Message</label>   -->
                <!-- <div class="controls">   -->
                    <textarea name="contact_message" id="input3" class="span5" rows="8" placeholder="Your message"></textarea>  
                <!-- </div>   -->
            </div>  
            <!-- <div class="form-actions">   -->
                <input type="hidden" name="save" value="contact">  
                <button type="submit" class="btn btn-primary">Send</button>  
            <!-- </div>   -->
        </form> 

  </div>
  <!-- </center> -->

<!--     <div style="position:absolute;
                bottom:0;
                width:100%;
                height:60px;   /* Height of the footer */
                background:#6cf;">
      OMAR
    </div>  --> 
</div>
    <div id="footer"></div>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(function ()
{ $("#example").popover({ html    : true , 
                          template: '<div id="omarPopOver" class="popover"><div class="arrow" ></div><div class="popover-inner" ><h3 class="popover-title">OMAR</h3><div class="popover-content"><p></p></div></div></div>'});

});
</script>   

  </body>
</html>
