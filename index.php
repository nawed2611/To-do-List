<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&display=swap" rel="stylesheet">

    <title>To-Do List</title>
    
    <style>
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    }
    body{
    margin:2px 2px;
    min-height: 100vh;
    border:2px solid black;
    font-family: 'Bitter', serif;
    background: /* Rectangle 2 */

    position: absolute;
    width: 1440px;
    height: 1024px;
    left: 0px;
    top: calc(50% - 1024px/2);

    background: linear-gradient(180deg, rgba(227, 204, 245, 0.63) 0%, rgba(222, 197, 241, 0) 100%);
    }

    .navbar{
    padding: 12px 2px;
    border: 2px solid black;
    background: rgb(0, 0, 0);
    color: white;
    
    }

    main{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: 20px 2px;
    }

    .enter-task{
    display: flex;
    border:2px solid black;
    border-radius: 5px;
    align-items: center;
    justify-content: center;
    background: rgb(221, 220, 219);
    }

    .btn{
    border-radius: 2px;
    border: 1px solid black;
    margin: 1rem 2rem;
    padding: 2px 2px;
    }
    .btn:hover{
    background: blanchedalmond;
    }
    .navbar ul{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    list-style: none;
    padding: 2px 2px;
    }
    .navbar ul li{
    margin: 4px 2px;
    padding: 4px 2px;
    }
    .navbar ul li:hover{
    border: 1px solid white;
    }

    main h1,h3{
    margin: 15px 40px;
    padding: 11px 81px;
    }
    
    table{
    /* Rectangle 1 */
    min-height: 40vh;
    width: 60%;
    mix-blend-mode: darken;
    background: linear-gradient(180deg, rgb(240 172 237 / 44%) 0%, rgb(199 222 232 / 72%) 100%);
    backdrop-filter: blur(4px);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 46px;
    /* Note: backdrop-filter has minimal browser support */
    margin: 20px 2px;
    }
    th{
    margin:2px 2px;
    padding: 14px 2px;
    }
    tbody{
    
    margin: 2px 2px;
    }
    form{
    margin: 1rem 5rem;
    padding: 0rem 5rem;
    
    }
    input{
    margin: 2px 20px;
    padding: 5px 20px;
    }
    td{
    text-align: center;
    margin: 2px 2px;
    }
    </style>
    </head>
    <body>
    <div class="navbar">
        
        TO-DO
        <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Have a Query?</li>
        </ul>
    </div>

    <main>
        <h1>Welcome to To-Do</h1>
        <h3>We help you organise your day in the most efficient way.</h3>
    <div class="enter-task">
        <form action="index.php" method="POST">
            Task: <input type="text" placeholder="Enter Task here:)" name = "task">
        </form>
        <button class="btn">Add Task</button>
    </div>
    <table class = "display-tasks">
        <thead>
            <tr>
                <th>S. No.</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <td>1.</td>
            <td>
            <?php include 'form.php';?>
            </td>
            <td><a href="#">X</a></td>
        </tbody>
    </table>
    </main>
    <footer>
        Follow me: @nawed2611
    </footer>
    </body>

</html>