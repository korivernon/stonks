# stonks

Couple things to know about the Makefile

`make up` -> brings the docker service online
`make upload` -> brings the sql code into the postgres container
The above two are likely what you want to do, in order, to get started.
`make down` -> takes everything offline (compose persists state over resets)
`make hard-reset` -> reset all containers' states

The [[compose-file]](file:docker-compose.yml) is where you're gonna wanna add your docker container when you're done. Don't forget to open whatever ports you need to. 
