<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div style="text-align: center; color: red;">
	<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>
</div>
