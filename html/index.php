<!DOCTYPE html>
<html>
<head>
    <title>My Docker Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
        }
        h1 {
            font-size: 32px;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Docker Website!</h1>
    </header>
    <main>
        <h2>About</h2>
        <p>This is a simple website running in a Docker container.</p>

        <h2>Database Connection</h2>
        <?php
        try {
            $db = new PDO('mysql:host=dockercoaching-mysql-1;dbname=mydatabase', 'myuser', 'mypassword');
            echo "Connection successful!";
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage();
        }
        ?>
    </main>
</body>
</html>
