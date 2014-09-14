<!doctype html>
<html class="no-js" lang="en" ng-app="rockyMountainApp">
<head>

    <meta charset="UTF-8">
    <title>Rocky Mountain Resources</title>
    
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
    <script src="/bower_components/angular-ui-router/release/angular-ui-router.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    
    <div id="logo0">
        <img class="vegas-background2" src="/bg.jpg" />
    </div>
    <div id="header">
        <a href="/"><img id="logo" src="/images/bg2.jpg" /></a>
        <nav>
            <a href="/">HOME</a>
            <a href="/#about">ABOUT US</a>
            <a href="/#team">TEAM</a>
            <a href="/#investments">PORTFOLIO</a>
            <a class="last">NEWS</a>
            <img id="shadow" src="/images/shadow.png" />
        </nav>
    </div>
    <div id="wrap">
        <div ui-view>
            
        </div>
        
        
        
        
        <footer>
            <div class="left">
                RMR © 2014
            </div>
            <div class="right">
                9595 Wilshire Blvd Beverly Hills, CA 90212
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
    var app = angular.module('rockyMountainApp',['ui.router']);
    
    // app.use(express.static(__dirname + '/app'));
    app.config(function($stateProvider){
        $stateProvider
        .state('team', {url: '/team', templateUrl: 'app/views/team/team.html', controller: 'teamController'})
        .state('team.item', {url: '/:id' , templateUrl: 'app/views/team/employee.html', controller: 'teamController'}) //this state inherits the team state URL of /team
        .state('about', {url: '/about', templateUrl: 'app/views/about/about.html'})
        .state('home', {url: '', templateUrl: 'app/views/home.html', controller: 'homepageController'})
        .state('portfolio', {url: '/investments', templateUrl: 'app/views/investments.html'});
        // .state('feed.item',       {url: '/feed/show/:id/item/:id_item', templateUrl: 'views/feed/main/item.html',   controller: 'ItemCrtl'      })
        
        // $routeProvider.when('/',
        // {
        //     controller: 'homepageController',
        //     templateUrl: 'app/views/home.html'
        // })
        // .when('/about',{
        //     templateUrl: 'app/views/about.html'
        // })
        // .when('/investments',{
        //     templateUrl: 'app/views/investments.html'
        // })
        // .when('/events',{
        //     templateUrl: 'app/views/events.html'
        // })
        // .when('/team',{
        //     templateUrl: 'app/views/team.html'
        // });
        
    });
    
    app.controller('teamController',function($rootScope, $scope, $stateParams){
        switch ($stateParams.id) {
        case 'chad':
            $scope.name = 'Chad';
            $scope.position = 'Position';
            $scope.bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            $scope.email = 'email@email.com';
            break;
        case 'person2':
            $scope.name = 'Person 2 Name';
            $scope.position = 'Person 2 Position';
            $scope.bio = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            $scope.email = 'email@email.com';
            break;
        default:
            
        }
    });
    
    app.controller('homepageController', function($scope){
        var bg = $('.vegas-background2');
        var logo = $('#logo0');
        // TweenLite.to(bg, 2, {left:"542px", backgroundColor:"black", borderBottomColor:"#90e500", color:"white"});
        var intro = new TimelineLite({
            onComplete: function(){
                $("#logo0").remove();
            }
        });
        $("body").addClass('home');
        //expand then fade
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