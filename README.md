<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 📍 DondeVoy

**DondeVoy** es una aplicación web en desarrollo que permite descubrir, guardar y valorar lugares como cafés, bares y restaurantes.

El objetivo es brindar a los usuarios una herramienta simple para:

- Registrar lugares visitados  
- Gestionar listas de sitios por visitar  
- Consultar valoraciones propias y de otros usuarios  
- Filtrar y organizar lugares según diferentes criterios  

Este proyecto forma parte de un proceso de aprendizaje en desarrollo web utilizando Laravel, con enfoque en buenas prácticas y evolución progresiva hacia un producto real.

---

## 🚀 Tecnologías utilizadas

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

### Funcionalidades iniciales:
- CRUD de locales (crear, listar, editar, eliminar)

### Próximas funcionalidades:
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

## 👤 Autor

- Juan David Saavedra
- QA Analyst → Web Developer
- GitHub: https://github.com/jdsaavedra-tech
- LinkedIn: https://www.linkedin.com/in/juan-david-saavedra/