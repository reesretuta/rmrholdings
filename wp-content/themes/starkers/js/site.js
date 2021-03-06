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
// var app = angular.module('rockyMountainApp',['ui.router','rockyMountainApp.controllers','rockyMountainApp.directives']);
//
// // app.use(express.static(__dirname + '/app'));
// app.config(function($stateProvider, $locationProvider){
//
//
//     $stateProvider
//     .state('home',
//         {url: '/home', templateUrl: 'app/views/home.html', controller: 'homepageController'})
//     .state('animation',
//         {url: '/', templateUrl: 'app/views/home.html', controller: 'introAnimationController'})
//     .state('team',
//         {url: '/team', templateUrl: 'app/views/team/team.html', controller: 'teamController'})
//     .state('team.item',
//         {url: '/:id' , templateUrl: 'app/views/team/employee.html', controller: 'teamController'}) //this state inherits the team state URL of /team
//     .state('about',
//         {url: '/about', templateUrl: 'app/views/about/about.html', controller: 'aboutController'})
//     .state('contact',
//         {url: '/contact', templateUrl: 'app/views/contact.html', controller: 'contactController'})
//     .state('operations',
//         {url: '/operations', templateUrl: 'app/views/operations/operations.html', controller: 'operationsController'})
//     .state('operations.type',
//         {url: '/:id', controller: 'operationsController', templateUrl: 'app/views/operations/industry.html', controller: 'operationsController'});
//
//
//         $locationProvider.html5Mode(true);
//
//     // $routeProvider.when('/',
//     // {
//     //     controller: 'homepageController',
//     //     templateUrl: 'app/views/home.html'
//     // })
//     // .when('/about',{
//     //     templateUrl: 'app/views/about.html'
//     // })
//     // .when('/investments',{
//     //     templateUrl: 'app/views/investments.html'
//     // })
//     // .when('/events',{
//     //     templateUrl: 'app/views/events.html'
//     // })
//     // .when('/team',{
//     //     templateUrl: 'app/views/team.html'
//     // });
//
// });
//
// app.run(function($rootScope){
//     $rootScope.$on('$stateChangeStart',
//         function(event, toState, toParams, fromState, fromParams){
//         });
// });











/////////////////////////////








var controllers = angular.module('rockyMountainApp.controllers',[]);
  

controllers.controller('operationsController',function($rootScope, $scope, $stateParams){
    removeAnimation();
    
    
    switch ($stateParams.id) {
    case 'agriculture':
        $scope.title = 'Agriculture';
        $scope.imageUrl = '/images/industries/heros/ag.jpg';
        $scope.description = 'RMR Agriculture represents a long-term commitment and support of the North American agriculture industry.  RMR actively pursues production assets including live stock and commercial farming operations.  Additionally, RMR Agriculture believes there’s unlocked value found within regional and local agribusinesses servicing community farmers and smaller commercial operators.  Those businesses include distributors of seed, fertilizer and specialty chemicals, processing mills, grain elevators, and seed manufacturers.  RMR leverages long-standing local relationships combined with an institutional oversight ensuring customer satisfaction and competitively priced products and services.';
        break;
    case 'energy':
        $scope.title = 'Energy';
        $scope.imageUrl = '/images/industries/heros/energy.jpg';
        $scope.description = 'RMR Energy is the genesis and foundation of RMR Holdings.  Having historically been focused in the American Rockies, RMR Energy seeks unique off-market acquisitions poised for long-term value creation.  RMR Energy owns and operates assets across the spectrum with an appetite for conventional upstream assets, non-operated resource plays, and legacy non-core corporate divestitures.  Cascading down the value chain, RMR Energy discovers under utilized infrastructure assets and applies its proven track record of successful value investing, operational excellence, and unique capital solutions.  RMR actively pursues raw development scenarios, niche or specialty refineries, and regional pipeline and gathering systems.';
    break;
    case 'industrials':
        $scope.title = 'Industrial';
        $scope.imageUrl = '/images/industries/heros/industrial.jpg';
        $scope.description = 'RMR Industrials (“RMRI”) seeks to acquire and consolidate complimentary industrial assets.  Typically these small to mid sized assets are the core manufacturer and supplier of specific bulk commodity minerals and chemicals distributed to the global manufacturer industry. RMRI’s consolidation strategy is to assemble a portfolio of mature and value-add industrial commodities businesses to generate scalable enterprises with a vast portfolio of products and services addressing a common and stable customer base. Smaller, legacy-owned industrial companies benefit from economies of scale and professional asset allocation. The RMRI strategy seeks to capitalize on the pricing arbitrage between public and private valuations, while also providing the platform to access capital markets and professional management oversight.';
    break;
    case 'metals':
        $scope.title = 'Metals & Mining';
        $scope.imageUrl = '/images/industries/heros/metals.jpg';
        $scope.description = 'RMR Metals and Mining was formed as a result of the team’s extensive and successful ability to navigate the challenges that make up the North American mining industry. RMR seeks to aggregate small to medium mining operations leveraging its institutional knowledge around optimization, underground mining and surface processing efficiencies. RMR principals have led globally recognized projects, from exploration stage through production.  RMR maintains relationships with key policy influencers to enable its projects to be current on all critical path permitting and sustain environmentally responsible operations.  RMR is able to manage the inherent challenges of commodity cycles by properly evaluating and managing risk.';
    break;

    }

    $('body').addClass($stateParams.id);
    
    if (isMobile.matches) {
      $('.industriesList-mobile li:last a').text('MINING');
      
    }
  
});

