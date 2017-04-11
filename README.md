# SQLSprinkler
A Basic Raspberry Pi Sprinkler Controller using RPIGPIO, PHP5, MySQL, and Raspian
This is a module for my PiMation automation system. You need to install
the mysql modules for php, and python inorder for this to work.  You
also need to create a MySQL Database called 'SQLSprinkler', with a table
called 'Systems', and three rows called "Name (string)", "GPIO (int)", and 
"Time (int)". Do note that these are case sensitive, and the content in the
parenthesis are what you have to set the type to. Please see 
https://github.com/UndefinedIndustries/PiMation for the PiMation system.
