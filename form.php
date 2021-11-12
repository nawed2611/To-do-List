<?php
if(isset($_POST['task']))
{
    $task1 = $_POST['task'];

    echo "${task1}";
}
    else echo "invalid task";