<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <meta charset="UTF-8">
    <title>Title!</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- <link rel="stylesheet" href="/reset.css?v=1"> -->
    <link rel="stylesheet" href="/style.css?v=1">
    <link rel="stylesheet" href="/reset.css?v=1">
    
    <link rel="shortcut icon" href="/media/images/favicon.ico">
    <script type="text/javascript" src="/media/js/libs/modernizr-1.7.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
</head>


<body>
    


    <img class="vegas-background2" src="/bg.jpg" />
    <div id="logo">
        
    </div>
    
    <!-- main content wrapper end -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/media/js/plugins.js"></script>        
    <script type="text/javascript" src="/media/js/site.js"></script>
    <script type="text/javascript">
        var bg = $('.vegas-background2');
        var logo = $('#logo');
        // TweenLite.to(bg, 2, {left:"542px", backgroundColor:"black", borderBottomColor:"#90e500", color:"white"});
        var intro = new TimelineLite();
        
        intro.to(bg,5,{
          // opacity: 0,
          scale: 2, 
          transformOrigin:"50% 50% 0",
          // ease: 'easeInQuart',
          ease: 'easeInCubic',
          // onStart: function(){
//             $("#questions").fadeOut(1000);
//           }
        })
        .to(bg,1.5,{opacity:0},'-=0.5')
        .to(logo,1,{
            // scale: 15, 
            opacity:0,
            transformOrigin:"50% 50% 0",
            ease: 'easeOutCubic'
        },'=1');

    </script>
</body>
</html>    