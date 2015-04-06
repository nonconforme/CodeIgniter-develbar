<img src="<?php echo $icon ?>"
     alt="Session"/> <?php echo lang('session') ?>
<?php if (count($session)): ?>
    <div class="detail config">
        <div class="scroll">
            <?php
            foreach ($session as $key => $val) {
                if (is_array($val) OR is_object($val)) {
                    $val = print_r($val, true);
                }
                echo '<p>';
                echo '<span class="left-col" style="width:60%">' . $key . ':</span>';
                echo '<span class="right-col" style="width:40%">' . htmlspecialchars($val) . '</span>';
                echo '</p>';
            }
            ?>
        </div>
    </div>
<?php endif ?>