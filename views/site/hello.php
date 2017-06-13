<?php
/* @var $firstName String */
/* @var $lastName String */
/* @var $age Integer */
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th colspan="2">Client Information:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>First Name:</td>
            <td><?= $firstName; ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><?= $lastName; ?></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><?= $age; ?></td>
        </tr>
    </tbody>
</table>