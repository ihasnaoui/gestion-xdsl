
#!/usr/bin/expect
## Attention de bien modifier le shebang et de mettre expect
## Définition des variables
## Récupération de l'adresse IP et mot de passe dans des variables
#set Switch [lindex $argv 0]
#set Passwordsw [lindex $argv 1]
#set DSLAM [lindex $argv 2]
#set loginDslam [lindex $argv 3]
#set PasswordDslam [lindex $argv 4]
#set Passworden [lindex $argv 5]

#set port [lindex $argv 0]

## Connexion au switch
spawn telnet 190.99.192.50
## pause entre chaque saisie, obligatoire pour le bon fonctionnement du script
expect {
"Password: " {send "CISCON3ATRsx\n"}
}

## Command envoyé au routeur dont on veut récupéré le contenu
send "10.64.66.3\n"


expect {
"login: " {send "isadmin\n"}
}

expect {
"password: " {send "sagem_sst\n"}
}

send "\r"

#~ send "logout\r"
#~ sleep 3		 
#~ send "exit\r"

interact
exit

