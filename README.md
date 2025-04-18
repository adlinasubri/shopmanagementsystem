# SHOP MANAGEMENT SYSTEM

> Laravel 8 Project - Upgraded for PHP 8.3 and PostgreSQL

---

## Requirements

- PHP 8.3+
- Composer
- Laravel 8.x
- PostgreSQL 12+
- Node.js & NPM (for frontend assets if applicable)

---

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/adlinasubri/shopmanagementsystem.git
cd shopmanagementsystem
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Modules (optional, if using frontend scaffolding)
```bash
npm install
npm run dev
```

### 4. Create Environment File
```bash
cp .env.example .env
```

### 5. Set Up `.env` Database Configuration
```dotenv
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 6. PostgreSQL Permissions
If you encounter permission errors, make sure:

```sql
-- Login as postgres user
ALTER DATABASE your_database_name OWNER TO your_database_user;
ALTER SCHEMA public OWNER TO your_database_user;
GRANT ALL PRIVILEGES ON SCHEMA public TO your_database_user;
GRANT CREATE ON SCHEMA public TO your_database_user;
```

Restart PostgreSQL service after applying changes:
```bash
sudo systemctl restart postgresql
```

### 7. Run Laravel Migrations
```bash
php artisan migrate
```

> **Note:** If you get `SUM() of varchar` error, cast the fields or alter your DB column:
```sql
ALTER TABLE incomes ALTER COLUMN amount TYPE numeric USING amount::numeric;
```


### 8. Generate Application Key
```bash
php artisan key:generate
```

### 9. Start the Development Server
```bash
php artisan serve
```

Project should now be accessible at `http://127.0.0.1:8000`

---

## Notes

- Ensure PHP extensions are enabled: `pgsql`, `pdo_pgsql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `bcmath`
- If using cache, run `php artisan config:cache && php artisan route:cache`
- Use `php artisan config:clear` if environment variables are not updating.

---

## Useful Commands

- Rollback migrations:
```bash
php artisan migrate:rollback
```
- Fresh migration with seed:
```bash
php artisan migrate:fresh --seed
```

---

## License

[MIT](LICENSE)

---

**Happy coding! 🚀**

