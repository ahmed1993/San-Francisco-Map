﻿READ ME
1. Place the zip file in Apache24 > htdocs
2. Run the bat file. To run it, open your db2 command line as adminstrator
and navigate to your directory with your csv files and bat file, then run 
the command "db2cmd", a new prompt will appear, then enter your bat file
name "dbSetup.bat" and press enter.
3. Edit the config.php. Change the variables as follows:
	$dbname = "cs174";
	$username = "db2admin"; OR whatever username you chose when
	setting up your db2
	$password = "enter your password here";
	$computerName = "Whatever your SQL authorization ID is";
4. My PHP version is 5.6.14
----------------------------------------------------------------------
░░█▀░░░░░░░░░░░▀▀███████░░░░ 
░░█▌░░░░░░░░░░░░░░░▀██████░░░ 
░█▌░░░░░░░░░░░░░░░░███████▌░░ 
░█░░░░░░░░░░░░░░░░░████████░░ 
▐▌░░░░░░░░░░░░░░░░░▀██████▌░░ 
░▌▄███▌░░░░▀████▄░░░░▀████▌░░ 
▐▀▀▄█▄░▌░░░▄██▄▄▄▀░░░░████▄▄░ 
▐░▀░░═▐░░░░░░══░░▀░░░░▐▀░▄▀▌▌ 
▐░░░░░▌░░░░░░░░░░░░░░░▀░▀░░▌▌ 
▐░░░▄▀░░░▀░▌░░░░░░░░░░░░▌█░▌▌ 
░▌░░▀▀▄▄▀▀▄▌▌░░░░░░░░░░▐░▀▐▐░ 
░▌░░▌░▄▄▄▄░░░▌░░░░░░░░▐░░▀▐░░ 
░█░▐▄██████▄░▐░░░░░░░░█▀▄▄▀░░ 
░▐░▌▌░░░░░░▀▀▄▐░░░░░░█▌░░░░░░ 
░░█░░▄▀▀▀▀▄░▄═╝▄░░░▄▀░▌░░░░░░ 
░░░▌▐░░░░░░▌░▀▀░░▄▀░░▐░░░░░░░ 
░░░▀▄░░░░░░░░░▄▀▀░░░░█░░░░░░░ 
░░░▄█▄▄▄▄▄▄▄▀▀░░░░░░░▌▌░░░░░░ 
░░▄▀▌▀▌░░░░░░░░░░░░░▄▀▀▄░░░░░ 
▄▀░░▌░▀▄░░░░░░░░░░▄▀░░▌░▀▄░░░ 
░░░░▌█▄▄▀▄░░░░░░▄▀░░░░▌░░░▌▄▄ 
░░░▄▐██████▄▄░▄▀░░▄▄▄▄▌░░░░▄░ 
░░▄▌████████▄▄▄███████▌░░░░░▄ 
░▄▀░██████████████████▌▀▄░░░░ 
▀░░░█████▀▀░░░▀███████░░░▀▄░░ 
░░░░▐█▀░░░▐░░░░░▀████▌░░░░▀▄░ 
░░░░░░▌░░░▐░░░░▐░░▀▀█░░░░░░░▀ 
░░░░░░▐░░░░▌░░░▐░░░░░▌░░░░░░░ 
░╔╗║░╔═╗░═╦═░░░░░╔╗░░╔═╗░╦═╗░ 
░║║║░║░║░░║░░░░░░╠╩╗░╠═╣░║░║░ 
░║╚╝░╚═╝░░║░░░░░░╚═╝░║░║░╩═╝░