#!/bin/bash
## bonus.sh for plusoumoins in /home/guiber_t/Shell/plusoumoins/paolin_t/include
## 
## Made by GUIBERT Timothe
## Login   <guiber_t@etna-alternance.net>
## 
## Started on  Wed Nov  5 09:48:45 2014 GUIBERT Timothe
## Last update Wed Nov  5 17:57:09 2014 PAOLINI Tom
##

user()
{
    echo -n "Enter player name : "
    while [ "$Player" = "" ]
    do
	read Player
	name=$Player
    done
echo "Thanks, now let's play a game !"
}

credits()
{
    script
    echo -e "\e[0;31m\n\n\nDone by Paolini Tom"
    echo "Mail : paolin_t@etna-alternance.net"
    echo "And by Guibert Timothe"
    echo "Mail : guiber_t@etna-alternance.net"
    echo -e "Thanks you for playing\e[0;0m\n\n\n"
    begin
}

rules()
{
    echo -e "\e[0;31m\n\n\nYou need to find a number, between some values."
    echo "You type a number and the program will say if the number you search
is greater or lesser than your input,"
    echo "This is easy right ?"
    echo "If you lose you can retry, so it ain't a big deal !"
    echo -e "Also, don't forget to check your score !\e[0;0m\n\n"
    begin
}

score()
{
    echo -e "\e[0;31m\n\n\n"
    while read line
    do
        echo "$line"
    done < score
    echo -e "\e[0;0m\n\n\n"
    begin
}

cowsayfunction()
{
    clear
    sl
    cowsay thanks $name you saved me from this train !
    echo -n "> "
    read this
    clear
    cowsay Hey, it\'s a little bit off topic but do you know this game ?
    echo -n "> "
    read this
    if [ "$this" == "no" ]
    then
        clear
        cowsay Here are the rules !
        rules
    elif [ "$this" == "yes" ]
    then
        clear
        cowsay Good, so you can play it !
        begin
    else
	clear
	cowsay Can\'t you answer with yes or no ? Whatever... I\'m a cow anyway...
    fi
}