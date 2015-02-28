#!/bin/bash
## pres.sh for  in /home/tom/Projets/PlusOuMoins_local
## 
## Made by PAOLINI Tom
## Login   <paolin_t@etna-alternance.net>
## 
## Started on  Mon Nov  3 17:54:05 2014 PAOLINI Tom
## Last update Wed Nov  5 10:00:25 2014 GUIBERT Timothe
##

script()
{
    string="4, 8, 15, 16, 23 and 42, this sequence displays itself without
reason each time this game is launched. Is there some explanation ?
As the programers of this game says, this sequence is similar to Valenzetti's
equation, made in 1962 by Enzo Valenzetti, a lone mathematician of Princetown
University. It's the result of the endeavor made after the Cuban missile
crisis by America and Russia in order to find a solution for the hostilies
and the imminent danger of a disaster caused by the Cold War.
The equation was secretly used by ONU's security council and was used
to predict humanity's end."

    echo -e "\e[0;36m"
    for (( i=0; i<${#string}; i++ )); do
	echo -ne "${string:$i:1}"
	sleep 0.032
    done
    echo -e "\e[0;0m"
}