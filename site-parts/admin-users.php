<?php

require_once './includes/db.inc.php';
require_once './includes/admin-users.inc.php';
?>
<table class="table table-hover table-dark defalt-container-style" style="overflow: auto;">
        <thead>
            <tr style="font-size: 10px">
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "./includes/orders.inc.php";
            require_once "./includes/db.inc.php";

            $results = getUsers($conn);
            if ($results) {
                while ($row = mysqli_fetch_assoc($results)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <p>
                                <?=$row["userId"] ?>
                            </p>
                        </th>
                        <td>
                            <p>
                                <?=$row["firstName"] . " " . $row["lastName"] ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?=$row["userEmail"]; ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?=$row["username"]; ?>
                            </p>
                        </td>
                        <td>
                            <?=$row["userGender"] ?>
                        </td>
                    </tr>
                    
                    <?php
                } 
            }
            ?>
        </tbody>
</table>

