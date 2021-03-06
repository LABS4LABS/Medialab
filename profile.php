  <?php

  $thread = $tag = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["thread"])) {
      $threadErr = "Name is required";
    } else {
      $thread = test_input($_POST["thread"]);
    }

    if (empty($_POST["tag"])) {
      $tagErr = "tag is required";
    } else {
      $tag = test_input($_POST["tag"]);
    }

    $temparr = array($thread => $tag);
    $store_data = array_merge($store_data, $temparr);
  }



  foreach ($thread as $key => $tag) {
  echo $key;
  echo $tag;
  }

  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/main.css"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <link href="css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#!">Settings</a></li>
        <li class="divider"></li>
        <li><a href="#!">Logout</a></li>
      </ul>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a id="" href="index.php"><i class="material-icons left homebutton">home</i></a>

            <a href="#" class="brand-logo">Dashboard</a>
            <ul class="right hide-on-med-and-down">
           
              <!-- Dropdown Trigger -->
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons">person</i></a></li>
            </ul>
          </div>
        </nav>
      </div>
      <!--JavaScript at end of body for optimized loading-->
      <ul id="slide-out" class="sidenav">
        <div id="sidebar-row" class="row">
          <div id="sidebar1" class="col s8 offset-s2">
            <div class="row">
            <form class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row">
     
      
      <div class="row">
        <div class="input-field col s12">
          <input id="thread" type="text" class="validate" value="<?php echo $thread;?>">
          <label for="thread">Thread</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="tag" type="text" class="validate" value="<?php echo $tag;?>">
          <label for="tag">Tag</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Create
    <i class="material-icons right">send</i>
  </button>
        
    </form>
  </div>
        
          </div>
          
          
          
    
          
          
        </div>
      </ul>
  <a href="#" data-target="slide-out" class="add-btn sidenav-trigger btn-large"><i class="add-icon material-icons">add</i></a>
  <br>
  <ul id="slide-out2" class="sidenav">
    <div class="row">
    <div class="col s9 offset-s3">
      <ul class="chats collection with-header">
       <li class="collection-header"><h4>Chats</h4></li> 
          <a class="add-chat btn-floating btn-small red"><i class="material-icons">add</i></a>
       <li class="collection-header"><h5>Threads</h5></li>    
          
          <li class="collection-item avatar">
        <i class="material-icons circle">people</i>
        <span class="title">Problems with printing</span>
        <p>3D Printer</p>
        
      </li>


      <li class="collection-header"><h5>Private Chats</h5></li>    

      <li class="collection-item avatar">
        <i class="material-icons circle green">person</i>
        <span class="title">Jorge Sharp</span>
                <p>Now online</p>

                
      </li>
      <li class="collection-item avatar">
        <i class="material-icons circle red">person</i>
        <span class="title">Noah Weaver</span>
        <p>Last seen: 5 minutes ago</p>
        
      </li>
    </ul>
    </div>
    </div>
  </ul>
  <a href="#" data-target="slide-out2" class="add-btn sidenav-trigger btn-large"><i class="add-icon material-icons">chat</i></a>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <div class="row">
        
          
         
        <!-- START CONTENT -->
      <section id="content">        

        <!--start container-->
        <div class="container">

          <div id="profile-page" class="section">
            <!-- profile-page-header -->
            <div id="profile-page-header" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/user-profile-bg.jpg" alt="user background">                    
                </div>
                <figure class="card-profile-image">
                    <img src="images/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator">
                </figure>
                <div class="card-content">
                  <div class="row">                    
                    <div class="col s3 offset-s2">                        
                        <h4 class="card-title grey-text text-darken-4">Roger Waters</h4>
                        <p class="medium-small grey-text">3D Printing Expert</p>                        
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">54</h4>
                        <p class="medium-small grey-text">Achieved badges</p>                        
                    </div>
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">354</h4>
                        <p class="medium-small grey-text">Useful Answers</p>                        
                    </div>                    
                    <div class="col s2 center-align">
                        <h4 class="card-title grey-text text-darken-4">233</h4>
                        <p class="medium-small grey-text">Questions</p>                        
                    </div>                    
                    <div class="col s1 right-align">
                      <a class="btn-floating activator waves-effect waves-light darken-2 right">
                          <i class="mdi-action-perm-identity"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-reveal">
                    <p>
                      <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
                      <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
                    </p>

                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    
                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                    <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                    <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                </div>
            </div>
            <!--/ profile-page-header -->

            <!-- profile-page-content -->
            <div id="profile-page-content" class="row">
              <!-- profile-page-sidebar-->
              <div id="profile-page-sidebar" class="col s12 m4">
                <!-- Profile About  -->
                <div class="card light-blue">
                  <div class="card-content white-text">
                    <span class="card-title">About Me!</span>
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>                  
                </div>
                <!-- Profile About  -->

                <!-- Profile About Details  -->
                <ul id="profile-page-about-details" class="collection z-depth-1">
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Last Thread</div>
                      <div class="col s7 grey-text text-darken-4 right-align">3D Printing (Beginner)</div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                      <div class="col s7 grey-text text-darken-4 right-align">3D Printing, Laser cutter</div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                      <div class="col s7 grey-text text-darken-4 right-align">Rotterdam, NL</div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row">
                      <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                      <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
                    </div>
                  </li>
                </ul>
                <!--/ Profile About Details  -->

                <!-- Profile About  -->
                <div class="card amber darken-2">
                  <div class="card-content white-text center-align">
                    <p class="card-title"><i class="mdi-social-group-add"></i> 3685</p>
                    <p>Followers</p>
                  </div>                  
                </div>
                <!-- Profile About  -->

                <!-- Profile feed  -->
                <ul id="profile-page-about-feed" class="collection z-depth-1">
                  <li class="collection-item avatar">
                    <img src="images/avatar.jpg" alt="" class="circle">
                    <span class="title">3D Printing Beginner</span>
                    <p>Task assigned to new changes.
                      <br> <span class="ultra-small">Second Line</span>
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
                  </li>
                  <li class="collection-item avatar">
                    <i class="mdi-file-folder circle"></i>
                    <span class="title">3D printing Intermediate</span>
                    <p>First Line of Project Work 
                      <br> <span class="ultra-small">Second Line</span>
                    </p>
                    <a href="#!" class="secondary-content"><i class="mdi-social-domain"></i></a>
                  </li>
                  
                </ul>
                <!-- Profile feed  -->

                
                <!-- flight-card -->

                

              </div>
              <!-- profile-page-sidebar-->

              <!-- profile-page-wall -->
              <div id="profile-page-wall" class="col s12 m8">
                <div id="profile-page-wall-post" class="card">
                        <div class="card-profile-title">
                          <div class="row">
                            <div class="col s1">
                              <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-post-uer-image">                        
                            </div>
                            <div class="col s10">
                              <p class="grey-text text-darken-4 margin">Roger Waters</p>
                              <span class="grey-text text-darken-1 ultra-small">Shared publicly  -  26 Jun 2015</span>
                            </div>
                            <div class="col s1 right-align">
                              <i class="mdi-navigation-expand-more"></i>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12">
                              <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-image profile-small">
                          <img src="images/gallary/1.jpg" alt="sample" class="responsive-img profile-post-image">                        
                          <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action row">
                          <div class="col s4 card-action-share">
                            <a href="#">Like</a>                          
                            <a href="#">Share</a>
                          </div>
                          
                          <div class="input-field col s8 margin">
                            <input id="profile-comments" type="text" class="validate">
                            <label for="profile-comments" class="">Comments</label>
                          </div>                        
                        </div>                        
                      </div>

                

              </div>
              <!--/ profile-page-wall -->

            </div>
          </div>
        </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
      </div>
    </body>
  </html>
        
