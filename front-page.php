<?php get_header(); ?>

  <main role="main">

  <!-- 'inspiring the next 1000 companies...' --><!-- CURRENTLY ENABLED -->
  <section class="landing frame" id="landing">
    <!-- LANDING -->
    <div class="panel boxy header" id="landing-header" style="min-height: 200px;">
      <div class="row">
        <div class="col-sm-6 striped">
          <div class="row">
            <div class="col-sm-10 col-sm-push-1 left">
              <div class="v-centered">
                <h1>
                  Recruiting a global movement of entrepreneurs
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-10 col-sm-push-1 right">
              <div class="v-centered">
                <h1>
                  Using I.T. to create massive environmental impact
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /LANDING> -->

  <!-- subnav bar (starts under landing, scrolls up then fixes at top) -->
  <!-- Affix.js call for the subnav bar -->
  <!-- Make subnav bar collapse clean -->
  <script type="text/javascript">
    //<![CDATA[
    $(window).load(function(){
      $(function() {
        $('#subnav-wrapper').height($("#subnav").height());  // Holds place of subnav on collapse if needed for layout
        $('#subnav').affix({
        offset: { top: $('#subnav').offset().top - 100 }     // offset value here should be height of main nav
        });
      });
    });//]]> 
  </script>
  <!-- what do we do? how do we do it? who's part of it? where are we? who's talking about it? who's supporting it? -->
  <section id="subnav-wrapper">
    <!-- SUBNAV --><!-- wrapper so that when we magicly JS this from inline to fixed we don't lose layout -->
    <nav class="navbar navbar-default navbar-inverse boxy" role="navigation" id="subnav">
      <!-- let screenreaders ditch this toy -->
      <div class="collapse navbar-collapse navbar-secondary-collapse">
        <div class="container" style="margin: 0 auto;">
          <ul class="nav nav-justified">
            <li class="active"><a href="#what" title="what">What do we do?</a></li>
            <li><a href="#how" title="how">How do we do it?</a></li>
            <li><a href="#who" title="who">Who's part of it?</a></li>
            <li><a href="#where" title="where">Where are we?</a></li>
            <li><a href="#social" title="social">Who's talking about it?</a></li>
            <li><a href="#sponsors" title="sponsors">Who's supporting it?</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section><!-- /SUBNAV -->

  <!-- Helping budding entrepreneurs, etc. (what slide/'whiteboard') --><!-- CURRENTLY ENABLED -->
  <section class="what frame" id="what">
    <!-- WHAT FRAME -->
    <!-- Helping Budding Entrepreneurs... -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>At the<br />
                  <span style="font-weight: bold;">Cleanweb Initiative</span><br />
                   we are...</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="whiteboard">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whiteboard.png" alt="Whiteboard with mindmap on it" />
      <div class="col-sm-10 col-sm-offset-1">
        <h1 class="secondary">We’re engineering serendipity and unleashing the Cleanweb network on the biggest opportunities of our lifetime</h1>
      </div>
    </div><!-- /container -->

    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->
  </section><!-- /WHAT FRAME -->

  <!-- We help entrepreneurs in all kinds of ways w/ rollover behaviour --><!-- CURRENTLY ENABLED -->
  <section class="how frame" id="how">
    <!-- HOW FRAME -->
    <!-- We help entrepreneurs in all kinds of ways... -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>
                  We help entrepreneurs in<br />
                  all kinds of ways
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="background"><!-- sets up triangle background overlay -->
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-push-1 knobs-container">

            <!-- leftmost knob column -->
            <div class="col-sm-4 knob-column knob-left">
              <div class="knob">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-down.png" alt="" id="knob-left" class="knob">
                <div class="knob-overlay">
                  <h3>Facilitating Connections</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-overlay-left.png" id="knob-overlay-left" alt="Connections icon" />
                </div><!--/knob-OVERLAY -->
              </div><!-- /knob itself -->
              <div class="knob-copy">
                <p>We’ve spun up a global network of Cleanweb entrepreneurs, innovators and experts. Whether you’re looking for capital, talent or need a hand getting your Cleanweb company off the ground, we’re here for you. Our main focus is getting you connected with the right people to help grow your Cleanweb community or business.</p>
              </div><!-- /knob-copy -->
            </div><!-- /leftmost knob column -->

            <!-- middle knob -->
            <div class="col-sm-4 knob-column knob-center">
              <div class="knob">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-down.png" alt="" id="knob-center" class="knob">
                <div class="knob-overlay">
                  <h3>Creating Opportunities</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-overlay-center.png" id="knob-overlay-center" alt="Expansion Icon" />
                </div><!--/knob-OVERLAY -->
              </div><!-- /knob itself -->
              <div class="knob-copy">
                <p>We’re working with the best in the business. Members of the Cleanweb from all over have rallied together to put together events, prizes and opportunities. With job postings, event updates and access to our curated network of professionals, we aim to give our members the best environment to create massive impact.</p>
              </div><!-- /knob-copy -->
            </div><!-- /center knob column -->

            <div class="col-sm-4 knob-column knob-right">
              <div class="knob">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-down.png" alt="" id="knob-right" class="knob">
                <div class="knob-overlay">
                  <h3>Providing Resources</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-overlay-right.png" id="knob-overlay-right" alt="Tools Icon" />
                </div><!--/knob-OVERLAY -->
              </div><!-- /knob -->
              <div class="knob-copy">
                <p>Want to start a community? We can help you with that. Want to run NYC Big Apps in your community? We have you covered. Using our member platform, <a href="https://cleanweb.grouptie.com" target="_blank">GroupTie</a>, we have uploaded community-created resources, templates and best practices. Sharing is a pillar of the Cleanweb movement and our members seem to be pretty darn good at it.</p>
              </div><!-- /knob-copy -->
            </div><!-- /right knob column -->

          </div><!-- /knob-container -->

        </div><!-- /row -->
      </div><!-- /container -->
    </div><!-- background -->

    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->
  </section><!-- /HOW FRAME -->

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.transform2d.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.rotate-knobs.js" type="text/javascript" charset="utf-8" async></script>

  <!-- red-based grid frame with fancy mouseover/click behavior --><!-- CURRENTLY ENABLED -->
  <section class="who frame" id="who">
    <!-- WHO FRAME -->
    <!-- Who's in on this? -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>The <span style="font-weight: bold">Cleanweb Initiative</span> is
                  already hard at work,
                  helping amazing individuals and great companies
                  get to the next level</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /FRAME-HEAD -->
  
    <!-- AMAZING INDIVIDUALS AND GREAT COMPANIES: 
    <!== the "WHO" GRID
    <!====================================== -->

    <!-- newer version, based on MosaicFlow jQuery plugin -->
    <!-- cf. https://github.com/sapegin/jquery.mosaicflow -->

    <?php // in final template, automate this through a loop...? or leave hardcode? ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mosaicflow.min.js"></script>


    <div class="clearfix" id="who-mosaic">
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/weave-logo.png" alt="">
        <div class="copy">
          <h3><a href="http://weaveenergy.com/" target="_blank">Weave Energy</a></h3>
          <p>Generating leads and increasing solar adoption with Social</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/wegowise-logo.jpg" alt="WegoWise logo">
        <div class="copy">
          <h3><a href="https://www.wegowise.com">WegoWise</a></h3>
          <p>improving the efficiency of the built environment</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/wirewatt-logo.png" alt="WattWire logo">
        <div class="copy">
          <h3><a href="http://www.wirewatt.com" target="_blank">WireWatt</a></h3>
          <p>View real-time energy consumption and history through meters, properties and portfolios</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/nest.jpg" alt="Nest Thermostat">
        <div class="copy">
          <h3><a href="https://nest.com" target="_blank">Nest</a></h3>
          <p>The next generation of Thermostat (and now Fire Alarm)</p>
        </div>
      </div>
     <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/bractlet-logo.png" alt="Bractlet">
        <div class="copy">
          <h3><a href="http://www.bractlet.com" target="_blank">Bractlet</a></h3>
          <p>lowering the barrier to energy efficiency through better data</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/ridescout-logo.jpg" alt="Ridescout">
        <div class="copy">
          <h3><a href="http://www.ridescoutapp.com" target="_blank">Ridescout</a></h3>
          <p>Transportation made simple</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/watrhub-logo.jpg" alt="WatrHub">
        <div class="copy">
          <h3><a href="http://www.watrhub.com" target="_blank">WatrHub</a></h3>
          <p>An Online Intelligence Center for Marketers of Water &amp; Wastewater Treatment Technologies</p>
        </div>  
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/noesis-logo.jpg" alt="Noesis Energy">
        <div class="copy">
          <h3><a href="https://www.noesisenergy.com/" target="_blank">Noesis</a></h3>
          <p>world's fastest growing energy measurement and savings platform</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/yerdle-logo.jpg" alt="Yerdle">
        <div class="copy">
          <h3><a href="https://yerdle.com" target="_blank">Yerdle</a></h3>
          <p>helping you give and get things for free</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/solarlist-logo.jpg" alt="">
        <div class="copy">
          <h3><a href="https://solarlist.com/">SolarList</a></h3>
          <p>We help people go solar</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/mastodonc-logo.jpg" alt="MastodonC">
        <div class="copy">
          <h3><a href="http://www.mastodonc.com" target="_blank">Mastodon&nbsp;C</a></h3>
          <p>Open source technology platform &amp; the skills to help you realise that potential</p>
        </div>
      </div>
      <div class="mosaicflow__item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/who/sidecar.jpg" alt="Sidecar">
        <div class="copy">
          <h3><a href="https://www.side.cr" target="_blank">Sidecar</a></h3>
          <p>Share a ride with someone awesome</p>
        </div>
      </div>
    </div>

    <!-- animate pullquotes (DISABLED) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pullquotes.js" type="text/javascript" charset="utf-8"></script>
    <div id="mosaic-pull-quote-target"></div>

    <!-- set up the grid above -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.whos-who-mosaic-tweak.js" type="text/javascript" charset="utf-8" async defer></script>


  </section><!-- /WHO FRAME -->

  <!-- where/map frame --><!-- CURRENTLY ENABLED -->
  <section class="where frame" id="where">
    <!-- WHERE FRAME -->
    <!-- Where's the action? -->
    <!-- map frame -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>The <span style="font-weight: bold;">Cleanweb Initiative</span> 
                  has events and communities<br />
                  around the world - find one near you</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- MAP CONTENT --><!-- n.b. map tiles are specified in /js/communities-map.js -->
    <div class="row">
      <div style="position: relative; height: 600px;">

        <div id="map"></div>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/communities-map.js" type="text/javascript" charset="utf-8" async defer></script>

        <div class="container map-overlay-container">
          <div class="row">
            <div class="col-lg-3 col-lg-offset-8 col-sm-4 col-sm-offset-7 col-xs-12">
              <div class="panel map-more-info">
                <form action="https://drive.google.com/folderview" method="get" target="_blank">
                  <input type="hidden" name="id" value="0B3cX2jK4-Emuc0NiQTFuajJBNkU"><!-- resource locator -->
                  <input type="hidden" name="usp" value="sharing">
                  <h3>Want to start a Cleanweb community near you?</h3>
                  <button type="submit" class="btn btn-primary btn--more-info">More Info</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /row -->

        <!-- FRAME FOOTER / "Join Now" -->
    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->

  </section><!-- /WHERE FRAME -->

  <!-- featured event frame --><!-- CURRENTLY DISABLED --><?PHP /* ?>
  <section class="events frame" id="events">
    <!-- EVENT FRAME -->
    <!-- upcoming/featured events -->
    <!--
    <!==  <div class="row frame-head frame-head--background">
    <!==    <div class="row frame-head frame-head--internal">
    <!==      <div class="container">
    <!==        <div class="col-sm-10 col-sm-push-1">
    <!==          <div class="panel boxy">
    <!==            <div class="v-centered">
    <!==              <h2>Let's get together
    <!==               and make a difference</h2>
    <!==            </div>
    <!==          </div>
    <!==        </div>
    <!==      </div>
    <!==    </div>
    <!==  </div>
    <!==
    <!==  <!== FILLER CONTENT -->
    <!--  <div class="container">
    <!==    <h1 class="secondary">Featured Event</h1>
    <!==    <h1 class="secondary">NYC May Hackathon</h1>
    <!==    <p class="secondary">Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    <!==    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    <!==    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    <!==    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    <!==    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    <!==    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!==  </div><!== /container -->
  </section><!-- /EVENT FRAME -->
  <?php */ ?>

  <!-- social media/twitter plugin frame --><!-- CURRENTLY ENABLED -->
  <section class="social frame" id="social">
    <!-- SOCIAL FRAME -->
    <!-- big twitter splat -->
  
   <div class="row frame-head frame-head--background">
     <div class="row frame-head frame-head--internal">
       <div class="container">
         <div class="col-sm-10 col-sm-push-1">
           <div class="panel boxy">
             <div class="v-centered">
               <h2>Join the #Cleanweb <br />
                 conversation on
                 Twitter and Facebook</h2>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  
    <!-- TINTUP CONTENT -->
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <script src="http://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
          <div class="tintup" data-id="cleanwebone"></div>
        </div>
      </div>
    </div><!-- /TINTUP -->

    <!-- FRAME FOOTER / "Join Now" -->
    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->
  </section><!-- /SOCIAL FRAME -->

  <!-- sponsor frame --><!--CURRENTLY ENABLED-->

  <section class="sponsors frame" id="sponsors">
    <!-- SPONSOR FRAME -->
    <!-- with a great big thanks to... -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal"><!-- FRAME HEADER -->
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>The <span style="font-weight: bold;">Cleanweb Initiative</span> is supported by some of the<br />
                 most innovative companies in the world.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /FRAME HEADER -->
    <div class="container">
      <!-- Sponsor grid -->
      <div class="row sponsor-grid">

        <div class="col-supporters col-supporters--leadership col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
        <!-- LEADERSHIP level -->
          <div class="row">
            <div class="col-md-12">
              <h3>Leadership</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <a href="http://www.facebook.com" title="Facebook" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-Facebook.png" alt="Facebook" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://www.rockportcap.com" title="RockPort Capital" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-RockportCapital.gif" alt="Rockport Capital" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <a href="http://www.terravp.com" title="TERRA Venture Partners" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-TerraVenturePartners.jpg" alt="TERRA Venture Partners" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://www.blackcoralcapital.com" title="Black Coral Capital" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-BlackCoralCapital.png" alt="Black Coral Capital" />
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <a href="http://www.cleanskies.org" title="American Clean Skies" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-AmericanCleanSkiesFoundation.png" alt="American Clean Skies" />
              </a>
            </div>
            <div class="col-sm-4">
              <a href="http://www.greenstart.com" title="Greenstart" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-Greenstart.png" alt="Greenstart" />
              </a>
            </div>
            <div class="col-sm-4">
              <a href="https://www.yerdle.com/" title="Yerdle" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-yerdle.jpg" alt="yerdle" />
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <a href="http://www.mdv.com" title="Mohr Davidow" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-MohrDavidow.png" alt="Mohr Davidow" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://www.sungevity.com/" title="Sungevity" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-Sungevity.gif" alt="Sungevity" width="168px" height="42px" />
              </a>
            </div>
          </div>
        </div><!-- /LEADERSHIP level -->

        <div class="col-supporters col-supporters--partnership col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-1">
        <!-- PARTNERSHIP level -->
          <div class="row">
            <div class="col-md-12">
              <h3>Partnership</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <a href="http://energy.gov" title="US Department of Energy" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-DoE.jpg" alt="US Department of Energy" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://sxsweco.com" title="SXSW Eco" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-SXSW-Eco.jpg" alt="SXSW Eco" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <a href="http://theclimategroup.org" title="The Climate Group" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-ClimateGroup.gif" alt="The Climate Group" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-push-1">
              <a href="http://c40cities.org" title="C40 Cities" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-C40.gif" alt="C40 Cities" />
              </a>
            </div>
            <div class="col-sm-4 col-sm-push-2">
              <a href="http://www.whitehouse.gov/administration/eop/ostp" title="Office of Science and Technology Policy" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-POTUS.gif" alt="Office of Scienc and Technology Policy" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-push-1">
              <a href="http://nyc.gov" title="NYC.gov" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-NYCgov.gif" alt="NYC.gov">
              </a>
            </div>
            <div class="col-sm-4 col-sm-push-2">
              <a href="http://subsite.kk.dk/sitecore/content/Subsites/CityOfCopenhagen/SubsiteFrontpage.aspx?element=header" title="City of Copenhagen" target="_blank" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-CityOfCopenhagen.png" alt="City of Copenhagen" />
              </a>
            </div>
          </div>
        </div><!-- /PARTNERSHIP level -->

      </div>
    </div><!--/CONTAINER for Sponsor Grid-->
  </section><!--/SPONSOR FRAME -->

  </main>

<?php get_footer(); ?>
