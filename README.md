# examen-electroshop
primer examen
Este proyecto es parte del Primer Examen Parcial de la materia **Taller de Aplicaciones de Internet**. Se trata de una API construida con Laravel que permite registrar, autenticar usuarios, y realizar operaciones CRUD sobre Marcas y Productos.

---

# Requisitos

- PHP >= 8.0.2
- Composer
- MySQL o MariaDB
- Laravel >= 9.19
- Postman (para pruebas)
- Git

---

## Pasos para correr el proyecto

### 1. Clonar el repositorio
git clone url_repositorio
cd examen-electroshop
# 2. Instalar dependencias
composer install
# 3. Copiar el archivo .env
linux o MacOS -> cp .env.example .env
windows -> copy .env.example .env
# 4. Modificar el archivo .env
DB_PORT=puerto_MySQL
DB_DATABASE=nombre_de_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña

# 5. Migraciones y seeders
php artisan migrate
php artisan db:seed
# 6. Levantar el servidor
php artisan serve


