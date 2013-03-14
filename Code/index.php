<?php

/* 
 *  __  __ _                ______                                           _    
 * |  \/  (_)              |  ____|                                         | |   
 * | \  / |_  ___ _ __ ___ | |__ _ __ __ _ _ __ ___   _____      _____  _ __| | __
 * | |\/| | |/ __| '__/ _ \|  __| '__/ _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
 * | |  | | | (__| | | (_) | |  | | | (_| | | | | | |  __/\ V  V / (_) | |  |   < 
 * |_|  |_|_|\___|_|  \___/|_|  |_|  \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\         
 *                                      PHP, MySQL, jQuery, Twitter Bootstrap
 * Version:     0.0.1
 * Author:      Rick Trotter 
 * Description:
 *              MicroFramework is a lightweight development framework for quick development of PHP applications.
 *              This lightweight system is designed to provide functionality without heavy overheads and allow the 
 *              team to develop the application in an exceptionaly tight timescale.
 *              It includes a twitter bootstrap to launch into software development with a common display method.
 * 
 * License:     GNU GPLv3
 * Published:   March 2013
 */
        
        // Error Reporting Mode
        error_reporting(0);
	   ini_set('display_errors', 'On');

        // Create the Session and control page request information
	   session_start();
	   header("Cache-Control: ");
	   header("pragma: ");
        
        
        
        // Launch the database
        require_once('src/core/database/settings.php');
        require_once('src/core/database/mysql.php');

        // Load the application settings from the database
        $myApp = $ObjFramework->getAppSettings();
        
        
        
        
        /* 
         * Launch the page modules
         * Depends on the setting in the DB for output type
         * Allows changing to JSON output only as required
         */
        
        if($myApp['outputType'] == 'php'){
            // PHP/HTML Output type for framework
            require_once('web/core/head.php');
            
            require_once('src/core/autoload/autoloadModule.php');

            require_once('web/core/foot.php');
        }
        elseif($myApp['outputType'] == 'json'){
            // JSON Output type for framework
          
            require_once('src/core/api/autoloadModule.php');
            
        }
        else{
            die('Output type not specified, exiting application');
        }
?>