<?php
/* @var users Users */
$counter = 1;
?>
<div class="row">
    <div class="col-lg-4">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Username</th>
                </tr>
            </thead>
            <?php
            foreach ($users as $user) { ?>
            <tr>
                <td><?= $counter; ?></td>
                <td><?= $user->username; ?></td>
            </tr>
            <?php
            $counter++;
            }
            ?>
        </table>
    </div>
</div>
<?php

