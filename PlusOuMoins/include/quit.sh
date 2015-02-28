#!/bin/bash
## quit.sh for plusoumoins in /home/guiber_t/Shell/plusoumoins/paolin_t
## 
## Made by GUIBERT Timothe
## Login   <guiber_t@etna-alternance.net>
## 
## Started on  Wed Nov  5 10:19:30 2014 GUIBERT Timothe
## Last update Wed Nov  5 11:31:01 2014 GUIBERT Timothe
##

noyoudont()
{
    echo "$name used the command quit ! but it's 9 to quit !!! $date" > score
    echo -e "\n\nYou know, you can't quit this program like this," 
    echo "there was an option for that !"
    echo "If you could do it with quit we would have sait it."
    echo "Well, it's true that there are some secrets to this program (42/1337)"
    echo "But they are easter eggs !"
    echo "Since you are here we will keep you here, hahahaha!!!"
    echo "And worst, it will be written ! (in fact, it's done since long ago !)"
    echo -e "Enjoy your stay !\n\nn"
    longstring
    message
    exit 0
}

longstring()
{
    string="Once upon a time($DATE), someone named $name used a strange command 
it was quit. He thought that would quit the program... But he misread the menu 
and fell on a easter egg... A lot of time have passed since the 
beginning... It's very long but maybe $name will find a solution, if 
he is still here. Like typing Ctrl+C or waiting a little more. Maybe something 
will appear at the end. But it already has been $SECONDS seconds..."

    echo -e "\e[0;36m"
    for (( i=0; i<${#string}; i++ )); do
        echo -ne "${string:$i:1}"
        sleep 0.11
    done
    echo -e "\e[0;0m"
}

message()
{
echo ".___________.  __    __   _______      _______ .__   __.  _______   ";
echo "|           | |  |  |  | |   ____|    |   ____||  \ |  | |       \  ";
echo ".---|  |----. |  |__|  | |  |__       |  |__   |   \|  | |  .--.  | ";
echo "    |  |      |   __   | |   __|      |   __|  |  . \. | |  |  |  | ";
echo "    |  |      |  |  |  | |  |____     |  |____ |  |\   | |  '--'  | ";
echo "    |__|      |__|  |__| |_______|    |_______||__| \__| |_______/  ";
echo "                                                                   ";
}