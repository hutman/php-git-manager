PHP Git Control Panel
=====================

Uses the git php class from kbjr https://github.com/kbjr/Git.php
A very basic control panel for managing your server git branching 

Copy config.sample.php to config.php and edit to suite

The deploy script setting assumes a shell script with the branch
name supplied as an argument. The at command is used to spawn a new 
process for the deploy script in case it takes a while. 

