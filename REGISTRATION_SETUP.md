# Registration Setup - Complete Configuration

## ✅ Database Configuration
- **Database**: MySQL (balagbal_store_finals)
- **Connection**: TCP/IP at 127.0.0.1:3306
- **Username**: root
- **Password**: (blank)
- **Configuration File**: `.env` with `DB_CONNECTION=mysql`

## ✅ Database Schema
Migration `2025_12_02_000001_update_users_table.php` has added the following columns to the `users` table:

- `username` (string, unique)
- `firstname` (string, nullable)
- `lastname` (string, nullable)
- `address` (text, nullable)
- `phone` (string, nullable)
- `role_id` (foreign key to roles table, nullable)

**Status**: ✅ Applied

## ✅ User Model (`app/Models/User.php`)
All fillable fields configured:
```php
protected $fillable = [
    'username',
    'email',
    'password',
    'firstname',
    'lastname',
    'address',
    'phone',
    'role_id',
];
```

## ✅ Registration Form (`resources/views/auth/register.blade.php`)
Form configuration:
- **Action**: `{{ route('register') }}` (POST /register)
- **CSRF Token**: ✅ Included with `@csrf`
- **Fields**:
  - Username (required, unique)
  - Email (required, unique)
  - First Name (required)
  - Last Name (required)
  - Password (required, min 6 chars)
  - Password Confirmation (required, must match)
  - Address (optional)
  - Phone (optional)

## ✅ AuthController (`app/Http/Controllers/AuthController.php`)
### Validation Rules:
```php
'username' => 'required|string|max:255|unique:users,username',
'email' => 'required|email|unique:users,email',
'firstname' => 'required|string|max:255',
'lastname' => 'required|string|max:255',
'password' => 'required|min:6|confirmed',
'password_confirmation' => 'required',
'address' => 'nullable|string|max:500',
'phone' => 'nullable|string|max:20',
```

### User Creation:
The `register()` method creates a new User record with:
- Username, Email, First/Last Names
- Bcrypt-hashed password
- Optional Address and Phone
- Auto-login after registration
- Redirect to `/dashboard`

## ✅ Routes (`routes/web.php`)
```php
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
```

## 🧪 Testing the Registration Process

### Step 1: Navigate to Registration
Visit: `http://localhost/register`

### Step 2: Fill Out the Form
- Username: (unique username)
- Email: (unique email)
- First Name: (your first name)
- Last Name: (your last name)
- Password: (min 6 characters)
- Confirm Password: (must match password)
- Address: (optional)
- Phone: (optional)

### Step 3: Submit the Form
Click the "Register" button

### Expected Results:
✅ User record is saved to MySQL database
✅ User is automatically logged in
✅ User is redirected to `/dashboard`

## 🔍 Troubleshooting

### If registration fails:
1. Check that MySQL is running
2. Verify `.env` database credentials
3. Run migrations: `php artisan migrate`
4. Check database: `mysql -u root balagbal_store_finals`
5. View errors in Laravel logs: `storage/logs/laravel.log`

### To verify the schema:
```bash
php artisan migrate:status
php artisan tinker
>>> \App\Models\User::all();
```

---
**Last Updated**: December 2, 2025
**Status**: ✅ Ready for Testing
