@include('layouts.header')
<div class="pageloader"></div>
<div class="infraloader is-active"></div>
@include('layouts.topbar')

<div class="hero gradient-hero is-fullheight">
        
        <div class="square square-1"></div>
        <div class="square square-2"></div>

        <img class="slant-shape" src="assets/img/graphics/legacy/slant-light.svg" alt="">

        <!-- Hero content -->
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered hero-caption">
                    <div class="column is-5 laptop-container">
                        <img class="laptop levitate" src="assets/img/graphics/legacy/iso-laptop-no-shadow-app.png" alt="">
                        <img class="laptop-shadow scaleShadow" src="assets/img/graphics/legacy/shadow.png" alt="">
                    </div>
                    <div class="column is-7 is-hero-title">
                        <h1 class="title is-3 is-medium">
                            Quiz | Surveys | Reviews
                        </h1>
                        <h2 class="subtitle is-4">
                            Take Quizes for multi purpose in a systemetic manner.
                        </h2>
                        <div class="buttons">
                            <a href="login" class="button button-cta is-bold btn-align white-btn is-rounded raised">
                                Get Started
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="section">
        <div class="container">
            <!-- Feature -->
            <div class="columns is-vcentered">
                <div class="column is-7 has-text-centered">
                    <img class="featured-image" src="assets/img/graphics/widgets/widget-1-core.png" data-base-url="assets/img/graphics/widgets/widget-20" data-extension=".png" alt="">
                </div>
                <div class="column is-5">
                    <h2 class="title section-title is-demo bordered dark-text no-margin">Interactive Dashboard & Profiles</h2>
                    <p class="section-feature-description">User can view his Activity in an Infomative way on Dashboards
                    </p>
                </div>
            </div>
            <!-- Feature -->
            <div class="columns is-vcentered">
                <div class="column is-7 has-text-centered is-hidden-desktop is-hidden-tablet">
                    <img class="featured-image" src="assets/img/graphics/drawings/drawing-2-core.svg"  alt="">
                </div>
                <div class="column is-5">
                    <h2 class="title section-title is-demo bordered dark-text no-margin">Analytic Quiz Reports</h2>
                    <p class="section-feature-description">Once the Quiz is completed Admin can view Detailed Report of Quiz Stats, User Performance and many more detail.
                    </p>
                </div>
                <div class="column is-7 has-text-centered is-hidden-mobile">
                    <img class="featured-image" src="assets/img/graphics/drawings/drawing-2-core.svg"  alt="">
                </div>
            </div>
            <!-- Feature -->
            <div class="columns is-vcentered">
                <div class="column is-7 has-text-centered">
                    <img class="featured-image" src="assets/img/graphics/compositions/drawing-bw-3-core.svg"  alt="">
                </div>
                <div class="column is-5">
                    <h2 class="title section-title is-demo bordered dark-text no-margin">Quickly Create Quiz</h2>
                    <p class="section-feature-description">You can Quickly create your Quizes By using our QuestionBank which comes with many Questions from Different categories.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="section">
        <div class="container">
            <div class="section-title has-text-centered">
                <h2 class="title is-2">Why our customers choose Bulkit</h2>
                <h4>For those with the taste of excellence.</h4>
            </div>

            <div class="carousel-wrap">
                <div class="testimonials-solo-carousel">
                    <!--Carousel item-->
                    <div class="testimonial-item">
                        <div class="left-side">
                            <div class="avatar-container">
                                <img class="dots is-top" src="assets/img/graphics/legacy/dots.svg" alt="">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/demo/photos/1.jpg">
                                <img class="dots is-bottom" src="assets/img/graphics/legacy/dots.svg" alt="">
                            </div>
                            <div class="avatar-info">
                                <h3>Mike Kascinczki</h3>
                                <p>CEO</p>
                            </div>
                        </div>
                        <div class="right-side">
                            <img class="company-logo" src="assets/img/logos/custom/infinite.svg" alt="">
                            <div class="testimonial-content">
                                <p class="text-content">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Invidiosum nomen est, infame,
                                    suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges: constructio interrete.
                                    Aliter homines, aliter
                                    philosophos loqui putas oportere?"
                                </p>
                                <a class="learn-more" href="#">
                                    <span>Learn More</span>
                                    <i class="sl sl-icon-arrow-right-circle"></i>
                                </a>
                                <div class="metrics">
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="90,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Sales</span>
                                            <span>Increased by 90%</span>
                                        </div>
                                    </div>
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="60,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Conversions</span>
                                            <span>Increased by 60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel item-->
                    <div class="testimonial-item">
                        <div class="left-side">
                            <div class="avatar-container">
                                <img class="dots is-top" src="assets/img/graphics/legacy/dots.svg" alt="">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/demo/photos/2.jpg">
                                <img class="dots is-bottom" src="assets/img/graphics/legacy/dots.svg" alt="">
                            </div>
                            <div class="avatar-info">
                                <h3>Andrew Brennan</h3>
                                <p>CEO</p>
                            </div>
                        </div>
                        <div class="right-side">
                            <img class="company-logo" src="assets/img/logos/custom/covenant.svg" alt="">
                            <div class="testimonial-content">
                                <p class="text-content">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Invidiosum nomen est, infame,
                                    suspectum. Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges: constructio interrete.
                                    Aliter homines,
                                    aliter philosophos loqui putas oportere?"
                                </p>
                                <a class="learn-more" href="#">
                                    <span>Learn More</span>
                                    <i class="sl sl-icon-arrow-right-circle"></i>
                                </a>
                                <div class="metrics">
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="90,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Sales</span>
                                            <span>Increased by 90%</span>
                                        </div>
                                    </div>
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="60,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Conversions</span>
                                            <span>Increased by 60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel item-->
                    <div class="testimonial-item">
                        <div class="left-side">
                            <div class="avatar-container">
                                <img class="dots is-top" src="assets/img/graphics/legacy/dots.svg" alt="">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/demo/photos/3.jpg">
                                <img class="dots is-bottom" src="assets/img/graphics/legacy/dots.svg" alt="">
                            </div>
                            <div class="avatar-info">
                                <h3>Natalia Simonova</h3>
                                <p>Marketing</p>
                            </div>
                        </div>
                        <div class="right-side">
                            <img class="company-logo" src="assets/img/logos/custom/grubspot.svg" alt="">
                            <div class="testimonial-content">
                                <p class="text-content">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Invidiosum nomen est, infame,
                                    suspectum.
                                    Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges: constructio interrete.
                                    Aliter homines,
                                    aliter philosophos loqui putas oportere?"
                                </p>
                                <a class="learn-more" href="#">
                                    <span>Learn More</span>
                                    <i class="sl sl-icon-arrow-right-circle"></i>
                                </a>
                                <div class="metrics">
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="90,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Sales</span>
                                            <span>Increased by 90%</span>
                                        </div>
                                    </div>
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="60,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Conversions</span>
                                            <span>Increased by 60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel item-->
                    <div class="testimonial-item">
                        <div class="left-side">
                            <div class="avatar-container">
                                <img class="dots is-top" src="assets/img/graphics/legacy/dots.svg" alt="">
                                <img class="avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/demo/photos/4.jpg">
                                <img class="dots is-bottom" src="assets/img/graphics/legacy/dots.svg" alt="">
                            </div>
                            <div class="avatar-info">
                                <h3>Norbert Ryan</h3>
                                <p>CFO</p>
                            </div>
                        </div>
                        <div class="right-side">
                            <img class="company-logo" src="assets/img/logos/custom/phasekit.svg" alt="">
                            <div class="testimonial-content">
                                <p class="text-content">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Invidiosum nomen est, infame,
                                    suspectum.
                                    Utilitatis causa
                                    amicitia est quaesita. Non laboro, inquit, de nomine. Duo Reges: constructio interrete.
                                    Aliter homines,
                                    aliter philosophos loqui putas oportere?"
                                </p>
                                <a class="learn-more" href="#">
                                    <span>Learn More</span>
                                    <i class="sl sl-icon-arrow-right-circle"></i>
                                </a>
                                <div class="metrics">
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="90,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Sales</span>
                                            <span>Increased by 90%</span>
                                        </div>
                                    </div>
                                    <div class="metric">
                                        <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="33" xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#00acc1" stroke-width="2" stroke-dasharray="60,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <circle class="circle-chart__circle" stroke="#1e78d7" stroke-width="2" stroke-dasharray="30,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                            <g class="circle-chart__info">
                                            </g>
                                        </svg>
                                        <div class="meta">
                                            <span>More Conversions</span>
                                            <span>Increased by 60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Carousel footer-->
                <div class="carousel-footer">
                    <div class="rating-block">
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>4.9 Rating based on 849 votes</p>
                    </div>
                    <div class="support-block">
                        <i class="fa fa-comment"></i>
                        <div class="meta">
                            <span>Dedicated Support Team</span>
                            <span>2 min response time in live chat</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="section">
        <div class="container">
            <div class="section-title has-text-centered">
                <h2 class="title is-2">Frequently Asked Questions</h2>
                <h4>Everything you need to know to get started.</h4>
            </div>

            <div class="faq-wrapper">
                <div class="columns">
                    <div class="column is-5 is-offset-1">
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>How can I properly setup an account?</h3>
                            </div>
                            <div class="block-body">
                                <p>Just Fill Up the Registration Form and you are all set to take Quizes</p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I ReUse My Quiz more than once</h3>
                            </div>
                            <div class="block-body">
                                <p>Yes! You can reuse your Quiz anytime and you can also reuse question to create new Quiz</p>
                            </div>
                        </div> 
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Are allowed to sign up for more than one account with the same email address?</h3>
                            </div>
                            <div class="block-body">
                                <p>No! email address is unique for every account</p>
                            </div>
                        </div>                       
                        
                        
                    </div>
                    <div class="column is-5">
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can I invite people who don't own an account yet to my team?</h3>
                            </div>
                            <div class="block-body">
                                <p>It depend on your Quiz type if it is public than anyone can take Quiz by just using their Mail Id</p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>How many User are allowed to take Quiz?</h3>
                            </div>
                            <div class="block-body">
                                <p>Currently their is no limit on Taking Quiz.</p>
                            </div>
                        </div>
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Do you make custom implementations?</h3>
                            </div>
                            <div class="block-body">
                                <p>Yes! we do but it comes with extra charges which depends on your customization</p>
                            </div>
                        </div>
                        
                        <!--Faq Block-->
                        <div class="faq-block">
                            <div class="block-header">
                                <div class="header-icon">
                                    <i class="fa fa-plus"></i>
                                </div>
                                <h3>Can we manage user roles?</h3>
                            </div>
                            <div class="block-body">
                                <p>Currently their is only two roles Quiz maker and Quiz takers. But you can see more roles in future updates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="section">
        <!--Squares-->
        <div class="square square-4"></div>
        <div class="square square-5"></div>
        <div class="square square-6"></div>
        <div class="square square-7"></div>

        <div class="container">
            <div class="section-title has-text-centered">
                <h2 class="title is-2">Supercharge your Marketing</h2>
                <h4>Discover a customer segmentation platform where everything is easy to do.</h4>
            </div>

            <!--Quick signup-->
            <div class="quick-landing-signup">
                <div class="control">
                    <input type="text" class="input is-rounded" placeholder="Enter your work Email">
                    <button class="button is-rounded">Try For Free</button>
                </div>
            </div>

            <!--Small features-->
            <div class="feature-line">
                <span>
                    <i class="fa fa-check"></i>
                    <small>14-day trial</small>
                </span>
                <span>
                    <i class="fa fa-check"></i>
                    <small>No credit card required</small>
                </span>
                <span>
                    <i class="fa fa-check"></i>
                    <small>All in one plan</small>
                </span>
            </div>

            <!--App-->
            <div class="app-wrapper">
                <!--Icon features-->
                <div class="app-features">
                    <div class="app-feature">
                        <img src="assets/img/graphics/icons/megaphone-core.svg" data-base-url="assets/img/graphics/icons/megaphone" data-extension=".svg" alt="">
                        <h3>Segments</h3>
                    </div>
                    <div class="app-feature">
                        <img src="assets/img/graphics/icons/chrono-core.svg" data-base-url="assets/img/graphics/icons/chrono" data-extension=".svg" alt="">
                        <h3>Tracking</h3>
                    </div>
                    <div class="app-feature">
                        <img src="assets/img/graphics/icons/spaceship-core.svg" data-base-url="assets/img/graphics/icons/spaceship" data-extension=".svg" alt="">
                        <h3>Onboarding</h3>
                    </div>
                    <div class="app-feature">
                        <img src="assets/img/graphics/icons/shop-core.svg" data-base-url="assets/img/graphics/icons/shop" data-extension=".svg" alt="">
                        <h3>Sales</h3>
                    </div>
                </div>

                <!--Mockup wrapper-->
                <div class="mockup-wrapper">
                    <div class="square square-3"></div>
                    <img src="assets/img/graphics/apps/app-dashboard-sidebar-core.png" data-base-url="assets/img/graphics/apps/app-dashboard-sidebar" data-extension=".png" alt="">
                </div>
            </div>
        </div>
    </div>--}}
    


@include('layouts.footer')