<?php
require('../views/adminNav.php');
?>

<div class="container-fluid text-center">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <p class="h2">Lista zadań przypisanych</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID ZADANIA</th>
                    <th scope="col">TYTUŁ</th>
                    <th scope="col">PRACOWNIK ODPOWIEDZIALNY</th>
                    <th scope="col">DEADLINE</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td>Stwórz aplikację</td>
                    <td>Andrzej Duduś</td>
                    <td>1999-09-12</td>
                    <td>W TRAKCIE REALIZACJI</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require("../views/footer.php");
?>