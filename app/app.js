var isMobile = window.matchMedia("only screen and (max-width: 420px)");

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
      
    $("#nav-mobile .label").on('click',function(){
      $(".nav").show();
      
    });
      
    $("#nav-mobile .nav").on('click',function(){
      
      $(".nav").hide();
      
    });
      
});
var app = angular.module('rockyMountainApp',['ui.router','rockyMountainApp.controllers','rockyMountainApp.directives']);

// app.use(express.static(__dirname + '/app'));
app.config(function($stateProvider, $locationProvider){
  
  
    $stateProvider
    .state('home', 
        {url: '/home', templateUrl: 'app/views/home.html', controller: 'homepageController'})
    .state('animation',
        {url: '/', templateUrl: 'app/views/home.html', controller: 'introAnimationController'})
    .state('team',
        {url: '/team', templateUrl: 'app/views/team/team.html', controller: 'teamController'})
    .state('team.item', 
        {url: '/:id' , templateUrl: 'app/views/team/employee.html', controller: 'teamController'}) //this state inherits the team state URL of /team
    .state('about', 
        {url: '/about', templateUrl: 'app/views/about/about.html', controller: 'aboutController'})
    .state('contact', 
        {url: '/contact', templateUrl: 'app/views/contact.html', controller: 'contactController'})
    .state('operations',
        {url: '/operations', templateUrl: 'app/views/operations/operations.html', controller: 'operationsController'})
    .state('operations.type',
        {url: '/:id', controller: 'operationsController', templateUrl: 'app/views/operations/industry.html', controller: 'operationsController'});
        
        
        $locationProvider.html5Mode(true);
        
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

app.run(function($rootScope){
    $rootScope.$on('$stateChangeStart', 
        function(event, toState, toParams, fromState, fromParams){ 
        });
});



