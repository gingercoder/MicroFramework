<?php

/*
 * Mule Navigation System
 * Add navigable items to this file for the top menu system
 */
?>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/index.php/core/system/homepage"><?php echo $myApp['appTitle']; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged in as <?php echo $_SESSION['username'];?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/index.php/core/system/password">Change Password</a></li>
                    <li><a href="/index.php/core/help/index/">Help</a></li>
                    <li><a href="/index.php/core/security/logout">Logout</a></li>
                </ul>
                </li>
            </ul>
            <ul class="nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lead <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/index.php/helloworld/demo/index/">Demo</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
</div>
