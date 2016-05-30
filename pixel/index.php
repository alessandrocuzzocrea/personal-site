<!DOCTYPE html>
<html>
  <head>
    <title>Pixel Heart</title>
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
  
  
  #footer {
    /*position : absolute;*/
    bottom : 0;
    width:100%;
    height : 200px;
    margin-top : 40px;
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
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <ul class="nav">
          <li><a id="logo" href="#"><img src="logo.png"></a></li>
          <li class="active"><a href="#">Pixel Rush</a></li>
          <!-- <li><a href="#"><img src="img/appstore.png"></a></li> -->
        </ul>

        <ul class="nav pull-right">
    <li><a id="example" href="#" rel="popover" data-placement="bottom" data-content="<p>Facebook</p> <p>Twitter</p> <p>Google+</p>" data-original-title="Share"><i class="icon-star icon-white"></i></a></li>
    <li><a href="contact"><i class="icon-envelope icon-white"></i></a></li>    
</ul>
      </div>
    </div>
    
  
  <body>
    <!-- <center> -->
  <div class="container pagination-centered">
              <!-- <center> -->
              <div class="video-container">

                <iframe width="853" height="480" src="http://www.youtube.com/embed/tj7al6MXu7U" frameborder="0" allowfullscreen></iframe>
              </div>
                <p><h1>ZIO BOH PIXEL RUN</h1></p>
              <!-- </center> -->
            
        <div class="row">
          <div class="span4"><img src="1.gif"><h2>ZIO MATTEO</h2></div> 
          <div class="span4"><img src="2.gif"><h2>ZIO OMAR</h2></div>
          <div class="span4"><img src="3.gif"><h2>ZIO KASSIS</h2></div> 
        </div>

        <div class="row">
          <div class="span4"><img src="4.gif"><h2>ZIO MATTEO</h2></div> 
          <div class="span4"><img src="5.gif"><h2>ZIO OMAR</h2></div>
          <div class="span4"><img src="6.gif"><h2>ZIO KASSIS</h2></div> 
        </div>

  </div>
  <!-- </center> -->

<!--     <div style="position:absolute;
                bottom:0;
                width:100%;
                height:60px;   /* Height of the footer */
                background:#6cf;">
      OMAR
    </div>  --> 

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