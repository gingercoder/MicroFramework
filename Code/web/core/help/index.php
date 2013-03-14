<?php

/*
 * System Help Document
 */
?>
<div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="hero-unit">
                <h1>Help System</h1>
                <h2>MicroFramework</h2>
            </div>
            </div>
        </div>
    
    <div class="row-fluid">
        <div class="span4">
            <h2>Topics</h2>
            <ul>
                <li><a href="#1">1. About</a></li>
                <li><a href="#2">2. Modules</a></li>
                <li><a href="#3">3. Developing</a>
            </ul>
        </div>
        <div class="span8">
            <a name="1"></a>
            <h1>1. About</h1>
            <h2>What</h2>
            <p>
               MicroFramework is a small PHP/Twitter Bootstrap/DB framework allowing quick development of applications without massive system overhead.
            </p>
            <h2>Why</h2>
            <p>
                I needed a quick development platform for prototyping applications that were of the same ilk. The simplest way seemed to be to generate a 
                small framework that coule be replicated between projects with little overhead in terms of filesystem and code redevelopment.
            </p>
            <p>
                Most applications have the same core functionality so it seemed to be the best plan to have my own framework that could be extended and 
                upgraded as necessary.
            </p>
            <h2>Who</h2>
            <p>
                Hi, I'm Rick, a developer from the North East of England and I make web applications, support networks and build stuff. 
                I'm in no way an expert, but I have experience which I'm putting to use wherever I can.
            </p>
            <a name="2"></a>
            <h1>Modules</h1>
            <p>
                The system is pre-loaded with authentication, graceful error messages, automatic module loading, skeleton help system, skeleton demo application, php/twitter bootstrap page rendering. 
            </p>
            <h2>Database</h2>
            <p>
                The database comprises a users table, framework_settings table and logs table. Pre-loaded settings for the framework are available to edit.
            </p>
            <h2>Users</h2>
            <p>
                The core system has a password seed which is stored in the framework_settings table. If you're creating users for the system you'll have to append the seed 
                to your password and then MD5 the resulting string.
            </p>
            
            <a name="3"></a>
            <h1>Developing</h1>
            <h2>Hello World!</h2>
            <p>
                The system is pre-loaded with a Hello World! module which provides the style to develop applications. Simply place all of your processing logic 
                in the /src folder and all of your display logic in the /web folder.
            </p>
            <h2>Points to note</h2>
            <p>
                The system expects to be the only application on your web server (the core .htaccess file does a modrewrite rule to sort out the URL pathing).
            </p>
            <p>
                The system is still a work in progress. Better MySQLi / NoSQL / Postgress routines will be made available as soon as I can, as will the JSON output rendering 
                instead of simple PHP/HTML rendering.
            </p>
        </div>
    </div>
</div>
