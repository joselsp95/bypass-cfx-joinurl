![](http://githubbadges.com/star.svg?user=joselsp95&repo=bypass-cfx-joinurl&background=007ecg&color=bbb&style=flat) 
![](http://githubbadges.com/fork.svg?user=joselsp95&repo=bypass-cfx-joinurl&background=007ecg&color=bbb&style=flat)
<br />
![Demo](https://media.giphy.com/media/pjOO6pev7YzriFz5rW/giphy.gif)
<br />

### ¿Que es?
**BYPASS CFX JOIN URL** es un simple script que lo que realiza es obtener del header de CFX.re el valor real detras del join url (el mismo puede ser una url o una ip:puerto)

### ¿Que hace, como funciona?
Primero realiza un CURL a la url de cfx.re que soliciten en el textbox, y del header extraemos el unico valor que requerimos que es el de **x-citizenfx-url**

### ¿Que utiliza?
PHP + HTML + [pico.css](https://picocss.com/ "pico.css")


### Cosas a mejorar / agregar
- Verificacion de las url, no verifica si es una url de cfx o no, de poner otra va a extraer cualquier cosa
- UI/UX 
- Un boton para hacer whois a la ip/dominio
- traer mas datos de la url bypasseada (owner, build, etc)
- traer en que ASN esta alojada la ip 














