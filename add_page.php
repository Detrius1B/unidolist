<?php
$title = 'TODO List';
require 'header.php';
?>
<body>
<form action="add.php" class="got_form" method="post">
    <h1 align="center"><?= $title ?>></h1>
    <div class="form-group">
        <input type="text" name="task" class="form-control" placeholder="What to do?" required>
    </div>
    <button name="sendTask" class="btn btn-dark btn-lg btn-primary btn-block" type="submit">ADD</button>

</form>


</body>
</html>