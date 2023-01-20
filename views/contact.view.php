<?php

    require_once('assets/header.php');
    
?>

    <h1>Contact Us</h1>

    <ul>
        <?php foreach ( $contacts as $contact ): ?>
            <li>

                <?= $contact->first_name . ' ' . $contact->last_name . ' | ' . $contact->phonenr . ' | ' . $contact->gmail; ?>

            </li>
        <?php endforeach;  ?>
    </ul>

<?php

    require_once('assets/footer.php');

?>