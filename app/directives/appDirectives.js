var directives = angular.module('rockyMountainApp.directives',[]);

directives.directive('teamBio',function($timeout){
  return {
    restrict: 'A',
    link: function(scope, elem, attrs){
      // var p = $("#teamBios").position();
      // var e = elem.position();
      // console.log(p,e);
      // if (isMobile.matches) {
      //   window.scroll(0,435);
      // }      
      // $timeout(function(){
      // window.scroll(0,435);
      //   console.log('asdfsd');
      //     // var currentEl = $('#'+attrs.nbScroll);
      //     // $('html,body').animate({scrollTop: currentEl.offset().top},'slow');
      // },500);
      scope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState){
          event.targetScope.$watch('$viewContentLoaded', function(){
            
            $timeout(function(){
              
              if (isMobile.matches) {
                window.scroll(0,435);
              }
            });
            
          })

      });
      
      
      
      
      
    }
  };
  
});



