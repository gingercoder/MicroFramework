<?php

/*
 * Default Page
 */
?>
<div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="hero-unit blocksBgnd">
                <h1>Log In</h1>
                <h2><?php echo $myApp['appTitle']; ?></h2>
                <?php
                if($errors !=""){
                    echo "<strong>".$errors."</strong>";
                }
                ?>
            </div>
            </div>
        </div>
</div>
<div class="row-fluid">
    <div class="span3"></div>
    <div class="span6">
      <form class="form-signin" action="/index.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Username" name="uname">
        <input type="password" class="input-block-level" placeholder="Password" name="pword">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <input type="hidden" name="x" value="core" />
        <input type="hidden" name="y" value="security" />
        <input type="hidden" name="z" value="login" />
      </form>
    </div>
    <div class="span3"></div>
</div>
