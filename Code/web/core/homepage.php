<?php

/*
 * Default Homepage
 */

require_once('web/helloworld/core/navigation.php');
?>

<div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="hero-unit">
                <h1><?php echo $myApp['appTitle']; ?></h1>
                <h2>Hello World!</h2>
            </div>
            </div>
        </div>
    <div class="row-fluid">
        <div class="span12">
            <h2>Homepage</h2>  
            <p>
                This is the default homepage once authenticated.
            </p>
        </div>
    </div>
</div>

