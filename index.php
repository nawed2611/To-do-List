<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
    <div class="navbar">
        <div class="logo">
            
        </div>
    </div>
    <header>
        <h1>
        Welcome to To-Do
        </h1>
    </header>
    <div class="About">
        <h2>We help you to organise your day in the most efficient way</h2>
    </div>
    <div class="task_menu">
        <form action="index.php" method="get">
            Task: <input type="text" placeholder="Enter Task here" name = "task">
        </form>
        <button class="btn" name = "submit">Add Task</button>
    </div>
    <div class="display_tasks">
        <h3>Your Tasks: </h3>
    </div>
    
</body>
</html>