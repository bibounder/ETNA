#!/bin/bash
## pres.sh for  in /home/tom/Projets/PlusOuMoins_local
## 
## Made by PAOLINI Tom
## Login   <paolin_t@etna-alternance.net>
## 
## Started on  Mon Nov  3 17:54:05 2014 PAOLINI Tom
## Last update Wed Nov  5 09:58:50 2014 GUIBERT Timothe
##
welcome()
{
    string="
                             -4--8--15--~Welcome to MagicNumber 2.0~--16--23--42-



888b     d888                   d8b               888b    888                        888                       
8888b   d8888                   Y8P               8888b   888                        888                       
88888b.d88888                                     88888b  888                        888                       
888Y88488P888  8888b.   .d88b.  888  .d8888b      888Y88b 888 888  888 88888b.d88b.  88888b.   .d88b.  888d888 
888 Y888P 888      88b d15P 88b 888 d88P          888 Y88b888 888  888 888  888  88b 888  88b d8P  Y8b 888P    
888  Y8P  888 .d888888 888  888 888 888           888  Y81688 888  888 888  888  888 888  888 42888888 888     
888       888 888  888 Y88b 888 888 Y88b.         888   Y8888 Y88b 888 888  888  888 888 d88P Y8b.     888     
888       888  Y888888  Y88888  888  Y8888P       888    Y888   Y88888 888  238  888 88888P     Y8888  888     
                            888                                                                                
                       Y8b d88P                                                                                
                         Y88P                                                                                 

"

    clear
    echo -e "\e[0;36m"
    for (( i=0; i<${#string}; i++ )); do
	echo -ne "${string:$i:1}"
	sleep 0.000005
    done
    echo -e "\e[0;0m"
}