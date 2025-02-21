# Simple CRUD Application with Authentication

- **User Registration and Authentication**: Users can sign up, log in, and log out securely.
- **Task Management**: Users can manage tasks with Create, Read, Update, and Delete operations.
- **Responsive Design**: The app is designed with Tailwind CSS.

## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/geeloov/intern-task-vladimir-gelov
    ```

2. **Navigate to the project directory**:
    ```bash
    cd intern-task-vladimir-gelov
    ```

3. **Install dependencies**:
    - For PHP dependencies:
      ```bash
      composer install
      ```

    - For front-end dependencies:
      ```bash
      npm install
      ```

4. **Set up the environment file**:
    Copy `.env.example` to `.env`:
    ```bash
    cp .env.example .env
    ```

5. **Generate the application key**:
    ```bash
    php artisan key:generate
    ```

6. **Set up the database**:
    - Make sure to update your `.env` file with the correct database credentials.
    - Change this things in your `.env` file.
    - DB_CONNECTION=mysql
        DB_HOST=
        DB_PORT=
        DB_DATABASE=intern-task-vladimir-gelov
        DB_USERNAME=
        DB_PASSWORD=

    - Run the migrations to set up the necessary tables:
      ```bash
      php artisan migrate
      ```

7. **Run the development server**:
    ```bash
    php artisan serve
    ```

7. **Run the development server**:
    ```bash
    php artisan serve
    ```

8. **Open the application on your browser**:
    Navigate to `http://localhost:8000` in your web browser.

