#AutoScout Application
Simple Crud System Built in Laravel [10] where people can buy cars online
This a project created by [Kevi Hysi] In this system you'll be able to login as an Admin or normal User  <br>


# Overview

The main aim of the project is display, search, add to basket dynamic and specific details of the cars added by [Administrator].

# Used Technologies
PHP 8 | MYSQL | JavaScript | HTML | TailWind

# How To Install
**1.**  Download the files from my GitHub repository.

**2.**  Unzip the folder.

**3.**  Make sure you've installed Composer and PHP 8 in your PC.

**4.**  Open the folder in terminal and Run "Composer Update".

**5.**  Create the .env file and rename database

**6.**  Open terminal again and run "php artisan key:generate".

**7.**  Install Tailwind CSS

**8.**  npm install -D tailwindcss postcss autoprefixer

**9.**  Configure your template paths in your "tailwind.config.js" file

```
import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
            }
        },
        fontFamily: {
            'body': [
                'Inter',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ],
            'sans': [
                'Inter',
                'ui-sans-serif',
                'system-ui',
                '-apple-system',
                'system-ui',
                'Segoe UI',
                'Roboto',
                'Helvetica Neue',
                'Arial',
                'Noto Sans',
                'sans-serif',
                'Apple Color Emoji',
                'Segoe UI Emoji',
                'Segoe UI Symbol',
                'Noto Color Emoji'
            ]
        }
    },

    plugins: [forms],
};
```

**10.**  Open Xampp or Wamp to import the database file called "autostore.sql" with the name of database you renamed in .env file

**11.**  From your terminal run the command below "npm run dev" to load the Tailwind CSS

**12.**  Open another terminal on your project folder again and run the command "php artisan serve" to start the project

**13.**  To access the admin panel type your url project for example "http://127.0.0.1:8000/admin/login"

**--**  CREDENTIALS

```
/* Credentials For The Admin

 E-mail: admin@gmail.com
 Passowrd: Kevi1234 
 
*/

```

````
 /* Credentials For The User

 E-mail: kevi@gmail.com
 Passowrd: Kevi1234
 
*/
````
