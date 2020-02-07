# pruebadatasae

Crear una base de datos llamada laravel, 
con usuario laravel y password root1234


Crear una tabla llamada jugador:

CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    monto FLOAT DEFAULT 10000
);

Se puede hacer todo el crud desde la vista index.php.
Desde esa misma vista se puede ver el simbolo de dinero/cerdo 
donde se puede apostar.

Luego de apostar se retorna a la vista principal con el nuevo saldo 
