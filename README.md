# Consulta de Codigos Postales México 2021

_Se muestra el Catálogo Nacional de Códigos Postales elaborado por Correos de México. En combos dinámicos en PHP, AJAX y MySQL. Fecha de Obtencion de datos 01/06/2021._

https://estrada59.github.io/ConsultaCodigosPostalesMexico/

## Comenzando 🚀

_Parte de este aporte es del siguiente canal de YouTube_

Códigos de Programación - MR Canal: https://www.youtube.com/channel/UCKaa9SPITNARrLDvX2olvrA

Puedes visitar el siguiente link

https://www.youtube.com/watch?v=xq04F4hbZmo&ab_channel=C%C3%B3digosdeProgramaci%C3%B3n-MRC%C3%B3digosdeProgramaci%C3%B3n-MR

Los archivos que se usaron de este aporte son los siguientes:

```
-includes
    getLocalidad.php
    getMunicipio.php
-js
    jquery-3.1.1.min.js

conexion.php
guarda.php
index.php

```
## Obtención de datos

Los datos para la creación de este archivo Sql  se obtuvieron de el Catálogo Nacional de Códigos Postales,
es elaborado por Correos de México.

Fuente:     http://www.cuentame.inegi.org.mx/territorio/division/default.aspx?tema=T
            https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/Descarga.aspx

Fecha de Obtencion de datos 01/06/2021.

```
BD_Estados_Municipios_Asentamientos.sql

    tblc_estados: 32 Entidades Federativas
    tblc_municipios: 2,469 Cantidad de municipios
    tblc_asentamienos: 146,076 Cantidad de asentamientos (Nombre del asentamiento, C.P. etc.)
    tblc_tipo_asentamientos: 32 tipos de asentamientos (Colonias, unidad habitacional, fraccionamiento etc.)
   
```
## Estructura de la base de datos 🛠️

![DiagramaEntidadRelacion](https://user-images.githubusercontent.com/6250793/121298464-86bd7400-c8b9-11eb-8f10-05101a22f3db.png)

## Construido con 🛠️

_El proyecto se construyó usando las siguientes herramientas_


* [XAMPP](https://www.apachefriends.org/es/index.html) - XAMPP es una distribución de Apache completamente gratuita y fácil de instalar que contiene MariaDB, PHP y Perl.

Una vez instalado hay que ejecutar dentro de phpmyadmin el archivo BD_Estados_Municipios_Asentamientos.sql
con esto ya tendremos cargada la BD

![TablasCargadas](https://user-images.githubusercontent.com/6250793/121299495-229baf80-c8bb-11eb-9e43-631099f68497.png)

Posteriormente todos los archivos descargados hay que colocarlos en:

```
C:\xampp\htdocs\ConsultaCodigosPostalesMexico
```
Posteriormente ir al navegador y ejecutar el archivo index.php entrando al localhost/ConsultaCodigosPostalesMexico

![Ejemplo](https://user-images.githubusercontent.com/6250793/121299733-7ad2b180-c8bb-11eb-9ce4-5f066c57763d.png)


## Autor ✒️

* **Enrique Estrada** - *Trabajo Inicial* - [estrada59](https://github.com/estrada59)



## Licencia 📄

Este proyecto está bajo la Licencia (GNU General Public License v3.0) - mira el archivo [LICENSE.md](LICENSE.md) para detalles


## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
