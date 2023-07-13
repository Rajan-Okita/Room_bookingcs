<h1 style="text-align: center;">
    Room Booking
</h1>

<h2 style="text-align: center;">
   An online platform for students to book study rooms
</h2>

### Abstract
The web application allows users to be able to view classes that are empty, and they can be able to book the venue depending on the availability. The users upon login, they can be able to search for empty rooms based on various criteria e.g., date, time, location and specific requirements (individual study or group studies). The system will present details such as room capacity and room location. Filter options will be available for users to be able to refine their search based on their preference. The web application will feature a user-friendly interface accessible through standard web browsers, enabling students to view and interact with the system. The application will utilize a centralized database that stores information about the school's room inventory, including room availability, and capacity. Overall, this web application aims to simplify the process of finding and booking empty rooms within a school environment, empowering students to efficiently manage their study and collaborative activities while maximizing the utilization of available resources.
# Installation Guide

This guide provides step-by-step instructions to install a Laravel project that requires Laravel, Node.js, and MySQL.

## Prerequisites

Before you begin, make sure you have the following software installed on your machine:

- PHP (version >= 7.3)
- Composer
  https://getcomposer.org/download/
- Node.js (version >= 12.x)
- npm
  https://nodejs.org/en/download
- MySQL (version >= 5.7)
  https://www.mysql.com/downloads/

## Clone the Repository

Clone the project repository from GitHub:
https://github.com/jeremy-riu/CS_breeze.git

## Install PHP Dependencies

Install the required PHP dependencies using Composer:
$composer install

## Configure Environment Variables

Create a copy of the `.env.example` file and name it `.env`. Update the necessary environment variables such as database credentials, app key, etc.:
$ cp .env.example .env
$ nano .env


## Generate Application Key

Generate a unique application key using the following command:
$ php artisan key:generate

## Set Up the Database

Create a new MySQL database for your application and update the `.env` file with the database name, username, and password.

## Migrate the Database

Run the database migrations to create the required tables:
$ php artisan migrate

## Serve the Application

Start the development server to run your Laravel application:
$ php artisan serve

## Access the Application

Open your web browser and visit `http://localhost:8000` to access your Laravel application.

Congratulations! You have successfully installed the Laravel project with Laravel, Node.js, and MySQL. Feel free to explore the application and customize it according to your needs.

If you encounter any issues during the installation process, refer to the official documentation or seek help from the Laravel community.
