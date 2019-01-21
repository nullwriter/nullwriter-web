<?php 
date_default_timezone_set('America/Caracas');

function getAge($then) {
    $then = date('Ymd', strtotime($then));
    $diff = date('Ymd') - $then;
    return substr($diff, 0, -4);
}

$yearsExperience = getAge("2014-04-04");

?>

<html>
    <head>
        <link rel="apple-touch-icon" sizes="57x57" href="dist/images/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="dist/images/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="dist/images/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="dist/images/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="dist/images/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="dist/images/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="dist/images/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="dist/images/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="dist/images/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="dist/images/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="dist/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="dist/images/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="dist/images/favicon-16x16.png">
        <link rel="manifest" href="dist/images/manifest.json">
        <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
        <title>Christian Feo's Portfolio</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-3 px-0 bg-dark" id="sidebar-wrap">
                    <div class="py-2 sticky-top flex-grow-1">
                        <div class="nav flex-md-column sidebar-links">
                            <div class="d-flex flex-column" id="sidebar-top">
                                <a href="" class="nav-link d-none d-sm-inline text-center">
                                    <img src="dist/images/foto-linkedin.jpeg" class="rounded-circle w-50" />
                                </a>
                                <span id="name-label" class="text-center">Christian Feo</span>
                                <span id="title-label" class="text-center">FullStack Developer</span>
                                <div id="sidebar-footer">
                                    <a href="https://www.linkedin.com/in/christianfeo/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="https://github.com/nullwriter" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#about-me" class="nav-link sb">About Me</a>
                            <a href="#things-i-do" class="nav-link sb">Things I Do</a>
                            <a href="#work-experience" class="nav-link sb">Work Experience</a>
                            <a href="#contact" class="nav-link sb">Contact</a>
                        </div>
                        <div class="text-center" id="footnote">
                            Made with yarn, webpack & bootstrap4
                        </div>
                    </div>
                </div>

                <div class="col" id="main">
                    <section id="about-me">
                        <div class="container-fluid">
                            <h3>Hi!</h3>
                            <h4 class="sub-title">My name is Christian Feo, I do all things web. I'm a Computer Science graduate with more than <?= $yearsExperience ?> years of professional experience as a Fullstack Developer. </h4>
                            <p class="sub-text">
                                I've been involved in numerous web development projects and have worked with several technology stacks and frameworks (Wordpress Plugins & Themes, PHP, Laravel, Cake, Zend, Javascript, JQuery, Angular 1, CSS SASS SCSS, RESTFul, git, docker).
                            </p>
                            <p class="sub-text">
                                I've found that being able to express concerns, roadblocks, and be proactive in alternative solutions to colleagues of varying technical backgrounds has been invaluable in my professional career as a full stack developer.
                            </p>
                            <p class="sub-text">
                                When I'm not developing, I like going for enduro rides, playing football and scuba diving.
                            </p>
                        </div>
                    </section>

                    <section id="things-i-do">
                        <div class="container-fluid">
                            <h4 class="sub-title">Things I Can Do</h4>
                            <p class="sub-text">These are some technologies which I feel comfortable working with and have been using througout my years of experience:</p>
                            <div class="d-flex justify-content-center">
                                <ul class="col-md-4 no-style-list">
                                    <li>
                                        <i class="devicons devicons-git"></i>
                                        <span>Git</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-npm"></i>
                                        <span>NPM (yarn, webpack)</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-docker"></i>
                                        <span>Docker</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-javascript"></i>
                                        <span>Javascript (ajax, jquery)</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-angular"></i>
                                        <span>Angular 1</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-bootstrap"></i>
                                        <span>Bootstrap</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-sass"></i>
                                        <span>SASS SCSS</span>
                                    </li>
                                </ul>
                                <ul class="col-md-5 no-style-list">
                                    <li>
                                        <i class="devicons devicons-css3"></i>
                                        <span>CSS3</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-wordpress"></i>
                                        <span>Wordpress (plugins/themes)</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-python"></i>
                                        <span>Python</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-php"></i>
                                        <span>PHP (laravel, cake, zend)</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-database"></i>
                                        <span>DB (MySQL, PostgreSQL)</span>
                                    </li>
                                    <li>
                                        <i class="devicons devicons-java"></i>
                                        <span>Java</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section id="work-experience">
                        <div class="container-fluid">
                            <h4 class="sub-title">Work &amp; Experience</h4>
                            <div class="work-list">

                                <div class="work-item">
                                    <h5>SomosData - Fullstack Developer</h5>
                                    <p class="work-dates">04/2017 - Present</p>
                                    <p class="work-description">
                                        A small team of freelance developers, some of the projects we've been involved in include Wordpress custom plugins and themes, building webapps using Zend Expressive, and helping other development teams with work load.
                                    </p>
                                </div>

                                <div class="work-item">
                                    <h5>Galpa Services - Middleware / Frontend Developer</h5>
                                    <p class="work-dates">04/2016 - 04/2017</p>
                                    <p class="work-description">
                                        Middleware developer, working on Webservices, API development, ERP, SAP, Java, PHP, Laravel 5 and Python. As a frontend develepor, I worked with Laravel and Vue, creating web apps for businesses like big Supermarkets and Tech stores.
                                    </p>
                                </div>

                                <div class="work-item">
                                    <h5>Cusica - Lead Developer</h5>
                                    <p class="work-dates">09/2014 - 04/2016</p>
                                    <p class="work-description">
                                        Leading the development of a Web Music Platform, using the latest HTML5, CSS3 (SASS SCSS), Javascript (Angular, Ajax) and PHP (CakePHP 3.x) technologies and practices, creating a functional ecommerce site with a complete user experience, both front and backend administration system. Processing secure credit card transactions and dealing with clients and customers.
                                    </p>
                                </div>

                                <div class="work-item">
                                    <h5>Serrula Research Ltd - Researcher</h5>
                                    <p class="work-dates">08/2014</p>
                                    <p class="work-description">
                                        Market Research about the economic environment in Peru. Speaking with targeted business owners and enquiring about relevant information.
                                    </p>
                                </div>

                                <div class="work-item">
                                    <h5>Recreaciones Aventura - Counselor</h5>
                                    <p class="work-dates">08/2013 - 09/2013</p>
                                    <p class="work-description">
                                        Worked as Counselor for a summer camp focused on teaching English to spanish speaking kids, while also leading adventures, coaching sports, organizing activities and events, teaching values and improv theatre, leading a group of 100 kids. Communication and Interpersonal Skills.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section id="contact">
                        <div class="container-fluid">
                            <h4 class="sub-title">Contact Me</h4>
                            <p id="contact-text">
                                You can find me at my twitter <a href="https://twitter.com/christianf21" target="_blank">@christianf21</a>, or you can drop me an email at <a href="mailto:christianfeob@yahoo.com">christianfeob@yahoo.com</a>
                            </p>
                            <img src="dist/images/contact-pic.jpg" id="contact-pic">
                        </div>
                    </section>
                </div>

            </div>
        </div>

        <script type="text/javascript" src="dist/app.bundle.js"></script>
    </body>
</html>
