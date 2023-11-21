abres una nueva terminal en visual studio dentro de la carpeta dacomaexamdaw-master

recuerda abrir el docker desktop

en la terminal usaras el comando "docker-compose up -d"

si todo a ido bien iras al docker desktop, habra una flecha para bajar y le puedes dar a los puertos del contenedor de "web"

si no te conecta a la base de datos haz esto:

en visual abre la carpeta public y dale al index.php

Y en la tercera linea despues de "mysql:host=" cambias por la ip de la base de datos

para saber la ip de la base de datos es con el comando docker inspect "y la id del contenedor"

cogeremos el dato de IPAddress que esta al final




