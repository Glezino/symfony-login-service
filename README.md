## Back-End Project with Symfony: User Management Microservice

This back-end project developed with Symfony aims to provide a microservice for user management in a web application. It will focus on implementing login and registration forms, securing routes with roles, and authentication using JWT tokens.

### Main Features:

1. **Login and Registration Forms:** The microservice will include login and registration forms so that users can authenticate and create new accounts on the platform.

2. **Route Security with Roles:** A role-based system will be implemented to ensure that only users with appropriate permissions can access certain parts of the application. For example, roles like "user" and "administrator" can be defined, each having access to different functionalities and routes.

3. **Authentication with Token (JWT):** To ensure secure communication between the client and the server, JWT token-based authentication will be used. This will allow users to log in once and then access protected resources without having to send their credentials with each request.

4. **MySQL Database for Storing User Data:** A MySQL database will be used to store all user-related data in a single table. This will include information such as usernames, passwords (hashed), email addresses, assigned roles, and other relevant details.

5. **Mailer and Password Reset (Experimental):** Basic functionality for mailing and password reset will be implemented, albeit in a trial phase.

### Technologies Used:

- **Symfony:** PHP framework for developing the back-end of the application.
- **MySQL:** Relational database management system for storing user information.
- **JWT:** For implementing token-based authentication and generating JWT tokens.
- **Doctrine:** Object-relational mapping and persistence layer management in Symfony.
- **Twig:** Template engine for generating dynamic views in Symfony.

### Usage:

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Configure your `.env` file with database settings and JWT keys.
4. Update the database schema using `php bin/console doctrine:schema:update --force`.
5. Navigate to `src/service/mailer.php` and `src/Controller/EmailController.php` to set up mailing functionalities.
6. Use the provided routes for registration, login, user listing, password reset, and API endpoints.

### Routes:

| URL path           | Method | Permissions                          | Description                     |
| ------------------ | ------ | ------------------------------------ | ------------------------------- |
| /register          | GET    | Open                                 | Registration form               |
| /login             | GET    | Open                                 | Login form                      |
| /user              | GET    | Admin users access allowed           | List of users                   |
| /reset-password    | GET    | Password reset                       | For all users (not configured)  |
| API Routes         |        |                                      |                                 |
| /api/register      | POST   | Open                                 | Create user with token          |
| /api/login_check   | POST   | Open                                 | Send username and password, returns a token |
| /api/check         | POST   | Token check                          | Restricted to users with token  |
| /api/check_info    | POST   | Token information                    | Restricted to users with token  |

This back-end project will provide a solid foundation for user management in the web application, ensuring secure authentication, route protection, and efficient user data management in the database.
