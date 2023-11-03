# Laravel CRUD Application with Microservices

Welcome to the README for the Laravel CRUD application with microservices. This repository contains a Laravel application that demonstrates CRUD (Create, Read, Update, Delete) operations, user authentication, and the integration of microservices from another repository. Here, you will find information on how to set up, use, and understand the structure of this application.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Microservices Integration](#microservices-integration)
- [Author](#author)

## Introduction

This Laravel application is a simple CRUD application that allows you to manage records and perform CRUD operations on them. Additionally, it provides user authentication for secure access to the application. The unique aspect of this application is its integration with microservices, which allows you to interact with records using services provided by another Java dynamic web application.

## Features

- **CRUD Operations**: Create, Read, Update, and Delete records in the application.
- **User Authentication**: Secure login and access control for users.
- **Microservices Integration**: Utilize microservices from another Java dynamic web application to interact with records.

## Getting Started

### Prerequisites

Before you begin, make sure you have the following prerequisites installed on your system:

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/docs/8.x/installation)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/)

### Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/your-username/laravel-crud-microservices.git
   cd laravel-crud-microservices
   ```

2. Install project dependencies:
   ```bash
   composer install
   npm install
   ```

3. Create a `.env` file by copying the `.env.example`:
   ```bash
   cp .env.example .env
   ```

4. Configure your database settings in the `.env` file.

5. Generate an application key:
   ```bash
   php artisan key:generate
   ```

6. Migrate and seed the database:
   ```bash
   php artisan migrate --seed
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Access the application in your web browser at `http://localhost:8000`.

9. If you want to do crud oprations follow this repository ( [java API repository](https://github.com/vklsaravanan/Java-crud-api-using-mysql) ) Instructions.

## Usage

You can use this Laravel CRUD application to perform the following actions:

- Register and log in as a user.
- Create, read, update, and delete records.
- Explore the microservices integration to interact with records from the Java dynamic web application.

## Microservices Integration

This Laravel application integrates with microservices from another Java dynamic web application. To fully utilize the microservices, please refer to the documentation in the Java dynamic web application repository: [Java Dynamic Web Application Repository](https://github.com/vklsaravanan/Java-crud-api-using-mysql).

## Author

- **Your Name**
  - GitHub: [Your GitHub Profile](https://github.com/vklsaravanan)

Feel free to contribute to this project, report issues, or provide feedback. Thank you for using this Laravel CRUD application with microservices!