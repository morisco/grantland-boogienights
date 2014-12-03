<?
if ( !isset($_SERVER['PHP_AUTH_USER']) ) {
header('WWW-Authenticate: Basic realm="PTB"');
header('HTTP/1.0 401 Unauthorized');
exit;
}
else {
if ( $_SERVER['PHP_AUTH_USER'] == 'admin' && $_SERVER['PHP_AUTH_PW'] == 'boogie' ) {
} else {
  header('WWW-Authenticate: Basic realm="You Shall Not Pass"');
  header('HTTP/1.0 401 Unauthorized');
}
}
?>
<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en-US"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en-US"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en-US"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en-US"><!--<![endif]-->
    <head>
        <title> &raquo; shell-post-name</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="lf4qvbBa8f7w9TxSVvOI6PouWfTfABYwVCWHjn2qr7Y" />
        <meta name="msvalidate.01" content="980DAC91C6458F6FA90F7089E61D12B0" />
        <meta name="googlebot" content="noodp" />
        <meta name="robots" content="index, follow" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="http://vip.dev/grantland/xmlrpc.php" />
        <script>
            document.documentElement.classList.toggle('no-js');
            document.documentElement.classList.toggle('js');
        </script>
        <link rel='stylesheet' id='sass-style-css'  href='http://grantland.vipstage.10uplabs.com/wp-content/themes/vip/grantland/css/style.css' type='text/css' media='screen' />

        <!-- Link to any custom CSS here -->
        <link rel='stylesheet' id='shell-css'  href='css/main.css' type='text/css' media='all' />

        <script type='text/javascript' src='http://grantland.vipstage.10uplabs.com/wp-includes/js/jquery/jquery.js'></script>
    </head>
    <body class="single single-grantland_feature">
        <? 
            include 'data.php';
            function getMarkup($quote, $character){
                $character_name = $quote['name'];
                if(isset($quote['name-note'])){
                    $character['name'] = $character['name'] . ' ' . $quote['name-note'];
                }

                echo    '<div class="character-section '.$quote['first_class'].'">'.
                            '<div class="actor">'.
                                '<img src="img/characters/'.$quote['name'].'.png" alt="'.$character_name.' as '.$character['role'].'" />'.
                                '<div class="actor-text">'.
                                    '<h3>'.$character['name'].'</h3>'.
                                    '<div class="character">'.$character['role'].'</div>'.
                                '</div>'.
                            '</div>'.
                            '<p>'.$quote['quote'].'</p>';
                if(isset($quote['image']) && isset($quote['caption']) && isset($quote['credit'])){
                    echo '<p class="inline-photo"><img src="'.$quote['image'].'" /><span class="caption">'.$quote['caption'].'</span> <span class="inline-credit">'.$quote['credit'].'</span></p>';
                }

                if(isset($quote['blockquote'])){
                    echo '<blockquote>'.$quote['blockquote'].'</blockquote>';
                }


                if(isset($quote['pullquote'])){
                    echo '<p class="boogie-pullquote">'.$quote['pullquote'].'</p>';
                }

                if(isset($quote['youtube'])){
                    echo '<p class="youtube"><iframe id="ytplayer" type="text/html" width="100%" height="300" src="http://www.youtube.com/embed/'.$quote['youtube'].'?autoplay0" frameborder="0"></iframe></p>';
                }

                echo  '<div class="cb"></div>'.
                        '</div>';
            }
        ?>

        <header>
            <a href="http://grantland.com" class="grantland-logo"><img src="img/grantland-logo.png" alt="Grantland" /></a>
            <a href="http://twitter.com/intent/tweet?text=&url=" class="twitter" target="_blank"></a>
            <a href="http://facebook.com/sharer/sharer.php?u=http://grantland.com" target="_blank" class="facebook"></a>
        </header>
        <div id="boogie-nights">
            <div id="open-wrapper">
                <div id="opener">
                    <div class="trigger-pixel"></div>
                    <img src="img/opening-1.png" class="open-image opener-1" alt="boogie nights" />
                    <img src="img/opening-2.png" class="open-image opener-2" alt="boogie nights" />
                    <img src="img/opening-3.png" class="open-image opener-3" alt="boogie nights" />
                    <img src="img/opening-4.png" class="open-image opener-4" alt="boogie nights" />
                </div>
                <div class="opening-story">

                    
                    <div class="hed">
                        <div class="hed-wrap">
                            <h1>Livin&#8217; Thing:</h1>
                            <h2>An Oral History <br/>of ‘Boogie Nights’</h2>
                            <div class="open-trigger first" data-trigger-index="1"></div>
                            <h4><strong>by alex french and howie kahn</strong><br/>illustrations by berto martinez</h4>
                            <div class="scroll-arrow"></div>
                        </div>

                    </div>

                    <div class="open-trigger first" data-trigger-index="2"></div>
                    <p><span class="firstcharacter">B</span><em>oogie Nights</em> began as a teenage boy’s wet dream. Nearly a decade before its 1997 release, it was a fantasy to chase. The year was 1988. The boy was a precocious, plotting 17-year-old named Paul Thomas Anderson. He was growing up in Los Angeles’s San Fernando Valley, obsessed with the studios all around him. He wanted in and hustled plenty &mdash; sneaking onto sets, working a Betamax camera from the age of 12, filming everything &mdash; but he also gained entrée from his father, Ernie, who was famous from his voice-over work for ABC on shows like <em>The Love Boat</em>. The Andersons had a pool &mdash; where funny-guy actors like Tim Conway and Robert Ridgely frequently lounged, cracking jokes and pouring drinks &mdash; and their own Shetland pony. The absurd and the domestic were one and the same.</p>

                    <p>Anderson also became consumed by porn and the Bizarro Hollywood industry that claimed the Valley as its Fertile Crescent. His relationship to the material differed from the average high schooler. There was the fucking, sure. But the real seduction was in the imagined backstories, the circumstantial tragicomedies of the casts and crews, which inspired Anderson to write and film <em>The Dirk Diggler Story</em>, a 32-minute mockumentary-style short about the pursuit, delusions, and costs of fame.</p>

                    <div class="open-trigger first" data-trigger-index="3"></div>
                    <p>At 26, Anderson’s first full-length feature, <em>Sydney</em>, had run into problems. The production company Rysher Entertainment made its own cuts to his Reno-set gambling story and released it under a different title, <em>Hard Eight</em>. During the process, Anderson squabbled with producers, barred them from the set, and refused to show any edited footage or make any significant suggested changes. But he didn’t have final cut and was eventually fired and locked out of his own editing room.</p>

                    <p>In the fallout, <a href="http://harpoonstudios.com/fromStoney/BESTOFCREATIVESCREENWRITING.PDF" target="_blank">Anderson told a reporter</a> that his experience on <em>Sydney</em> "created a sort of paranoia and guardedness in me that I'm glad I have because that will never, ever happen to me again." When he set out to film <em>Boogie Nights</em>, it was with a resolve bordering on arrogance. Compromise wasn’t part of the plan. Still, after an intense production and postproduction period — one in which the director had to manage a cranky, confused Burt Reynolds and an untested, rapping underwear model named Mark Wahlberg — Anderson was forced once again to fight studio heads for his cut of the film.</p>

                    <div class="open-trigger" data-trigger-index="4"></div>
                    <p>But Anderson’s vision prevailed this time. Nearly 20 years later, <em>Boogie Nights</em> endures. For its beautiful portrait of nontraditional families; for Reynolds and Wahlberg, the surrogate father and son, who were never better; for Philip Seymour Hoffman, squeezing into character and breaking hearts; for its prodigy director sticking to his guns and nailing it; for John C. Reilly’s hot-tub poetry; for Roller Girl. Is everybody ready? This is the making and near unmaking of <em>Boogie Nights</em>.</p>
                   
                    

                </div>
                
                <div class="cb"></div>
            </div>
            <div id="character-wrap">
                <div class="trigger-character-off"></div>
                <div class="character-title">AS TOLD BY...</div>
                <div id="character-chart">
                    <div id="trigger-character"></div>
                    <div class="characters">
                    <? foreach($displayCharacters as $chartCharacter){ 
                        $characterImage = $chartCharacter;
                        $chartCharacter = $characters[$chartCharacter];
                        echo    '<div class="character">'.
                                    '<img src="img/characters/'.$characterImage.'.png" class="character-headshot" />'.
                                    '<div class="character-info">'.
                                        '<div class="actor">'.$chartCharacter['name'].'</div>'.
                                        '<div class="role">'.$chartCharacter['role'].'</div>'.
                                    '</div>'.
                                '</div>';
                     } ?>
                     <div class="cb"></div>
                    </div>
                </div>
            </div>
            <div id="full-story">
                <?php 
                    $first_mentions = array();
                    foreach ($chapters as $key => $chapter){

                        echo '<div class="chapter-header chapter-'.$key.'" data-background-position="'.$chapter['background-position'].'">'.
                                '<img src="'.$chapter['image'].'" />'.
                                '<div class="texture"></div>'.
                                '<div class="title"><div class="number">Chapter '.$chapter['number'].'</div><div class="title-words">'.$chapter['title'].'</div></div>'.
                             '</div>';

                        if($key == '1'){
                            print_r('<div class="instructions">roll over names to see more info &dagger;</div>');
                        }
                        $story_chapter = 'chapter-'.$key;
                        foreach($story[$story_chapter] as $quote){
                            if(!in_array($quote['name'],$first_mentions)){
                                array_push($first_mentions,$quote['name']);
                                $quote['first_class'] = 'initial';
                            } else{
                                $quote['first_class'] = '';
                            }

                            $character = $characters[$quote['name']];
                            getMarkup($quote, $character);
                        }
                    }  
                ?>
                <div class="cb"></div>
            </div>
            <ol id="footnotes">
                <?php  
                    foreach($footnotes as $key=>$footnote){
                        $footnote_index = $key+1;
                        echo '<li data-footnote-index="'.$footnote_index.'">'.$footnote.'</li>';
                    }
                ?>
            </ol>
            <div class="footnote-box"><a href="#" class="footnote-close">x</a><span></span></div>
        </div>

        <!-- Begin Footer -->
        <footer class="footer" role="contentinfo">
            <div class="lc"> 

                <ul id="menu-footer-social-media" class="footer-social"><li id="menu-item-147694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147694"><a href="http://vip.dev/grantland/contact/" name="&amp;lpos=grantlandSocialNav&amp;lid=">Contact</a></li>
                    <li id="menu-item-147688" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147688"><a href="https://twitter.com/Grantland33" name="&amp;lpos=grantlandSocialNav&amp;lid=Twitter">Twitter</a></li>
                    <li id="menu-item-147689" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147689"><a href="https://www.facebook.com/Grantland33" name="&amp;lpos=grantlandSocialNav&amp;lid=Facebook">Facebook</a></li>
                    <li id="menu-item-147695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147695"><a href="http://vip.dev/grantland/masthead/" name="&amp;lpos=grantlandSocialNav&amp;lid=">Masthead</a></li>
                </ul>        <div class="btm-foot-links">
                    <ul id="menu-footer-site-navigation" class="nav-footer"><li id="menu-item-147680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147680"><a href="/features/" name="&amp;lpos=grantlandBottomNav&amp;lid=Features">Features</a></li>
                        <li id="menu-item-147681" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147681"><a href="/the-triangle/" name="&amp;lpos=grantlandBottomNav&amp;lid=The Triangle">The Triangle</a></li>
                        <li id="menu-item-147682" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147682"><a href="/hollywood-prospectus/" name="&amp;lpos=grantlandBottomNav&amp;lid=The Hollywood Prospectus">The Hollywood Prospectus</a></li>
                        <li id="menu-item-147683" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147683"><a href="/contributors/bill-simmons/" name="&amp;lpos=grantlandBottomNav&amp;lid=Simmons">Simmons</a></li>
                        <li id="menu-item-147684" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147684"><a href="/contributors/" name="&amp;lpos=grantlandBottomNav&amp;lid=Contributors">Contributors</a></li>
                        <li id="menu-item-147685" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147685"><a href="/podcasts/all/" name="&amp;lpos=grantlandBottomNav&amp;lid=Podcasts">Podcasts</a></li>
                        <li id="menu-item-147686" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147686"><a href="http://www.youtube.com/user/GrantlandNetwork" name="&amp;lpos=grantlandBottomNav&amp;lid=Video">Video</a></li>
                        <li id="menu-item-126497" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-126497"><a href="http://store.grantland.com/" name="&amp;lpos=grantlandBottomNav&amp;lid=Quarterly">Quarterly</a></li>
                        <li id="menu-item-147687" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147687"><a href="http://espn.go.com/" name="&amp;lpos=grantlandBottomNav&amp;lid=ESPN.com">ESPN.com</a></li>
                    </ul>        </div>

                <p><a href="http://disneytermsofuse.com/" target="_blank">Terms of Use</a> and <a href="http://disneyprivacycenter.com/" target="_blank">Privacy Policy and Safety Information/Your California Privacy Rights</a> are applicable to you. </p>
                <p class="copyright">&copy; 2014 ESPN Internet Ventures. All rights reserved. <a href="http://preferences-mgr.truste.com/?type=espn&affiliateId=148" target="_blank">Interest-Based Ads</a></p>
                <p>Powered by <a href="http://vip.wordpress.com/" rel="generator nofollow" class="powered-by-wpcom">WordPress.com VIP</a></p>
            </div>  
        </footer>
        <!-- End Footer -->

        <!-- Link to any custom JS here -->
        <script type='text/javascript' src='js/easing.js'></script>
        <script type='text/javascript' src='js/jquery.transit.js'></script>
        <script type='text/javascript' src='js/onscreen.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
    </body>
</html>