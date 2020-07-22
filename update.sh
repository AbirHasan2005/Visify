#!/bin/bash
# Update Script for Visify
# Script created by @AbirHasan2005


dependencies() {

command -v git > /dev/null 2>&1 || { echo >&2 "Package GIT is not installed ... Unable to update ..."; exit 1; }

}

script() {

clear
printf "\n \e[1;92mUpdating \e[1;94mVisify\e[1;92m ...\n\n"
sleep 1.5
cd ..
rm -rf Visify
git clone https://github.com/AbirHasan2005/Visify
cd Visify
printf "\n\e[1;92mRestarting ...\n\e[0m"
php visify.php
cd ..
pwd

}

dependencies
script

