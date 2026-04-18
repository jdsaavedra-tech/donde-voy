# 📍 DondeVoy – Descubre y valora locales

Proyecto en evolución 🚀

**DondeVoy** es una aplicación web en desarrollo para descubrir, guardar y valorar locales como cafés, bares y restaurantes.

El objetivo es brindar a los usuarios una herramienta simple para:

- Registrar lugares visitados  
- Gestionar listas de sitios por visitar  
- Consultar valoraciones propias y de otros usuarios  
- Filtrar y organizar lugares según diferentes criterios  

Este proyecto forma parte de un proceso de aprendizaje en desarrollo web utilizando Laravel, con enfoque en buenas prácticas y evolución progresiva hacia un producto real.

---

## 🛠️ Tecnologías utilizadas

- PHP
- Laravel
- Blade
- Bootstrap
- MySQL

---

## ⚙️ Instalación

Clona el repositorio:

```bash
git clone https://github.com/jdsaavedra-tech/donde-voy.git
```

Entra en la carpeta del proyecto:
```bash
cd donde-voy
```

Instala dependencias:

```bash
composer install
```

Copia el archivo de entorno:

```bash
cp .env.example .env
```
En Windows también puedes copiar manualmente el archivo `.env.example` y renombrarlo como `.env`.

### Configura tus variables en .env
Configura la conexión a la base de datos y otras variables necesarias según tu entorno.

---

Genera la clave de la aplicación:

```bash
php artisan key:generate
```

Ejecuta migraciones:

```bash
php artisan migrate
```

Levanta el servidor:

```bash
php artisan serve
```

Accede en el navegador:

```bash
http://127.0.0.1:8000
```

## 🧱 Estado del proyecto

Actualmente en desarrollo.

Se encuentra implementado el CRUD de locales (crear, listar, editar y eliminar).

### Funcionalidades iniciales:
- Crear locales
- Listar locales
- Editar locales
- Eliminar locales
- Orden por fecha de creación
- Mensajes de éxito (alerts)

### Próximas funcionalidades:
- Autenticación de usuarios
- Sistema de valoraciones (1–5 estrellas)
- Reseñas por usuario
- Lugares favoritos
- Lista de pendientes
- Filtros y búsqueda
- Panel administrativo (Filament)

## 🎯 Objetivo del proyecto

Este proyecto tiene como objetivo:

- Aplicar conocimientos de desarrollo con Laravel
- Integrar buenas prácticas desde etapas tempranas
- Evolucionar hacia una aplicación funcional y escalable
- Servir como portfolio profesional

## 🖥️ Uso

Una vez iniciado el servidor, puedes acceder a:

http://127.0.0.1:8000

Desde allí podrás gestionar los locales disponibles.

## 👤 Autor

- Juan David Saavedra
- QA Analyst → Web Developer
- GitHub: https://github.com/jdsaavedra-tech
- LinkedIn: https://www.linkedin.com/in/juan-david-saavedra/