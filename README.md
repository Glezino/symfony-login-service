# Back-End Project with Symfony: User Management Microservice

This Symfony-developed back-end project aims to provide a microservice for user management within a web application. Its primary focus lies in implementing login and registration forms, securing routes with roles, and authentication using JWT tokens.

## Main Features:

1. **Login and Registration Forms:** The microservice will incorporate login and registration forms, allowing users to authenticate and create new accounts on the platform.
2. **Route Security with Roles:** A role-based system will be implemented to ensure that only users with appropriate permissions can access certain parts of the application. For instance, roles like "user" and "administrator" can be defined, each with access to different functionalities and routes.
3. **Authentication with Token (JWT):** JWT token-based authentication will be employed to guarantee secure communication between the client and the server. This will enable users to log in once and access protected resources without sending their credentials with each request.
4. **MySQL Database for Storing User Data:** A MySQL database will be utilized to store all user-related data in a single table. This includes information such as usernames, hashed passwords, email addresses, assigned roles, and other relevant details.
5. **Mailer and Password Reset (Experimental):** Basic mailing and password reset functionalities will be implemented, albeit in a trial phase.

## Technologies Used:

- **Symfony:** PHP framework for building the back-end of the application.
- **MySQL:** Relational database management system for storing user information.
- **JWT:** For implementing token-based authentication and generating JWT tokens.
- **Doctrine:** Object-relational mapping and persistence layer management in Symfony.
- **Twig:** Template engine for generating dynamic views in Symfony.

## Requirements:

- Symfony CLI: [Download](https://symfony.com/download)
- PHP 8.3.0: [Installation Instructions](https://www.php.net/manual/en/install.php)
- Composer: [Download](https://getcomposer.org/download/)
- Symfony 6.4: [Release Notes](https://symfony.com/releases/6.4)

## Installation Instructions:

To run this project, follow these steps:

1. Create a new Symfony project and install the following dependencies to generate a `.env` file:
   - `symfony new justforenv --version=6.4`
   - `composer require symfony/orm-pack`
   - `composer require symfony/mailer`
   - `composer require nelmio/cors-bundle`

2. Clone the repository:

    ```
    git clone <repository-url>
    ```

3. Copy the `.env` file generated in the new project to the cloned repository folder.

4. Install dependencies:

    ```
    composer update
    ```

5. Generate JWT keys:

    ```
    php bin/console lexik:jwt:generate-keypair
    ```

6. Configure your `.env` file with database settings and `MAILER_DSN`.

7. Update the database schema:

    ```
    php bin/console doctrine:schema:update --force
    ```

8. Navigate to `src/service/mailer.php` and `src/Controller/EmailController.php` to configure mail functionalities.

## Routes:

| URL path           | Method | Permissions                          | Description                     |
| ------------------ | ------ | ------------------------------------ | ------------------------------- |
| /register          | GET    | Open                                 | Registration form               |
| /login             | GET    | Open                                 | Login form                      |
| /user              | GET    | Admin users access allowed           | List of users                   |
| /reset-password    | GET    | Password reset                       | For all users (not configured)  |
| API Routes         |        |                                      |                                 |
| /apiregister      | POST   | Open                                 | Create user with token          |
| /api/login_check   | POST   | Open                                 | Send username and password, returns a token |
| /apicheck         | POST   | Token check                          | Restricted to users with token  |
| /apicheck_info    | POST   | Token information                    | Restricted to users with token  |

