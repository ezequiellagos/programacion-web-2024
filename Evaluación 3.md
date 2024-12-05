# Evaluación Final

El proyecto final consiste en tomar como base la última tarea y agregar una integración de una API a elección. Los estudiantes deben **consumir una API** (no crear una) y mostrar su información en al menos **dos páginas** del proyecto. 

La evaluación debe ser realizada en parejas, subiendo el código a un repositorio de **GitHub** y presentando el proyecto en clases.

## Requisitos del Proyecto
El proyecto debe incluir:

- **Página de Registro** (10 puntos)
- **Página de Login** (10 puntos)
- **Página de inicio** con:
  - Explicación del proyecto.
  - Nombres e imágenes de los integrantes.  
  *(7 puntos)*
- **Primera página** que muestre información de la API. *(10 puntos)*
- **Segunda página** que muestre información de la API. *(10 puntos)*
- **Link al repositorio de GitHub** que demuestre trabajo colaborativo. *(3 puntos)*
- **Presentación en clase**, con vestimenta formal o semi-formal. *(5 puntos)*

## Consideraciones Técnicas
- **MySQL** para almacenar los usuarios registrados y validar los logins *(usuario/contraseña, RUT/contraseña o email/contraseña)*. *(5 puntos)*
- **Bootstrap** para el diseño de las páginas. *(5 puntos)*
- **PHP** para la validación de los campos en el backend. *(5 puntos)*
- No se debe poder acceder a las páginas de la API sin haber iniciado sesión. Validar con **variables de sesión**. *(5 puntos)*

---

## Descripción de Páginas
### **1. Página de Registro**
Debe incluir los siguientes campos:
- **Nombre**
- **Apellido**
- **Correo Electrónico** *(Validar formato de correo)*
- **Contraseña** *(Validar: al menos 8 caracteres, una mayúscula, una minúscula y un número)*
- **Confirmar Contraseña** *(Validar coincidencia con la contraseña)*
- *(Se pueden agregar más campos si es necesario).*

### **2. Página de Login**
Debe incluir los siguientes campos:
- **Correo Electrónico/Usuario/RUT** *(uno de los tres métodos para iniciar sesión)*.
- **Contraseña**.
- Si las credenciales son incorrectas, debe mostrar un **mensaje de error**.
- Al iniciar sesión:
  - Guardar la información del usuario en una **sesión**.
  - Registrar la fecha y hora de inicio de sesión en un archivo **log.txt**.
- Al cerrar sesión:
  - Destruir la sesión.

### **3. Página de Bienvenida**
Una vez iniciada la sesión, debe mostrar:
- **Nombre del usuario** que ha iniciado sesión.
- **Botón para cerrar sesión**.
- Un **menú** con las opciones:
  - **Inicio**
  - **Productos/Personajes/Equipos**, etc., dependiendo de la API seleccionada.
  - **Cerrar sesión** *(redirige a la página de login tras destruir la sesión)*.

### **4. Páginas de API**
- Mostrar información obtenida de la API en:
  - **Tabla**, **listas**, **tarjetas**, u otro formato adecuado.
  - Mostrar al menos **5 registros**.
- Si se está mostrando un producto, personaje, etc., debe haber una página por cada registro con información específica del mismo.

### **5. Página de Cerrar Sesión**
- Destruye la sesión y redirige al usuario a la página de login.
- No es necesario mostrar un mensaje de confirmación.