## Pregunta 2

### Composición y herencia

Cuando hablamos de herencia, nos estamos refirendo a la relación que existe entre un objeto que adopta los mismos comportamientos o implementaciones de otro objeto. Llamese a esto una relación entre padres e hijos.

La herencia es la que nos permite crear una estructura jerárquica de clases más especializadas.

En cambio, la composición es una relación que representa a objetos compuestos por otros objetos, también de forma jerárquica, donde el objeto del nivel superior de la jerarquía representa a todo un conjunto mientras que los niveles inferiores representan sus partes o componentes

Esto quiere decir, que en la composición tenemos una instancia de una clase que contiene instancias de otras clases que implementan funciones.

#### Ejemplos de composición y herencia:
- Clase persona y clase empleado.
-- Herencia: un empleado es una persona.
- Clase persona y clase domicilio.
-- Composición: una persona tiene un domicilio.
- Clase empresa, clase empleado y clase jefe de grupo de
empleados.
-- Herencia entre empleado y jefe: Un jefe es un empleado.
-- Composición entre empresa y empleado o jefe. 

## Pregunta 3

### Patrón MVC en laravel

Cuando creamos una aplicación en laravel, nosotros necesitamos crear modelos, que van a servir como interfaz entre el laravel y la base de datos. En laravel, el modelo es una clase con propiedades que comparten los mismos tipos de dato con los campos de las tablas en base de datos.

Los controladores, son utilizados para completar las acciones de los usuarios y para gestionar la logica de negocio de las aplicaciones.

Finalmente las vistas, almacenan el codigo html de las paginas web y son la presentación en la arquitectura MVC.

## Pregunta 5

### Patrón active record. Ventajas y desventajas.

- Es sencillo de entender. Porque coinciden conceptualmente los objetos y los campos de la base de datos. Esto facilita la lectura del esquema e influye directamente de la simplicidad, haciendo que se tenga una comprensión intuitiva de lo que se esta haciendo en el proyecto.
- De presentarse la situación, es dificil hacer una separación entre los objetos y la base de datos(para pruebas u otras razones).

## Pregunta 6

### Comando usados por laravel para crear controladores.

- php artisan make: controller [nombre de la clase] --resource --model=Nombre del modelo

### Comando para correr un seeder en php

- composer dump-autoload
- php artisan db:seed
- php artisan db:seed --class=UsersTableSeede
- php artisan migrate:refresh --seed

### Diferencia entre metodo Find() y All()

- ::All() devuelve todos los registros de un modelo.
- ::Find(id) devuelve registros de un modelo buscando por una clave