
<h1 align="left">DialogFlow CX Webhook Integration</h1>

## Description
Exploring the possiblities of connecting between DialogFlow and Laravel Botman through Webhooks to handle incoming requests and store it into the database. This contributes to the available resources of the new expression DialogFlow CX.

## Guide
1. Git clone this file.
2. Create a database in MySQL called ``dialogflow``.
3. Update DB properties in ``.env`` file
```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dialogflow
DB_USERNAME=root
DB_PASSWORD=
```

4. Using the command ``php artisan migrate`` to update the models and controllers in ``MySQL``.
5. Compile the project using ``php artisan serve``. 
6. Open Terminal and initialise ngork using command ``ngrok http 8000``.
7. Update the webhook link in DialogFlow CX.
