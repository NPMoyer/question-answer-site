## About This Project

The goal is to build a very, very simple Q&A website. A visitor should be able to ask questions and leave answers without any authentication. How you set up the routes and whatnot is up to you, but at the very least, the website should contain:

1. A page showing list of questions
2. A page to view one question, including its answers
3. Forms for submitting a question and an answer

## Getting Started

After cloning the project, copy the .env.example file to create the .env file. Modify the .env file and set the following values: 

```
DB_DATABASE=question_answer
DB_USERNAME='root user'
DB_PASSWORD='root password'
```

Run the follwing command to create and see the database:

```
php artisan db:create
php artisan migrate
php artisan db:seed
```

Navigate to the project folder and start the local server:

```
php artisan serve
```

Once the development server starts, navigate to it in the browser. 
