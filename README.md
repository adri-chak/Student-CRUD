# Student CRUD Package for Laravel

A simple Laravel package that provides a complete Student CRUD (Create, Read, Update, Delete) operation out of the box.

## Requirements

- PHP ^8.0
- Laravel ^10.0 | ^11.0 | ^12.0

## Installation

Install the package via Composer:

\`\`\`bash
composer require adrija/studentcrud
\`\`\`

## Setup

Run the migrations:

\`\`\`bash
php artisan migrate
\`\`\`

Start the server:

\`\`\`bash
php artisan serve
\`\`\`

## Usage

Visit the students page in your browser:

\`\`\`
http://localhost:8000/students
\`\`\`

## Features

- View all students
- Add a new student
- Edit an existing student
- Delete a student
- Form validation
- Pagination

## Routes

| Method | URL | Description |
|--------|-----|-------------|
| GET | /students | View all students |
| GET | /students/create | Show add form |
| POST | /students | Save new student |
| GET | /students/{id}/edit | Show edit form |
| PUT | /students/{id} | Update student |
| DELETE | /students/{id} | Delete student |

## License

MIT
