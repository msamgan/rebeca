<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div style="text-align: center; color: green;">
	<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>
</div>

