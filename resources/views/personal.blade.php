<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Personal - Free Bulma template</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

  <!-- Bulma Version 0.7.2-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- <link href="https://unpkg.com/bulma-fluent@0.3.13/css/bulma.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="../css/personal.css">
  <script async type="text/javascript" src="../js/bulma.js"></script>
</head>

<body>
  <!-- Navigation bar -->
  <nav class="navbar is-fixed-top">
    <div class="navbar-brand">
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item" href="#about">
          <span class="icon">
            <i class="fa fa-coffee"></i>
          </span>
          <span>Blog</span>
        </a>
        <a class="navbar-item" href="#about">
          <span class="icon">
            <i class="fa fa-info"></i>
          </span>
          <span>About</span>
        </a>
        <a class="navbar-item" href="#services">
          <span class="icon">
            <i class="fa fa-bars"></i>
          </span>
          <span>Services</span>
        </a>
        <a class="navbar-item" href="#resume">
          <span class="icon">
            <i class="fa fa-file-o"></i>
          </span>
          <span>Resume</span>
        </a>
        <a class="navbar-item" href="#portfolio">
          <span class="icon">
            <i class="fa fa-briefcase"></i>
          </span>
          <span>Portfolio</span>
        </a>
        <a class="navbar-item" href="#contact">
          <span class="icon">
            <i class="fa fa-envelope"></i>
          </span>
          <span>Contact</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="hero is-fullheight is-fullheight-with-navbar">
    <div class="hero-body">
      <div class="container">Hello! I am
        <h1 class="title is-1" style="color: #e81c4f">
          Ashraf Kamarudin
        </h1>
        <h2 class="subtitle is-3">
          Full Stack Web Developer
        </h2>
          <span class="icon is-large has-text-link">
            <i class="fa fa-facebook fa-2x"></i>
          </span>
          <span class="icon is-large" style="color: #e81c4f">
            <i class="fa fa-instagram fa-2x"></i>
          </span>
          <span class="icon is-large has-text-info">
            <i class="fa fa-twitter fa-2x"></i>
          </span>
          <span class="icon is-large has-text-link">
            <i class="fa fa-linkedin fa-2x"></i>
          </span>
          <span class="icon is-large">
            <i class="fa fa-github fa-2x"></i>
          </span>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="section" id="about">
    <!-- Title -->
    <div class="section-heading">
      <h3 class="title is-2">About Me</h3>
      <h4 class="subtitle is-5">Jack of all trades, master of "some"</h4>
      <div class="container">
        <p>Web developer of well-rounded experience with a degree in the
          field of
          <strong>Computer Science</strong> and major in <strong>Software Engineering</strong>.I have extensive knowledge of modern Web techniques and love for <strong>Coffee</strong>.I am passionate in programming and have strong drive and motivation to learn new things. I am looking for an opportunity to apply my knowledge and upgrade, as well as being involved in an organization that believes in gaining a competitive edge and giving back to the community.</p>
      </div>
    </div>

    <div class="columns has-same-height is-gapless">

      <div class="column">
        <!-- Profile picture -->
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="https://source.unsplash.com/random/1280x960" alt="Placeholder image">
            </figure>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Profile -->
        <div class="card">
          <div class="card-content">
            <h3 class="title is-4">Profile</h3>

            <div class="content">
              <table class="table-profile">
                <tr>
                  <th colspan="1"></th>
                  <th colspan="2"></th>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>
                    Kampong Gong Pauh,<br>
                    Kuala Terengganu,<br>
                    Terengganu
                  </td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td>017-9348206</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>ashrafkamarudin1995@gmail.com</td>
                </tr>
              </table>
            </div>
            <br>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Skills -->
        <div class="card">
          <div class="card-content skills-content">
            <h3 class="title is-4">Skills</h3>
            <div class="content">

              <div class="tags custom-tags">
                <span class="tag is-light" style="background-color: orange">Laravel</span><span class="tag is-light">Lumen</span><span class="tag is-light">PHP</span><span class="tag is-light">JAVA</span><span class="tag is-light">JavaScript</span><span class="tag is-light">Node.js</span><span class="tag is-light">VueJS</span><span class="tag is-light">HTML5</span><span class="tag is-light">CSS3</span><span class="tag is-light">Bulma</span><span class="tag is-light">Bootstrap</span><span class="tag is-light">jQuery</span><span class="tag is-light">SASS/SCSS</span><span class="tag is-light">Git</span><span class="tag is-light">NginX</span><span class="tag is-light">Apache</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills tags -->
  <!-- <br>
        <div class="tags custom-tags">
          <span class="tag is-light">Node.js</span><span class="tag is-light">Express.js</span><span class="tag is-light">VueJS</span><span
            class="tag is-light">JavaScript</span><span class="tag is-light">HTML5</span><span class="tag is-light">Canvas</span><span
            class="tag is-light">CSS3</span><span class="tag is-light">Bulma</span><span class="tag is-light">Bootstrap</span><span
            class="tag is-light">jQuery</span><span class="tag is-light">Pug</span><span class="tag is-light">Stylus</span><span
            class="tag is-light">SASS/SCSS</span><span class="tag is-light">Webpack</span><span class="tag is-light">Git</span><span
            class="tag is-light">ASP.NET Web Forms</span><span class="tag is-light">MSSQL</span><span class="tag is-light">MongoDB</span><span
            class="tag is-light">Apache Cordova</span><span class="tag is-light">Chrome Extensions</span>
        </div>

  <!-- Services -->
  <section class="hero is-fullheight is-fullheight-with-navbar is-red" id="services">
    
    <div class="hero-head" style="top: 100px">
      
    </div>
    <div class="hero-body">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Services</h3>
        <h4 class="subtitle is-5">What can I do for you?</h4>
      </div>
      <div class="columns">
        <div class="column">
          <div class="box is-primary-bg">
            <div class="content">
              <h4 class="title is-5" style="color: white">Front End Web Development</h4>
              Develop Front End using latest standards with HTML5/CSS3 with added funtionality using JavaScript and
              Vue.js.
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box is-primary-bg">
            <div class="content">
              <h4 class="title is-5" style="color: white">Back End Web Development</h4>
              Develop Back End application/service using Laravel and MySQL database.
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <div class="box is-primary-bg">
            <div class="content">
              <h4 class="title is-5" style="color: white">API Development</h4>
              Develop RESTful APIs with Lumen.
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box is-primary-bg">
            <div class="content">
              <h4 class="title is-5" style="color: white">IT Consultation</h4>
              -
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="hero-foot">
      <div class="section-heading">
        <h4 class="subtitle is-5">Please contact me if you are interested.</h4>
      </div>
    </div>
  </section>

  <!-- Resume -->
  <section class="section" id="resume">
    <div class="section-heading">
      <h3 class="title is-2">Resume</h3>
      <h4 class="subtitle is-5">More about my past</h4>
      <a href="#" class="button is-primary is-medium">
        <span class="icon">
          <i class="fas fa-file-alt"></i>
        </span>
        <span>Download My Resume</span>
      </a>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Portfolio</h3>
        <h4 class="subtitle is-5">My latest works</h4>
      </div>
      <br>

      <div class="container portfolio-container">
        <div class="columns">
          <div class="column is-4">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>GUI for Login and CRUD api</span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://dummyimage.com/555x255/000/fff" alt="modal-cards template screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="templates/modal-cards.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/modal-cards.html" class="card-footer-item">Source
                  Code</a>
              </footer>
            </div>
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Simple Query Builder</span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://dummyimage.com/555x255/000/fff" alt="modal-cards template screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="templates/modal-cards.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/modal-cards.html" class="card-footer-item">Source
                  Code</a>
              </footer>
            </div>
          </div>
          <div class="column is-4">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Login and CRUD api</span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://dummyimage.com/555x255/000/fff" alt="modal-cards template screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="templates/modal-cards.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/modal-cards.html" class="card-footer-item">Source
                  Code</a>
              </footer>
            </div>
          </div>
          <div class="column is-4">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Simple MVC Framework</span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://dummyimage.com/555x255/000/fff" alt="modal-cards template screenshot">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="templates/modal-cards.html" class="card-footer-item">Preview</a>
                <a href="https://github.com/dansup/bulma-templates/blob/master/templates/modal-cards.html" class="card-footer-item">Source
                  Code</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievement Level -->
  <!-- <section class="section">
    <nav class="level">
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Tweets</p>
          <p class="title">3,456</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Following</p>
          <p class="title">123</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Followers</p>
          <p class="title">456K</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Likes</p>
          <p class="title">789</p>
        </div>
      </div>
    </nav>
  </section> -->


  <!-- Contact -->
  <section class="section" id="contact">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Contact</h3>
        <h4 class="subtitle is-5">Get in touch</h4>
      </div>
      <br>

      <div class="columns">
        <div class="column is-6 is-offset-3">
          <div class="box">
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left">
                <input class="input" type="email" placeholder="Email input" value="">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label class="label">Message</label>
              <div class="control">
                <textarea class="textarea" placeholder="Textarea"></textarea>
              </div>
            </div>

            <div class="field is-grouped has-text-centered">
              <div class="control">
                <button class="button is-primary is-large"><span class="icon">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span>Submit</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="section-heading">
      <p>
      </p>
    </div>
  </footer>
</body>

</html>