function removeAnimation(){ 
    $("#logo0").remove(); 
    $('body').addClass('showContent');
    
}


controllers.controller('contactController',function($rootScope, $scope, $stateParams){
    removeAnimation();
});

controllers.controller('aboutController',function($rootScope, $scope, $stateParams){
    removeAnimation();
});


controllers.controller('teamController',function($rootScope, $scope, $stateParams){
    removeAnimation();
    switch ($stateParams.id) {
    case 'chad':
        $scope.name = 'Chad Brownstein';
        $scope.profileUrl = '/images/bio/Chad.jpg';
        $scope.position = 'Chief Executive Officer';
        $scope.bio = 'Chad Brownstein is the Chief Executive Officer of RMR responsible for the corporate strategy and board oversight for all investments. Mr. Brownstein, a Colorado native, has been an active member of the resource community for 18 years having founded and financed multiple hydrocarbon and mining companies. Mr. Brownstein is the Co-Founder and Vice Chairman of the Banc of California (“BANC”). BANC is one of the fastest growing Southern California depository institutions having acquired five distinct financial institutions since 2009. Today BANC has over $4 billion in deposits and an additional $3 billion in assets under management. Previously Mr. Brownstein was a principal member of Crescent Capital Group focused on Special Situations (formerly Trust Company of the West Leveraged Finance Group). He was a Senior Advisor at Knowledge Universe Ltd., where he focused on turnaround operations and private equity investing. Prior to that, he was a Partner at ITU Ventures making venture and growth investments with a specialization in corporate strategy. While at ITU, Mr. Brownstein founded businesses and created exits to companies including Nokia, Weyerhaeuser, and AMD. Mr. Brownstein began his career at Donaldson Lufkin & Jenrette in the Merchant and Investment Banking divisions. Mr. Brownstein is a member of the Cedars Sinai Board of Governors and has served as past capital Chairman for the board of Los Angeles Conservation Corps. Mr. Brownstein attended Columbia Business School and received his B.A. from Tulane University.';
        break;
    case 'gregory':
        $scope.name = 'Gregory Dangler ';
        $scope.profileUrl = '/images/bio/Greg.jpg';
        $scope.position = 'President';
        $scope.bio = 'Gregory Dangler is the President of RMR responsible for the day-to-day operations of all business units. Mr. Dangler has an extensive background in the development of large-scale infrastructure projects. Previously, Mr. Dangler served as Chief Restructuring Officer of a natural resource development company for which he raised over $120 million in institutional capital. Prior to that, Mr. Dangler founded an international technology and telecommunications company. As the Chief Executive, he raised institutional capital and expanded its global presence with operating interests in Africa and South America. Prior to that, Mr. Dangler was an associate with ITU Ventures, a leading private equity and venture capital firm focused on growth stage investments. While with ITU, Mr. Dangler executed private and public equity transactions, directed M&A activity, and provided strategic support to portfolio companies. Mr. Dangler began his professional career as an Air Force officer managing complex infrastructure projects. Mr. Dangler received a BS in Mechanical Engineering from the United States Air Force Academy and an MBA in Finance and Economics from the University of Southern California\'s Marshall School of Business.';
        break;
    case 'barry':
        $scope.name = 'Dr. Barry Munitz';
        $scope.profileUrl = '/images/bio/Barry.jpg';
        $scope.position = 'Founding Partner';
        $scope.bio = 'Dr. Barry Munitz is a founding partner of RMR. Previously, Dr. Munitz served as President and CEO of the J. Paul Getty Trust from 1997 to 2006 and was responsible for the investment portfolio, two museums (Brentwood and Malibu), the Conservation and Research Institutes, the philanthropic foundation, and all education outreach programs. From 1991 to 1997, he served as Chancellor of the California State University (CSU) – a twenty-three-campus system which is the largest senior university in the United States. Prior to that role, Dr. Munitz was Vice Chairman of the publicly held company (MAXXAM) and president of the private company which was its major shareholder (Federated Development) where he was involved for a decade in their natural resources activity, as well as timber, banking, energy and real estate.  During the past decades, he served as a Trustee of Princeton University, the Seattle Art Museum, and the Courtauld Institute in London, as well as a corporate director at SunAmerica and Kaufman & Broad. Dr. Munitz currently chairs the board of Sierra Nevada College, is president of the Cotsen Foundation, a governor of the three Eli and Edythe Broad Family Foundations and a corporate director at SallieMae.  Dr. Munitz received a Bachelor\'s degree in Classics and Comparative Literature from Brooklyn College, and received a Masters and a Ph.D. from Princeton University. Dr. Munitz is a fellow of the American Academy of Arts and Sciences and holds honorary degrees from Whittier College, Claremont University, the California State University, the University of Southern California, Notre Dame and the University of Edinburgh.';
        break;
    case 'isaac':
        $scope.name = 'Isaac Morgan';
        $scope.profileUrl = '/images/bio/Isaac.jpg';
        $scope.position = 'Operating Partner';
        $scope.bio = 'Isaac Morgan is an Operating Partner at RMR responsible for due diligence of all acquisitions and operational integration. Mr. Morgan has a background in public accounting, large public scale mining operations and natural resource project development. Mr. Morgan has provided consulting services to numerous natural resource companies in managing operations, project finance preparation, and internal reporting. Previously, Mr. Morgan served as Corporate Controller of a public natural resource development company in which he worked on the preparation of the prefeasibility study, managed public company financial statement filings, and led strategic teams regarding ERP selection, budgeting, and public financings. Prior to that, Mr. Morgan worked at Freeport McMoRan Copper & Gold, Inc. where he was responsible for corporate consolidation of North and South American entities to the parent, played a key role in the company’s SAP implementation, and prepared internal reporting for high level management. Prior to that, Mr. Morgan worked as a consultant on the Cloud Peak Energy divesture from its parent, Rio Tinto, by assisting internal management to prepare for its initial public offering and liaison with external auditors. Mr. Morgan began his professional career at KPMG, LLP as a senior auditor working on Fortune 500 companies and small private companies. Mr. Morgan received a BS in Accounting from the University of Arizona and is a licensed CPA in Colorado.';
        break;
    case 'jonathan':
        $scope.name = 'Jonathan Ma';
        $scope.profileUrl = '/images/bio/Jon.jpg';
        $scope.position = 'Associate';
        $scope.bio = 'Jonathan Ma is an Associate at RMR responsible for all M&A activity including origination, due diligence, strategy and financing. Prior to joining RMR, Mr. Ma was an Associate at the CIM Group, an infrastructure investment firm with $17 billion in assets under management. In his role, he was responsible for the underwriting and due diligence process of the firm’s infrastructure and industrial property acquisitions, marketing of dispositions, and asset management of the firm’s opportunistic and core portfolio. While at CIM, Mr. Ma closed over $1 billion in total transactions across multiple asset classes. Prior to joining CIM in 2012, he worked at Crescent Capital Group (formerly Trust Company of the West Leveraged Finance Group) focused on corporate distressed debt and special situations financing.  Mr. Ma started his career in the Financial Sponsors Group of Lehman Brothers’ Investment Banking Division (subsequently Barclays Capital Investment Bank).  Mr. Ma graduated with a B.S. in Business-Economics from the University of California, Los Angeles.';
        break;
    case 'marc':
        $scope.name = 'Marc L. Holtzman';
        $scope.position = 'Advisor';
        $scope.bio = 'Mr. Holtzman is Chairman of Meridian Capital HK, a private equity firm with investments in natural resources, real estate, food, agriculture and transportation.   Prior to joining Meridian, Mr. Holtzman served as Vice Chairman of Barclays Capital and as Vice Chairman of ABN Amro Bank.  Previously, as co-founder and President of MeesPierson EurAmerica (a firm which was acquired by ABN Amro) and as Senior Adviser to Salomon Brothers, he lived and worked in Eastern Europe and Russia from September 1989 until October 1998.  Mr. Holtzman currently serves as a member of the Board of Directors of FTI Consulting (NYSE); as a member of the Board of Directors of Sistema JSFC, Russia’s largest publicly listed investment company (London Stock Exchange); as a member of the Board of Directors of The Bank of Kigali, Rwanda\'s largest commercial bank and as a member of the Board of Directors of TeleTech (NASDAQ: TTEC), the world’s leading provider of analytics-driven technology-enabled services.  To further assist with the development of Central Asia’s financial sector, Mr. Holtzman was appointed by Kazakhstan’s Prime Minister to serve on the Board of Directors of Kazyna --- the nation’s sovereign wealth fund from 2006 – 2008.  In addition, Mr. Holtzman served as a member of the Board of Trustees of the United States Space Foundation from 2004 – 2010.  From 2003 through 2005, Mr. Holtzman was President of the University of Denver where he was responsible for the development of the Rocky Mountain Center for Homeland Security.  Previously, Mr. Holtzman served in the Cabinet of Governor Bill Owens as Colorado’s first Secretary of Technology.   He holds a Bachelor of Arts degree in Economics from Lehigh University.';
        break;
    case 'ari':
        $scope.name = 'J. Ari Swiller';
        $scope.position = 'Advisor';
        $scope.bio = 'Mr. Swiller is partner and co-founder of the Renewable Resources Group (RRG), a company specializing in the acquisition and management of agricultural and water assets and businesses as well as the development of utility scale renewable energy projects.  Currently, RRG’s portfolio includes over 80,000 acres of farmland in California and Arizona for the purpose of water, renewable energy and agriculture development.  In December 2012, RRG sold the fully permitted site for the world’s largest photovoltaic development (600+ MW) to Berkshire Hathaway’s MidAmerican Energy.  RRG permitted the project in the Antelope Valley, CA in partnership with SunPower (NASDAQ: SPWR).  In 2013, RRG completed the successful acquisition of Sun World International, LLC (SWI).  SWI is renowned for growing, marketing and breeding premium seedless grapes, sweet peppers, stone fruits and other distinctive fruits and vegetables as well as owning land and water assets in the San Joaquin Valley, CA and the Coachella Valley, CA.  In August 2014, the firm purchased a couple of thousand acres of date property in the Coachella Valley, CA and Bard Valley, AZ.  This acquisition makes RRG one of the largest growers, packers and processors of dates in the United States.  Additionally, RRG owns and manages almond and pistachio orchards in California. From 1997-2003, prior to founding RRG, Mr. Swiller was a Principal at The Yucaipa Companies.  He began his career in Washington, DC as a legislative aide on Capitol Hill and on the presidential campaigns of William J. Clinton. Currently, Mr. Swiller serves on the board of Falcon Waterfree Technologies which promotes conservation of the Earth\'s fresh water supply by developing waterless urinal systems as well as other sustainable resource technology.  He also serves on the boards of the Miguel Contreras Educational Foundation and the Los Angeles Conservation Corps, the largest urban youth corps in the nation. Mr. Swiller earned a B.A. from Cornell University.';
        break;
    case 'antonio':
        $scope.name = 'Antonio Villaraigosa';
        $scope.position = 'Advisor';
        $scope.bio = 'Antonio Villaraigosa is a respected voice in American politics, a prominent policymaker and savvy strategist with a keen understanding of America’s mainstream and emerging  communities.  He has more than 20 years of leadership experience at the highest levels of state and municipal government as well as business, political, educational and nonprofit organizations. In 2013 Mr. Villaraigosa finished his two terms as Mayor of the City of Los Angeles after eight years of major strides in transportation, crime reduction, infrastructure, energy and resource sustainability, right‐sizing government, business development and education reform. Prior to his election as Mayor, Mr. Villaraigosa served as a member of the Los Angeles City Council from 2003 to 2005, where he launched the city’s first program to reduce the cost of prescription medicine for residents, led the Council’s efforts on transportation issues, created new parks, settled two crippling strikes, protected arts funding and worked to expand  constituent services in a district of more than a quarter million people. From 1994 through 2000, Mr. Villaraigosa served in the California State Assembly as Democratic  Whip, Majority Leader and Speaker of the Assembly.  Mr. Villaraigosa also has served in academia, currently as a fellow at Harvard University and a professor in public policy at the University of Southern California. Additionally he works in the private sector with Banc of California and Edelman Public Relations, amongst others, and serves on the McGraw Hill Global Education board of directors. He holds a B.A. in History from UCLA and a J.D. from the Peoples College of Law.';
        break;
    case 'arturo':
        $scope.name = 'Arturo Sarukhan';
        $scope.position = 'Advisor';
        $scope.bio = 'Ambassador Sarukhan is a career diplomat who joined the Mexican Foreign Service in 1993, and currently serves as Mexico\'s Ambassador to the U.S. He was posted to the Mexican Embassy in the United States as a junior diplomat, served as Chief of Staff to the Ambassador, and was the head of the counternarcotics office at the Embassy. In 2000 he became Chief of Policy Planning at the Foreign Ministry and was appointed by the President as Mexican Consul General to New York City in 2003. He resigned from this post and took a leave of absence from the Foreign Service in 2006 to join Felipe Calderón\'s presidential campaign as a foreign policy advisor and international spokesperson and became the Coordinator for Foreign Affairs in the Transition Team. In November of 2006 he received the rank of Ambassador and in February of 2007 was appointed Mexican Ambassador to the United States. He holds a BA in International Relations from El Colegio de México and an MA in US Foreign Policy from the School of Advanced International Studies (SAIS) at Johns Hopkins where he was a Fulbright Scholar and Ford Foundation Fellow.';
        break;            
    case 'andy':
        $scope.name = 'Andy Peltz';
        $scope.position = 'Advisor';
        $scope.bio = 'Mr. Peltz is a Partner at Peltz Capital Management. Prior to forming PCM, Mr. Peltz worked at Triarc Companies, Inc. where he held the titles of Vice President, Investment Services and as an Associate of Corporate Development. He was primarily responsible for the day-to-day oversight of Triarc’s $650 million plus investment portfolio. Prior to Triarc, Mr. Peltz was Senior Investment Banker at Credit Agricole Lazard Financial Products Bank, which is a joint venture between Lazard Freres & Co. and Credit Agricole specializing in structured finance transactions. He also served as a marketing associate for Lazard Asset Management, a division of Lazard Freres & Co., where he marketed their vast array of fixed income, equity and alternative investment products. Mr. Peltz holds a BFA from New York University.';
        break;
    case 'reed':
        $scope.name = 'Reed Dickens';
        $scope.position = 'Advisor';
        $scope.bio = 'After spending the first five years of his career in government politics as a White House Assistant Press Secretary and in presidential politics as a campaign spokesperson, Mr. Dickens has spent the last decade building a diverse slate of consumer brands and founding four companies. Mr. Dickens currently serves as the Co-Founder and CEO of American Made Products, a platform created to acquire or partner with small U.S. manufacturers to expand their capacity through growth capital or government credits. He also currently serves in the following roles: Co-Founder and Executive Chariman of EQtainment, an educational media platform, Founder of Dickens Capital Group, which holds minority stakes in early stage brands, board member for Sage Beverages, and a Senior Advisor to TPG Growth\'s portfolio of growth companies.  From 2009 to 2011, Mr. Dickens served as the Chairman and CEO of Marucci Sports, which Forbes Magazine recognized as one of the most promising growth brands in America. His effort to diversify the Major League Baseball bat company into all product categories resulted in exponential growth during his tenure. Mr. Dickens still serves as the Chairman of the Board and is actively involved in corporate development.  From 2004 to 2008, he served as the CEO of Outside Eyes, a boutique branding and crisis management agency that he still owns and where he serves as a Senior Advisor.  Dickens leverages the firm to add value to his portfolio of early stage consumer brands, most recently building Lucky Buddha Beer and Bracero Tequila to national recognition and distribution.';
        break;
    default:
    }

});

