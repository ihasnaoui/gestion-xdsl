#!/usr/bin/expect


set port [lindex $argv 0]
set timeout 4
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
send "show xdsl operational-data line $port\n"
send "\r"

send "exit \r"
#~ sleep 10
send "logout\r"

#~ send "reload \n"
#~ sleep 10
send "logout\r"
expect eof
#~ send "^c"
#~ interact
#~ exit


