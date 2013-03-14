MicroFramework
==============

A PHP/Twitter Bootstrap/DB micro framework for quick application prototyping. 
Created to quickly prototype ideas and develop a platform for launching projects with minimal fuss.
Still very much a work in progress.


About
=====

MicroFramework is a lightweight, small PHP framework to allow quick application development. 

It creates a primary set of functionality ready to allow development of PHP-based web applications.
Included in the framework are authentication, graceful error handling, auto module load mechanism, twitter bootstrap.


File System
===========

The core file system is made up from controller and display layers. All of the controller logic and system interfacing is held in the src folder.

All of the web frontend code is held in the web folder.

Front-end development should be limited to the web folder only – no display logic should be placed into the src folder areas.

Calls to navigation / layout etc. should be handled in the display layer.


Rendering Engine
================

The rendering engine is currently set to php/html – I’m working on a method to provide information in a JSON output based on a call.

Calling Functions
=================

To call functions you will call to undertake operations require URL requests to be in the format:

/index.php/module/functiongroup/function/var1/var2

for example:
/index.php/helloworld/demo/index
which will launch the primary help file page.

If undertaking post entities to the system in forms, include the following hidden fields in the post method:
<input type="hidden" name="x" value="appModule" />
<input type="hidden" name="y" value="functiongroup” />
<input type="hidden" name="z" value="function" />

Where functiongroup and function are the folder and file you want to call from the src folder.
