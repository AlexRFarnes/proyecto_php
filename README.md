# Pagina Web en PHP

> Esta es una página web sencilla en PHP.

## Tabla de Contenidos

- [Pagina Web en PHP](#pagina-web-en-php)
  - [Tabla de Contenidos](#tabla-de-contenidos)
  - [Descripción](#descripción)
  - [Cómo Empezar](#cómo-empezar)
    - [Prerequisitos](#prerequisitos)
  - [Capturas de Pantalla](#capturas-de-pantalla)
  - [Tecnologías](#tecnologías)
  - [Status](#status)
  - [Contacto](#contacto)

## Descripción

Página web creada como ejercicio de la clase _Fundamentos de Construcción de Software_ de la **Tecnico en Desarrollo de Software** de la [Universidad Galileo](https://www.galileo.edu/ivn/carrera/tecnico-desarrollo-software-tds/). La página fue creada usando PHP y HTML para entender la diferencia entre un lenguaje de programación interpretado versus uno compilado.

## Cómo Empezar

Para tener una copia local sigue los siguientes paso:

- Entra en el directorio `/var/www/html/`
  ```bash
  cd /var/www/html/
  ```
- Clona el repositorio en `/var/www/html/`
  ```bash
  git clone https://github.com/AlexRFarnes/proyecto_php.git
  ```
- Una vez tengas el repositorio en tu local, abre tu navegador y navega a la dirección `http://localhost/proyecto_php/index.php` o si estas usando una máquina virtual `http://<IP_de_Maquina_Virtual>/proyecto_php/index.php`

### Prerequisitos

- Apache 2 - si no lo tienes, puedes instalarlo con los siguientes comandos:

  ```bash
  sudo apt update
  sudo apt install apache2
  ```

- Verifica que se esté ejecutando:

  ```bash
  sudo service apache2 status
  ```

- PHP 8.3 - si no lo tienes, puesdes instalarlo con los siguientes comandos:
  ```bash
  sudo apt update && sudo apt upgrade -y
  sudo apt install php libapache2-mod-php php-mysql php-cli php-curl php-json -y
  ```
- Verifica que esté instalado:
  ```bash
  php -v
  ```

## Captura de Pantalla

<img width="1920" height="909" alt="Captura de pantalla 2026-03-03 133250" src="https://github.com/user-attachments/assets/fc2331ff-9b64-47d2-b440-8c8dd3c6c7a7" />

## Tecnologías

- PHP 8.3
- Apache 2
- HTML

## Status

El projecto está: _completado_.

## Contacto

- GitHub [@AlexRFarnes](https://github.com/AlexRFarnes)
- Nombre: Saúl Alexander Reynoso Farnes
- Correo: 26000127@galileo.edu
- Carné: 26000127
