<!doctype html>
<html class="no-js" lang="en" ng-app="rockyMountainApp">
<head>

    <meta charset="UTF-8">
    <title>Title!</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/reset.css?v=1">
    <link rel="stylesheet" href="/css/style.css?v=1">
    
    
    <link rel="shortcut icon" href="/media/images/favicon.ico">
    <script type="text/javascript" src="/media/js/libs/modernizr-1.7.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
    <script src="/bower_components/angular/angular.js"></script>
    <script src="/bower_components/angular/angular-routes.js"></script>
</head>
<body>
    <img class="vegas-background2" src="/bg.jpg" />
    <div id="logo0"></div>
    <div id="header">
        <a href="/"><img id="logo" src="/bg2.jpg" /></a>
        <nav>
            <a href="/">HOME</a>
            <a href="/#about">ABOUT US</a>
            <a href="/#team">TEAM</a>
            <a href="/#investments">PORTFOLIO</a>
            <img id="shadow" src="/images/shadow.png" />
        </nav>
    </div>
    <div id="wrap">
        <div ng-view>
            
        </div>
        
        
        
        
        <footer>
            <div class="left">
                RMR © 2014
            </div>
            <div class="right">
                
            </div>
        </footer>

        
    </div>
    
    <!-- main content wrapper end -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/media/js/plugins.js"></script>        
    <script type="text/javascript" src="/media/js/site.js"></script>
    <script type="text/javascript">
    $(function(){
        $("nav a").on('click',function(){
            $("nav a").removeClass('current');
            $(this).addClass('current');
            $('body').removeClass('home');
        });

        
        $("nav li").not('.current').hover(function(){
            $(this).toggleClass('hover');
            $(this).css('background-color', '#241f79');
            },function(){
            $(this).toggleClass('hover');
            $(this).css('background-color', 'transparent');
            
          });
    });
    var app = angular.module('rockyMountainApp',['ngRoute']);
    // app.use(express.static(__dirname + '/app'));
    app.config(function($routeProvider){
        $routeProvider.when('/',
        {
            controller: 'homepageController',
            templateUrl: 'app/views/home.html'
        })
        .when('/about',{
            templateUrl: 'app/views/about.html'
        })
        .when('/investments',{
            templateUrl: 'app/views/investments.html'
        })
        .when('/events',{
            templateUrl: 'app/views/events.html'
        })
        .when('/team',{
            templateUrl: 'app/views/team.html'
        });
        
    });
    
    app.controller('homepageController', function($scope){
        var bg = $('.vegas-background2');
        var logo = $('#logo0');
        // TweenLite.to(bg, 2, {left:"542px", backgroundColor:"black", borderBottomColor:"#90e500", color:"white"});
        var intro = new TimelineLite({
            onComplete: function(){
                $(".vegas-background2, #logo0").remove();
            }
        });
        $("body").addClass('home');
    
        intro.to(bg,4 ,{
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
    });
    

    
    
    </script>
</body>
</html>    