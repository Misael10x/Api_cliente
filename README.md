# Sistema CRUD con Laravel + API RESTful

Este proyecto implementa una API RESTful en Laravel y una aplicación cliente que consume dicha API utilizando los métodos HTTP principales: **GET, POST, PUT, DELETE**.  
El sistema permite la gestión de estudiantes mediante un CRUD completo.

---

## 🚀 Características del Proyecto

### **API RESTful (Laravel)**
- Creada en Laravel.
- Endpoints disponibles:
  - **GET** → Listar estudiantes  
  - **POST** → Crear estudiante  
  - **PUT** → Actualizar estudiante   
  - **DELETE** → Eliminar estudiante  
- Respuestas en formato JSON.
- Validación de datos incluida.

### **Aplicación Cliente**
- Consumida desde una aplicación Laravel (o Blade) usando **fetch()** o **Axios**.
- Contiene:
  - Vista para crear estudiantes.
  - Vista para editar estudiantes.
  - Listado de estudiantes.
  - Eliminación directa desde la interfaz.
  - Notificaciones visuales de éxito/error.

---

## 🖥️ Funcionamiento de la Aplicación Cliente

### **1️⃣ Listado de estudiantes**
La aplicación solicita datos mediante **GET** a la API y los muestra en una tabla.  
Incluye opciones de **Editar** y **Eliminar**.

### **2️⃣ Crear nuevo estudiante**
Formulario que envía los datos mediante **POST** hacia la API.

### **3️⃣ Editar estudiante**
Formulario que carga los datos existentes y envía cambios mediante **PUT**.

### **4️⃣ Eliminar estudiante**
Botón que ejecuta un **DELETE** y actualiza el listado.

---

## 🔌 Requisitos

- PHP 8+
- Composer
- Laravel 10+
- MySQL / XAMPP
- Navegador web

---

## ✔️ Conclusión

Este proyecto demuestra el funcionamiento completo de un **CRUD consumiendo una API REST**, integrando servidor y cliente en Laravel.  
Se aplican técnicas modernas de comunicación HTTP y vistas dinámicas para gestionar los datos de forma eficiente.