// controllers.controller('homepageController', function($scope){
//     $("body").removeClass();
//     $("body").addClass('home').addClass('showContent');
//
//     videoClickHandler();
//
//
// });

// function videoClickHandler(){
//   $("#video img").on('click',function(){
//     var iframe = $(this).siblings('iframe#youtube');
//     var url = iframe.attr('data-url');
//     iframe.attr('src',url);
//     $(this).remove();
//   });
// }



// controllers.controller('introAnimationController', function($scope){
//
//   if (isMobile.matches) {
//
//     $("#logo0").remove();
//     $('body').removeClass('showIntroAnimation');
//     $("body").addClass('showContent home');
//   }else{
//       $("body").removeClass();
//       $("body").addClass('showIntroAnimation');
//       $("#logo0").imagesLoaded(startAnimation);
//   }
//
//
//
//     function startAnimation(){
//         var bg = $('.vegas-background2');
//         var logo = $('#logo0');
//         // TweenLite.to(bg, 2, {left:"542px", backgroundColor:"black", borderBottomColor:"#90e500", color:"white"});
//         var intro = new TimelineLite({
//             onComplete: function(){
//                 $("#logo0").remove();
//                 $('body').removeClass('showIntroAnimation');
//
//             }
//         });
//         //expand then fade
//         intro.to(bg,5 ,{
//           // opacity: 0,
//           scale: 2,
//           transformOrigin:"50% 50% 0",
//           // ease: 'easeInQuart',
//           ease: 'easeInCubic',
//           onComplete: function(){
//             $("body").addClass('showContent home');
//           }
//         })
//         .to(bg,1.5,{opacity:0},'-=1.2') //fadeout mountains
//         .to(logo,1.5,{
//             // scale: 15,
//             // opacity:0,
//             // transformOrigin:"50% 50% 0",
//             // scale: 50,
//             ease: 'easeIn',
//             // height: 0
//             top: '-1300px'
//         },'=1');  //fadeout logo
//     }
//
//     videoClickHandler();
// });




///////////////////////////////////
//
//
// var directives = angular.module('rockyMountainApp.directives',[]);
//
// directives.directive('teamBio',function($timeout){
//   return {
//     restrict: 'A',
//     link: function(scope, elem, attrs){
//       // var p = $("#teamBios").position();
//       // var e = elem.position();
//       // console.log(p,e);
//       // if (isMobile.matches) {
//       //   window.scroll(0,435);
//       // }
//       // $timeout(function(){
//       // window.scroll(0,435);
//       //   console.log('asdfsd');
//       //     // var currentEl = $('#'+attrs.nbScroll);
//       //     // $('html,body').animate({scrollTop: currentEl.offset().top},'slow');
//       // },500);
//       scope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState){
//           event.targetScope.$watch('$viewContentLoaded', function(){
//
//             $timeout(function(){
//
//               if (isMobile.matches) {
//                 window.scroll(0,435);
//               }
//             });
//
//           })
//
//       });
//
//
//
//
//
//     }
//   };
//
// });
//
//

