<!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $page_title ?></title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frameworks/materialize/css/materialize.min.css"  media="screen,projection"/>
       <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/customs/style.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script type="text/javascript" src="<?php echo base_url(); ?>assets/frameworks/angularJs/angular.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>assets/angularApp/<?php echo $anguler_ctrl; ?>.js"></script>
    </head>
    <body ng-app="ispManager" ng-controller="<?php echo $page_name; ?>">
    <header>
      <div class="navbar-fixed">
       <nav class="navbar ">
          <div class="nav-wrapper">
            <span class="brand-logo hide-on-med-and-down"><?php echo $page_title ?></span>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right ">
             
              <li><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a>
                <div id="dropdown1" class="dropdown-content notifications" tabindex="0">
                  <div class="notifications-title" tabindex="0">notifications</div>
                    <div class="card" tabindex="0">
                      <div class="card-content"><span class="card-title">Joe Smith made a purchase</span>
                        <p>Content</p>
                      </div>
                      <div class="card-action"><a href="#!">view</a><a href="#!">dismiss</a></div>
                    </div>
                    <div class="card" tabindex="0">
                      <div class="card-content"><span class="card-title">Daily Traffic Update</span>
                        <p>Content</p>
                      </div>
                      <div class="card-action"><a href="#!">view</a><a href="#!">dismiss</a></div>
                    </div>
                    <div class="card" tabindex="0">
                      <div class="card-content"><span class="card-title">New User Joined</span>
                        <p>Content</p>
                      </div>
                      <div class="card-action"><a href="#!">view</a><a href="#!">dismiss</a></div>
                   </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

   