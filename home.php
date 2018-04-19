  <?php
 session_start();
  $thread = $tag = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["thread"])) {
      $threadErr = "Name is required";
    } else {
      $_SESSION["thread"] = test_input($_POST["thread"]);
    }

    if (empty($_POST["tag"])) {
      $tagErr = "tag is required";
    } else {
      $_SESSION["tag"] = test_input($_POST["tag"]);
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
        <div class="col s7 offset-s3">
          <div class="row">
            <div class="block col s5"><h5 class="left-align">Recent Badge</h5><br><br><br><br><br></div>
            <div class="block col s5 offset-s1"><h5 class="left-align">Achieved Badges</h5><br><br><br><br><br></div>
          </div>
          <div class="row">
            <div class="block col s5"><h5 class="left-align">Featured</h5><br><br><br><br><br></div>
            <div class="block col s5 offset-s1"><h5 class="left-align">Do you know the answer?</h5><br><br><br><br><br></div>
          </div>
        </div>
      </div>
    </body>
  </html>
        
