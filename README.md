<h1> CRUD React Blog Site</h1>

This is a simple blog-like site where one can view, create, edit, and delete blog posts. The site is built using React and JavaScript for the front-end and PHP for the API was built using PHP and SQL for the database.

<h2> API Endpoints</h2>

-   Base URL: http://localhost/react-blog/api/index.php

| HTTP Method | Endpoint                  | Description                      |
| ----------- | ------------------------- | -------------------------------- |
| GET         | /posts                    | Get all blog posts               |
| GET         | /post?post_id={id}        | Get a specific blog post by ID   |
| POST        | /add_post                 | Create a new blog post           |
| PUT         | /edit_post?post_id={id}   | Edit an existing blog post by ID |
| DELETE      | /delete_post?post_id={id} | Delete a blog post by ID         |

<h2> Request and Response Formats</h2>

<b> Create a new post </b>

Request:

```json
{
    "title": "Add post title here",
    "content": "Add post content here",
    "post_date": "2022-01-01",
    "post_time": "08:00:00"
}
```

Response:

```json
{
    "message": "Record created successfully"
}
```

<b> Edit an existing post </b>

Request:

```json
{
    "post_id": 1,
    "title": "Add post title here",
    "content": "Add post content here",
    "post_date": "2022-01-01",
    "post_time": "08:00:00"
}
```

Response:

```json
{
    "message": "Record created successfully"
}
```

<h2> How to use the API</h2>

1. Clone the react_blog project repository into your web server's document root directory.
    - For Ubuntu: **/opt/lampp/htdocs/**
    - For Windows: **C:\xampp\htdocs\\**
    - For macOS: **/Applications/XAMPP/xamppfiles/htdocs/**
2. Navigate to the database folder in the cloned project directory and locate the database file. You have the option of using either the blog.csv or blog.sql file, depending on your preference.
3. Import the chosen database file into your MySQL database server.
4. Check that your Apache server and MySQL database are started.
5. You can now start using the API by sending requests to the above endpoints.
