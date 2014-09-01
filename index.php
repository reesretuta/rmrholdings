<!doctype html>
<html class="no-js" lang="en" ng-app="rockyMountainApp">
<head>

    <meta charset="UTF-8">
    <title>Title!</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- <link rel="stylesheet" href="/reset.css?v=1"> -->
    <link rel="stylesheet" href="/css/style.css?v=1">
    <link rel="stylesheet" href="/reset.css?v=1">
    
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
    <div class="header-bar clearfix">
                <div id="logo">
                    Rocky Mountain Resources
                </div>
    </div>
    <div id="wrap">
        <div id="sidebar">
            <div class="left-menu">
                <ul>
                    <li>
                        <a class="current" href="/">Home</a> 
                    </li>
                    <li>
                    <a href="#/about">About NGP</a></li>
                    <li><a href="#/investments">Investments</a></li>
                    <li><a href="#/events">Events &amp; Appearances</a></li>
                    <li><a href="#/team">Our Team</a></li>
                    <li><a href="#/news/">News</a></li>
                </ul>
            </div>
        </div>
        <div id="right-content">
                <div ng-view>
        
                </div>
        </div>
    </div>
    
    <div id="footer">
                    <p>Rocky Mountain Resources | 9595 Wilshire Blvd, Suite 310
Beverly Hills, CA 90212 | Tel. + 1 310.409.4113 | <a href="#tc" id="fancyBoxLink">Terms and Conditions </a></p>
            </div>
    <!-- main content wrapper end -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="/media/js/plugins.js"></script>        
    <script type="text/javascript" src="/media/js/site.js"></script>
    <script type="text/javascript">
    $(function(){
        $("#sidebar li").on('click',function(){
            $("#sidebar li").removeClass('current');
            $(this).addClass('current');
            
        });

        
        $("#sidebar li").not('.current').hover(function(){
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
            controller: 'aboutController',
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
        
    });
    
    app.controller('aboutController', function($scope){
        
    });
    
    
    </script>
</body>
</html>    