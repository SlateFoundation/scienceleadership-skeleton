<?php
$GLOBALS['Session']->requireAccountLevel('Administrator');
?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Class</th>
        <th>Account Level</th>
        <th>Old Username</th>
        <th>New Username</th>
    </tr>
    <?php foreach (Emergence\People\User::getAllByWhere('Username IS NOT NULL AND Class IN ("Emergence\\\\People\\\\User", "Slate\\\People\\\\Student")') AS $User) {?>
        <?php
            $newUsername = $User->getUniqueUsername();

            if ($newUsername == $User->Username) {
                continue;
            }
        ?>
        <tr>
            <td><?=$User->ID?></td>
            <td><?=$User->Class?></td>
            <td><?=$User->AccountLevel?></td>
            <td><?=$User->Username?></td>
            <td><?=$newUsername?></td>
        </tr>
    <?php } ?>
</table>