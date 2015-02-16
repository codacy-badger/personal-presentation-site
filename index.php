<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>be-codified.com | freelance front-end developer</title>

        <!-- stylesheets -->
        <link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen" />
        <link href="css/custom_styles.min.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen" />

        <!-- icons -->
        <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114.png" />

        <!-- IE8 support for html5 elements and media queries -->
        <script type="text/javascript" src="js/lib/html5shiv.min.js"></script>
        <script type="text/javascript" src="js/lib/respond.min.js"></script>

        <!-- google analytics tracking code -->
        <script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-57549333-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <article>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main-color-1">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-right intro">
                            <header>
                                <h1>
                                    <a href="http://www.be-codified.com" title="be-codified.com">be-codified.com</a>
                                </h1>
                            </header>
                            <h2>Hi, my name is Žiga and I'm a <strong>front-end developer</strong>.</h2>
                            <?php require_once('time_period.php'); ?>
                            <p class="lead">I have been working in the web industry for the past <?php echo time_period($date_webindustry, $date_today, 0); ?> years, for the last <?php echo time_period($date_freelancing, $date_today, 0); ?> years as a freelancer.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left profile">
                        <ul class="achievements">
                            <li>
                                <span class="values">
                                    <span class="counter">
                                        <?php echo time_period($date_webindustry, $date_today, 0); ?>+
                                    </span>
                                </span>
                                <span class="desc">Years of<br />Experience</span>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <span class="values">
                                    <span class="counter small">90+</span>
                                </span> 
                                <span class="desc">Happy<br />Clients</span>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <span class="values">
                                    <span class="counter smaller">150+</span>
                                </span>
                                <span class="desc">Completed<br />Projects</span>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main-color-2">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 col-lg-offset-1">
                            <h2>My main strenghts</h2>
                            <ul class="plus-bullets strenghts">
                                <li>strong understanding of developing for the web and <strong class="reduced-right-padding">a careful eye for design</strong>,</li>
                                <li>exceptional ability to <strong>translate designs</strong> into semantic, accessible front-end code,</li>
                                <li>strong understanding of <strong>modern web technologies</strong> and workflows,</li>
                                <li>strong understanding of mobile and <strong>responsive design</strong> and development practices,</li>
                                <li>solid understanding of <strong class="reduced-right-padding">designing in a browser</strong>,</li>
                                <li>solid understanding of <strong>integration or modification of front-end code</strong> with CMSs (i.e. Wordpress, Joomla, Magento),</li>
                                <li>solid understanding of <strong class="reduced-right-padding">SEO</strong>,</li>
                                <li>solid understanding and appreciation of <strong class="reduced-right-padding">colour and typography</strong>,</li>
                                <li>ability to work directly with designers to <strong>implement designs</strong> and provide feedback on design if needed,</li>
                                <li>excellent <strong class="reduced-right-padding">communication skills</strong>,</li>
                                <li>ability to dive in and learn new things to <strong class="reduced-right-padding">find solutions for technical problems</strong>.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 portfolio item-1" style="background-color: beige;">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-right">
                            <p class="latest">Latest work</p>
                            <h2>Consumer federation of Slovenia</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et efficitur ipsum. Fusce accumsan congue diam, et bibendum mauris aliquam</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main-color-1">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-left">
                        <h2>My main skills</h2>
                            <ul class="plus-bullets skills">
                                <li><strong>HTML5</strong> (modern markup),</li>
                                <li><strong>CSS3</strong> (modern properties, web font embeding, SVG),</li>
                                <li><strong>cross-browser</strong> (i.e. Chrome, Firefox, Safari, Internet Explorer 9+) and <strong>cross-platform</strong> (Android, iOS iPhone/iPad) <strong class="reduced-right-padding">compatibility testing</strong>,</li>
                                <li><strong>jQuery</strong> (DOM elements manipulation, handling events, JSON parsing and using Ajax),</li>
                                <li><strong>Git</strong> (working with a team of developers, service BitBucket),</li>
                                <li>experienced in <strong>frameworks or theme starters</strong> (i.e. Bootstrap, Html5Boilerplate, _s),</li>
                                <li><strong>graphic tools</strong> (i.e. Adobe Photoshop and Illustrator),</li>
                                <li>basic understanding of PHP and MySQL.</li>
                                <li>// note: AngularJS, Less, GitHub, Rest API, animations?</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main-color-1">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-right">
                            <h2>Magical tools I use on a daily basis</h2>
                            <ul class="plus-bullets tools">
                                <li>sophisticated text editor <a href="http://www.sublimetext.com/" target="_blank">Sublime Text 2</a><br /><span class="warning"><span>Warning:</span> You can easly fall in love with. Proceed to link with caution!</span></li>
                                <li>
                                    <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> (framework for faster and easier web development), 
                                </li>
                                <li>
                                    CSS pre-processor <a href="http://lesscss.org/" target="_blank">Less</a>,
                                </li>
                                <li>
                                    <a href="http://jquery.com/" target="_blank">jQuery</a> - fast, small, and feature-rich JavaScript library
                                </li>
                                <li>debugging tools <a href="https://developer.chrome.com/devtools" target="_blank">Chrome DevTools</a> built into Google Chrome</li>
                                <li>JavaScript task runner <a href="http://gruntjs.com/" target="_blank">Grunt</a> (note: what libraries should be here?)</li>
                                <li>all running on a small thing called Apple MacBook Pro 13", extended to an external 24" monitor</li>
                                <li>//note: animations?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 portfolio item-2" style="background-color: beige;">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-left">
                            <p class="latest">Latest work</p>
                            <h2>Some title goes here</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et efficitur ipsum. Fusce accumsan congue diam, et bibendum mauris aliquam</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 portfolio item-3" style="background-color: beige;">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-right">
                            <p class="latest">Latest work</p>
                            <h2>iPhone giveaway</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et efficitur ipsum. Fusce accumsan congue diam, et bibendum mauris aliquam</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 main-color-1">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 pull-left">
                            <h2>Want to hire me for a project?</h2>
                            <p>Please feel free to contact me by any communication channel:</p>
                            <ul class="contacts">
                                <li>
                                    <a href="mailto:ziga@be-codified.com" class="email">ziga@be-codified.com</a>
                                </li>
                                <li>
                                    <a href="skype:ziga_vukcevic?call" class="skype">ziga_vukcevic</a>
                                </li>
                                <li>
                                    <a href="tel: 0038651313680" class="phone">00386 51 313 680</a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/be_codified" class="twitter" target="_blank">@be_codified</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main-color-2">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 col-lg-offset-1">
                            <p class="lead">How was this site made?</p>
                            <p>No website template has been used. I have coded it with modern technologies:</p>
                            <ul class="plus-bullets how-made">
                                <li>HTML5, CSS3 (using Less), jQuery and animations // note: change this,</li>
                                <li>by using responsive design and Bootstrap framework,</li>
                                <li>checked with HTML5 and CSS validator (grunt-lint5, CSS validator) and PageSpeed Insights,</li> 
                                <li>cross-browser and cross-platform compatibility was tested as well.</li>
                            </ul>
                            <ul class="plus-bullets how-made">
                                <li>Feel free to see whole project code at GitHub.</li>
                            </ul>
                            <ul class="plus-bullets how-made">
                                <li>Design came under hands of Groga Tancek, photography triggered by Ana Skobe. Both made by love. // note: cleaner sentence</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
            <footer>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main-color-2 business-owner">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-10 col-lg-offset-1">
                            <address class="text-center">Business owner information: Žiga Vukčevič s.p., Tržaška 121, 1000 Ljubljana, Slovenia<br />VAT Nr.: SI86291459, Registration Nr.: 6531164000, IBAN: SI56 6100 0000 6613 419, BIC: HDELSI22</address>
                            <p class="text-center">
                                <small>Copyright 2015 © be-codified.com</small>
                            </p>
                        </div>
                    </div>
            </footer>
        </div>
    
        <!-- jquery and main script -->
        <script type="text/javascript" src="js/lib/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js?v=<?php echo time(); ?>"></script>
    </body>
</html>