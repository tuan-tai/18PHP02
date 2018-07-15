<?php
if ( !empty($titles) ) {
?>
    <ol>
        <?php
        foreach ($titles as $title) {
            echo "<li>" . $title['title'] . "</li>";
        }
        ?>
    </ol>
<?php

} else if ( !empty($details) ) {
?>
    <ol>
        <?php
        foreach ($details as $detail) {
            echo "<li>
                    <h2>" . $detail['title'] . "</h2>
                    <p>" . $detail['details'] .  "
                </li>";
        }
        ?>
    </ol>
<?php
}
?>
