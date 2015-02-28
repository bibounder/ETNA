#!/bin/bash
## plusoumoins.sh for  in /home/tom/Projets/PlusOuMoins
##
## Made by PAOLINI Tom
## Login   <paolin_t@etna-alternance.net>
##
## Started on  Mon Nov  3 10:01:00 2014 PAOLINI Tom
## Last update Wed Nov  5 17:32:04 2014 PAOLINI Tom
##

DATE=$(date "+%d-%B-%Y")
name=""
search_number=100
Flag=2
max=1
life=1
option=0

. include/pres.sh
. include/bonus.sh
. include/script.sh
. include/quit.sh

select_level()
{
    echo -e "\e[0;33m"
    echo "******4**********8***********15*********16********23******************42******"
    echo "*   Level 0  :  Number is between 1 and 100  and you have 20 attempts !      *"
    echo "*   Level 1  :  Number is between 1 and 100  and you have 10 attempts !      *"
    echo "*   Level 2  :  Number is between 1 and 1000 and you have 10 attempts !      *"
    echo "*   Level 3  :  Number is between 1 and 100  and you have 5  attempts !      *"
    echo "*   Level 4  :  Number is between 1 and 1000 and you have 5  attempts !      *"
    echo "*   Level 5  :  Number is between 1 and 100  and you have 2  attempts !      *"
    echo "*   Type 6 for score(s).                                                     *"
    echo "*   Type 7 for rules (Are you lost ?).                                       *"
    echo "*   Type 8 for credits (Who did this awesome program ?).                     *"
    echo -e "*   Type 9 to quit (No, don't leave us !!).                                  *
******************************************************************************\e[0;32m\n\n"
    echo -n "You can (in fact, you must) select your level or option : "
    read option
}

verif()
{
    if [ ! "$(echo $search_number | grep "^[[:digit:]]*$")" ]
    then
	echo "Error : Not a number, replaced with $max."
	search_number=$max
    fi
    if [ $search_number -lt 0 -o $search_number -gt $max ]
    then
        echo "You must write a number between 0 and $max ! Replaced with $max."
        search_number=$max
    fi
}

win()
{
    ((SECONDS-=$Sectemp))
    if [ $Flag -eq 0 ]
    then
        echo -e "$name succeeded in $Cpt attempt(s) in the level $option the $DATE and took $SECONDS seconds\n" >> score
	echo -en "You can still play again with 'r' or press another key to quit\n> "
	read this
        if [ "$this" == "r" ]
        then
            begin
        else
	    echo "See you soon !"
            exit 0
        fi
    else
        echo -e "\n$name failed in difficulty $option the $DATE" >> score
        echo -en "Press 'r' to retry\n> "
	read this
	if [ "$this" == "r" ]
	then
	    begin
	else
	    echo "See you soon !"
	    exit 0
	fi
    fi
    echo -e "\e[0;0m"
}

game()
{
    clear
    rand=$[ $RANDOM % $max ]
    Cpt=0
    echo -e "\n --- The number is between 0 and $max ---"
    Sectemp=$SECONDS
    while [ "$search_number" -ne "$rand" -a "$Cpt" -lt "$life" ]
    do
        ((Cpt++))
	left=$[ $life - $Cpt ]
         echo -ne "\nChoose a number: "
        read search_number
        verif
        tmp_nombre=$search_number
        tmp_nombre=$[search_number+0]
        if [ $search_number=$tmp_nombre ]
        then
            if [ $search_number -ne $rand ]
            then
                echo -ne "\e[0;31mTry again \e[0;32m"
                if [ $search_number -gt $rand ]
                then
                    echo "with a smaller number."
                else
                    echo "with a bigger number."
                fi
		if [ $left -ne 0 ]
		then
		    echo "You can still try $left time(s) !"
		else
		    echo -e "Y0U FAILED ! The answer was $rand.\n"
		fi
            elif [ $search_number -eq $rand ]
            then
                echo -e "Well done ! The number was $rand.\n"
                Flag=0
            fi
        fi
    done
    win
}

begin()
{
    select_level
    case $option in
	0)
	    max=100
	    life=20
	    game
	    ;;
	1)
	    max=100
	    life=10
	    game
	    ;;
	2)
            max=1000
            life=10
            game
	    ;;
	3)
            max=100
            life=5
            game
            ;;
	4)
            max=1000
            life=5
            game
            ;;
	5)
            max=100
            life=2
            game
	    ;;
	6)
            score
            ;;
	7)
            rules
            ;;
	8)
            credits
            ;;
	9)
            exit 0
            ;;
	42)
	    max=1
	    life=666
	    option=5
	    game
	    ;;
	1337)
	    cowsayfunction
	    ;;
	quit)
	    noyoudont
	    ;;
	*)
	    echo "Option does not exist !"
	    begin
	    ;;
    esac
}
welcome
touch score
user
clear
begin