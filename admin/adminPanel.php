<?php
require('../views/adminNav.html');
?>

<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-1"></div>
    <div class="col-md-3 functionCards"><a href="./users.php" class="lead">Pracownicy</a></div>
    <div class="col-md-3 functionCards"><a href="./tasks.php" class="lead">Zadania</a></div>
    <div class="col-md-3 functionCards"><a href="" class="lead" disabled>Zarządzaj (disabled)</a></div>
    <div class="col-md-1"></div>
    <div class="col-md-1"></div>
    <div class="col-md-3 functionCards"><a href="" class="lead">Dodaj Pracownika</a></div>
    <div class="col-md-3 functionCards"><a href="" class="lead">Dodaj Zadanie</a></div>
    <div class="col-md-3 functionCards"><a href="#" class="lead disabled" disabled>Czat (niedługo dostępne)</a></div>
    </div>
</div>

<?php
require("../views/footer.html");
?>