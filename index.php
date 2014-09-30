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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
    <script src="/bower_components/angular/angular.js"></script>
    <script src="/bower_components/angular/angular-routes.js"></script>
    <script src="/bower_components/angular-ui-router/release/angular-ui-router.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="">
    
    <div id="logo0">
        <img class="vegas-background2" src="/images/mountains/mid-west.jpg" />
    </div>
    <div id="header">
        <a href="/"><img id="logo" src="/images/bg2.png" /></a>
        <nav>
            <a href="/#home">HOME</a>
            <a href="/#about">ABOUT US</a>
            <a href="/#team">TEAM</a>
            <a href="/#operations">OPERATIONS</a>
            <a href="/#contact " class="last">CONTACT</a>
            <!-- <a href="/#agriculture">AGRICULTURE</a>
            <a href="/#energy">ENERGY</a>
            <a href="/#industrials">INDUSTRIALS</a>
            <a href="/#metals" class="last">METALS & MINING</a> -->
            <img id="shadow" src="/images/shadow.png" />
            
        </nav>
    </div>
    <div id="wrap" class="clearfix">
        <div ui-view>
            
        </div>
    </div>
    <footer>
        <div class="left">
            RMR © 2014
        </div>
        <div class="right">
            9595 Wilshire Blvd Beverly Hills, CA 90212
        </div>
    </footer>
    
    <!-- main content wrapper end -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
        .state('home', 
            {url: '/home', templateUrl: 'app/views/home.html', controller: 'homepageController'})
        .state('animation',
            {url: '', templateUrl: 'app/views/home.html', controller: 'introAnimationController'})
        .state('team', 
            {url: '/team', templateUrl: 'app/views/team/team.html'})
        .state('team.item', 
            {url: '/:id' , templateUrl: 'app/views/team/employee.html', controller: 'teamController'}) //this state inherits the team state URL of /team
        .state('about', 
            {url: '/about', templateUrl: 'app/views/about/about.html'})
        .state('operations',
            {url: '/operations', templateUrl: 'app/views/operations/operations.html'})
        .state('operations.type',
            {url: '/:id', controller: 'operationsController', templateUrl: 'app/views/operations/industry.html'});
            
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
                console.log("State Change: transition begins!");
                console.log(toParams);
            });
    });
    
    

    
    app.controller('operationsController',function($rootScope, $scope, $stateParams){
        switch ($stateParams.id) {
        case 'agriculture':
            $scope.title = 'Agriculture';
            $scope.imageUrl = '/images/industries/heros/ag.jpg';
            $scope.description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
            
            break;
        case 'energy':
            $scope.title = 'Energy';
            $scope.imageUrl = 'http://www.energylandscapes.net/images/large/AF4A2717-III-WEB.jpg';
            $scope.description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        break;
        case 'industrials':
            $scope.title = 'Industrial';
            $scope.imageUrl = '/images/industries/heros/industrial.jpg';
            $scope.description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        break;
        case 'metals':
            $scope.title = 'Metals & Mining';
            $scope.imageUrl = '/images/industries/heros/metals.jpg';
            $scope.description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        break;
    
        }
        $('body').removeClass();
        $('body').addClass($stateParams.id);
      
    });
    app.controller('teamController',function($rootScope, $scope, $stateParams){
        switch ($stateParams.id) {
        case 'chad':
            $scope.name = 'Chad Brownstein';
            $scope.profileUrl = 'http://www.whitedeerenergy.com/wp/wp-content/uploads/Edelman_T_LADD0164_web-170x238.jpg';
            $scope.position = 'Chief Executive Officer';
            $scope.bio = 'Chad Brownstein is the Chief Executive Officer of RMR where he is responsible for the corporate strategy and board oversight of all corporate investments.  Mr. Brownstein, born in Denver, Colorado, has been an active member of the resource community for 18 years having sold multiple hydrocarbon and mining companies. Mr. Brownstein is the Co-Founder, Lead Independent Director, and Vice Chairman for the Banc of California (“BANC”).  BANC is the fastest growing Southern California depository institution having acquired five distinct savings institutions since 2009.  Today BANC has over $5 billion in deposits, an additional $5 billion in assets under management culminating in California’s 9th largest public bank.  Previously Mr. Brownstein was a principal member of Crescent Capital Group focused on Special Situations (formerly Trust Company of the West Leveraged Finance Group). He was a Senior Advisor at Knowledge Universe Ltd., where he focused on turnaround operations and private equity investing. Prior to that, he was a Partner at ITU Ventures making venture and growth investments with a specialization in corporate strategy where he founded companies and created exits to companies including Nokia, Weyerhaeuser, AMD, and multiple public market exits.  Mr. Brownstein began his career at Donaldson Lufkin & Jenrette in the Merchant and Investment Banking divisions.  Mr. Brownstein also is a member of the Cedars Sinai Board of Governors and has served as past capital Chairman for the board of Los Angeles Conservation Corps. Mr. Brownstein attended Columbia Business School and received his B.A. from Tulane University.';
            break;
        case 'gregory':
            $scope.name = 'Gregory Dangler ';
            $scope.profileUrl = 'http://www.whitedeerenergy.com/wp/wp-content/uploads/Edelman_T_LADD0164_web-170x238.jpg';
            $scope.position = 'President and Chief Financial Officer';
            $scope.bio = 'Gregory Dangler is the President and Chief Financial Officer of RMR where he is responsible for the day-to-day operations, including all business units, financial and corporate strategies.  Mr. Dangler has a background in private equity investing, development of large-scale technical infrastructure projects, and the financing and management of international growth companies.  Previously, Mr. Dangler served as Chief Financial Officer and Chief Restructuring Officer of a public natural resource development company in which he took the company public and raised over $120 million in institutional capital.  Prior to that, he served as Chairman and Chief Executive Officer of a technology and telecommunications company. As the Chief Executive, he raised institutional capital and expanded its global presence with operating interests in Africa and South America.  Prior to that, Mr. Dangler was an associate with ITU Ventures, a leading private equity and venture capital firm focused on growth stage investments.  While with ITU, Mr. Dangler executed private and public equity transactions, directed M&A activity, and provided strategic support to portfolio companies.  Mr. Dangler began his professional career as an Air Force officer managing complex and large-scale infrastructure projects.  Mr. Dangler received a BS in Mechanical Engineering from the United States Air Force Academy and an MBA in Finance and Economics from the University of Southern California\'s Marshall School of Business.';
            break;
        case 'barry':
            $scope.name = 'Dr. Barry Munitz';
            $scope.profileUrl = 'http://www.whitedeerenergy.com/wp/wp-content/uploads/Edelman_T_LADD0164_web-170x238.jpg';
            $scope.position = 'Founding Partner';
            $scope.bio = 'Dr. Barry Munitz is a founding partner of RMR.  Dr. Munitz served as President and CEO of the J. Paul Getty Trust from 1997 to 2006 where he was responsible for the investment portfolio, two museums (Brentwood and Malibu), the Conservation and Research Institutes, the philanthropic foundation, and all education outreach programs. From 1991 to 1997, he served as Chancellor of the California State University (CSU) – a twenty-three-campus system which is the largest senior university in the United States. Prior to that role, Dr. Munitz was Vice Chairman of the publicly held company (MAXXAM) and president of the private company which was its major shareholder (Federated Development) where he was involved for a decade in their natural resources activity, as well as timber, banking, energy and real estate.  During the past decades, he served as a Trustee of Princeton University, the Seattle Art Museum, and the Courtauld Institute in London, as well as a corporate director at SunAmerica and Kaufman & Broad. Dr. Munitz currently chairs the board of Sierra Nevada College, is president of the Cotsen Foundation, a governor of the three Eli and Edythe Broad Family Foundations and a corporate director at SallieMae.  Dr. Munitz received a Bachelor\'s degree in Classics and Comparative Literature from Brooklyn College, and received a Masters and a Ph.D. from Princeton University. Dr. Munitz is a fellow of the American Academy of Arts and Sciences and holds honorary degrees from Whittier College, Claremont University, the California State University, the University of Southern California, Notre Dame and the University of Edinburgh.';
            break;
        case 'isaac':
            $scope.name = 'Isaac Morgan';
            $scope.profileUrl = 'http://www.whitedeerenergy.com/wp/wp-content/uploads/Edelman_T_LADD0164_web-170x238.jpg';
            $scope.position = 'Operating Partner';
            $scope.bio = 'Isaac Morgan is an Operating Partner at RMR where he is responsible for due diligence of all acquisitions and operational integration. Mr. Morgan has a background in public accounting, large public scale mining operations and natural resource project development. Mr. Morgan has provided consulting services to numerous natural resource companies in managing operations, project finance preparation, and internal reporting. Previously, Mr. Morgan served as Corporate Controller of a public natural resource development company in which he worked on the preparation of the prefeasibility study, managed public company financial statement filings, and led strategic teams regarding ERP selection, budgeting, and public financings. Prior to that, Mr. Morgan worked at Freeport McMoRan Copper & Gold, Inc. where he was responsible for corporate consolidation of North and South American entities to the parent, played a key role in the company’s SAP implementation, and prepared internal reporting for high level management. Prior to that, Mr. Morgan worked as a consultant on the Cloud Peak Energy divesture from its parent, Rio Tinto, by assisting internal management to prepare for its initial public offering and liaison with external auditors. Mr. Morgan began his professional career at KPMG, LLP as a senior auditor working on Fortune 500 companies and small private companies. Mr. Morgan received a BS in Accounting from the University of Arizona and is a licensed CPA in Colorado.';
            break;
        case 'jonathan':
            $scope.name = 'Jonathan Ma';
            $scope.profileUrl = 'http://www.whitedeerenergy.com/wp/wp-content/uploads/Edelman_T_LADD0164_web-170x238.jpg';
            $scope.position = 'Associate';
            $scope.bio = 'Jonathan Ma is an Associate at RMR where he is responsible for all M&A activity including origination, due diligence, strategy and financing. Prior to joining RMR, Mr. Ma was an Associate at the CIM Group, an infrastructure investment firm with $17 billion in assets under management. In his role, he was responsible for the underwriting and due diligence process of the firm’s infrastructure and industrial property acquisitions, marketing of dispositions, and asset management of the firm’s opportunistic and core portfolio. While at CIM, Mr. Ma closed over $1 billion in total transactions across multiple asset classes. Prior to joining CIM in 2012, he worked at Crescent Capital Group (formerly Trust Company of the West Leveraged Finance Group) focused on corporate distressed debt and special situations financing.  Mr. Ma started his career in the Financial Sponsors Group of Lehman Brothers’ Investment Banking Division (subsequently Barclays Capital Investment Bank).  Mr. Ma graduated with a B.S. in Business-Economics from the University of California, Los Angeles';
            break;
        case 'marc':
            $scope.name = 'Marc L. Holtzman';
            $scope.position = 'Advisor';
            $scope.bio = 'Mr. Holtzman serves as an advisor to Rocky Mountain Resources. Currently, Mr. Holtzman is Chairman of Meridian Capital HK, a private equity firm and a member of the Board of Directors at FTI Consulting, Inc. Previously, Mr. Holtzman was executive Vice Chairman of Barclays Capital from August 2008 to September 2012. From 2006 to 2008, he served as Vice Chairman of the investment banking division of ABN Amro Bank, after having previously held various executive and non-executive positions with the investment banking division between 1997 and 1998. As co-founder and President of MeesPierson EurAmerica (a firm that was acquired by ABN Amro) and as Senior Adviser to Salomon Brothers, Mr. Holtzman lived and worked in Eastern Europe and Russia from September 1989 until October 1998. Mr. Holtzman serves as a director of Sistema JSFC, The Bank of Kigali and Indus Gas Limited. Mr. Holtzman also was President of the University of Denver from May 2003 to June 2005 and served in the cabinet of Governor Bill Owens as Colorado’s First Secretary of Technology from 1999 through May 2003. In 2006, Mr. Holtzman was a candidate for election as Governor of Colorado. Mr. Holtzman holds a Bachelor of Arts degree in Economics from Lehigh University.';
            break;
        case 'ari':
            $scope.name = 'J. Ari Swiller';
            $scope.position = 'Advisor';
            $scope.bio = 'Mr. Swiller serves as an advisor to Rocky Mountain Resources. Mr. Swiller is co-founder of the Renewable Resources Group (RRG). RRG has developed two million acre-feet (AF) of water projects, 930 megawatts (MW) of renewable energy (220 wind, 710 solar), and marketed hundreds of water rights in nine states. Currently the firm owns and/or manages more than 100,000 acres of farmland for the purpose of water, renewable energy, and/or carbon development. Mr. Swiller’s responsibilities include managing all aspects of the business. Prior to founding RRG, Mr. Swiller was a Principal in The Yucaipa Companies; he served as Vice President of External Affairs at Ralphs Grocery Company (a Yucaipa portfolio company now merged into Kroger) and Executive Director of The Ralphs/Food4Less Foundation. He serves on the board of rfXcel Corporation, which develops supply chain performance improvement software. Mr. Swiller also serves on the Board of the Los Angeles Conservation Corps and the Miguel Contreras Educational Foundation. Mr. Swiller earned a B.A. from Cornell University.';
            break;
        default:
        }
    });
    
    app.controller('homepageController', function($scope){
        $("body").addClass('home');
        $("body").removeClass('introAnimation');
    });
    
    app.controller('introAnimationController', function($scope){
        
        $("body").addClass('home');
        $("body").addClass('introAnimation');
        
        
        var bg = $('.vegas-background2');
        var logo = $('#logo0');
        // TweenLite.to(bg, 2, {left:"542px", backgroundColor:"black", borderBottomColor:"#90e500", color:"white"});
        var intro = new TimelineLite({
            onComplete: function(){
                $("#logo0").remove();
                $("body").removeClass('introAnimation').addClass('home');
                
            }
        });
        //expand then fade
        intro.to(bg,5 ,{
          // opacity: 0,
          scale: 2,
          transformOrigin:"50% 50% 0",
          // ease: 'easeInQuart',
          ease: 'easeInCubic',
          // onStart: function(){
//             $("#questions").fadeOut(1000);
//           }
        })
        .to(bg,1.5,{opacity:0},'-=1.2') //fadeout mountains
        .to(logo,1.5,{
            // scale: 15, 
            // opacity:0,
            transformOrigin:"50% 50% 0",
            // scale: 50,
            ease: 'easeInCubic',
            top: '-800px'
        },'=1');  //fadeout logo
    });
    
    
    
    </script>
</body>
</html>    