<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

    <?php if (strpos($_SERVER["HTTP_REFERER"], 'rmrholdings') !== false || strpos($_SERVER["HTTP_REFERER"], 'rockymountain') !== false): ?>
        <!--already visited-->
    <?php else: ?>
        <div id="logo0">
            <img class="vegas-background2" src="<?= bloginfo('template_url') ?>/images/mountains/mid-west.jpg" />
        </div>
        <script type="text/javascript">
        startAnimation();
        function startAnimation(){
            var bg = $('.vegas-background2');
            var logo = $('#logo0');
            // TweenLite.to(bg, 2, {left:"542px", backgroundColor:"black", borderBottomColor:"#90e500", color:"white"});
            var intro = new TimelineLite({
                onComplete: function(){
                    $("#logo0").remove();
                    $('body').removeClass('showIntroAnimation');
                }
            });
            
            //expand then fade
            intro.to(bg,5 ,{
              // opacity: 0,
              scale: 2,
              transformOrigin:"50% 50% 0",
              // ease: 'easeInQuart',
              ease: 'easeInCubic',
              onComplete: function(){
                $("body").addClass('showContent home');
              }
            })
            .to(bg,1.5,{opacity:0},'-=1.2') //fadeout mountains
            .to(logo,1.5,{
                // scale: 15, 
                // opacity:0,
                // transformOrigin:"50% 50% 0",
                // scale: 50,
                ease: 'easeIn',
                // height: 0
                top: '-1300px'
            },'=1');  //fadeout logo
        }
        </script>
    <?php endif; ?>

<div id="hero" style="position:relative">
    <img src="<?= bloginfo('template_url') ?>/images/homepage.jpg" />
</div>
<div id="video">
    <div>IN THE NEWS:</div>
    <!-- <iframe src="http://player.theplatform.com/p/gZWlPC/vcps_inline?byGuid=3000327473&size=440_290" width="450" height="298" type="application/x-shockwave-flash" allowFullScreen="true" bgcolor="#131313" style="margin-right:15px; height: 316px; overflow:hidden"></iframe>


    <img src="/images/video2.png" />
    <iframe id="youtube" width="450" height="285" src="" data-url="https://www.youtube.com/embed/MRsEFvZkoJE?start=168&autoplay=1" frameborder="0" allowfullscreen></iframe> -->
    
    
    
    
    <!-- <object data='http://www.bloomberg.com/video/embed/ytp9hUFVSemhvyaGcMJO_A?height=285&width=450' width=450 height=285 style='overflow:hidden;'></object>

    <iframe src="http://player.theplatform.com/p/gZWlPC/vcps_inline?byGuid=3000338531&size=440_285" width="450" height="285px" type="application/x-shockwave-flash" allowFullScreen="true" bgcolor="#131313" style="margin-right:15px; height: 285px; overflow:hidden"></iframe> -->
        
        
    <iframe id="youtube" width="450" height="285" src="https://www.youtube.com/embed/YeyX8dYbubU?autoplay=0" frameborder="0" allowfullscreen style="margin-top:10px;"></iframe>
    <br/><br/>
    
    
</div>

<?php get_footer(); ?>