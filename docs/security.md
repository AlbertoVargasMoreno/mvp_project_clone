## Crear usuarios

Este proyecto usa `password_verify()` para validar los datos de inicio de sesión, por lo que es importante mantener el mismo algoritmo de hash al insertar nuevos usuarios.
Aquí un ejemplo de cómo insertar un nuevo usuario:

```sql
-- password_hash('Carlos7r',PASSWORD_DEFAULT); // bcrypt hash
INSERT INTO user(name,email,password) VALUES("carlos rangel", "carlos.rangel@hotmail.com", "$2y$10$pZGxZVi6cqahlFeSD7vdGup5FF6ohu9nyjhpzoK4DVzviPyXzKqeu");
```
## Sanitizar datos de salida

Los siguientes ejemplos demuestran la importancia de sanear los datos de salida para evitar la inyección de código en las vistas.

1. En este ejemplo, se ha insertado código HTML y JavaScript en los campos 'description' y 'category' de la tabla 'product'. Para prevenir la inyección de código y mostrar los datos de manera segura en la vista, se debe utilizar una función de saneamiento como `htmlspecialchars()` antes de mostrar los datos:
```sql
INSERT INTO `product` \
VALUES (5,'<script>window.alert(\"deposite a la cuenta 0000111100003333\");</script>','<h1>PaginaInsegura</h1>',1);
```

2. En este ejemplo, se ha insertado código HTML en el campo 'name' de la tabla 'user'. 
Para prevenir que este código HTML se muestre directamente en la vista, se utiliza la función de saneamiento `htmlspecialchars()` antes de mostrar los datos en la vista:

```sql
-- password_hash("Oscar#g",PASSWORD_DEFAULT);
INSERT INTO user(name, email, password) \
VALUES("<h1>Oscar</h1>","oscar.guerrero@yahoo.com", "$2y$10$7nfMQqhsmaYN7H/V2GmKj.XsujdrjsSulKkP4Z4MBmlJQzZazDTKW");
```

## Sanitizar datos de entrada

Para evitar la inyección de código por los usuarios en los datos de entrada, se utilizan funciones de saneamiento como `filter_var()` antes de insertar los datos en la base de datos.
Aquí un ejemplo del resultado después de aplicar el saneamiento:

```sql
mysql> SELECT * FROM product WHERE id = 8;
+----+--------------------------------------------------------+-----------------------------------+-----------+
| id | description                                            | category                          | available |
+----+--------------------------------------------------------+-----------------------------------+-----------+
|  8 | &#60;script&#62;alert(&#34;hola&#34;)&#60;/script&#62; | &#60;h2&#62;category&#60;/h2&#62; |         1 |
+----+--------------------------------------------------------+-----------------------------------+-----------+
1 row in set (0.00 sec)

```
