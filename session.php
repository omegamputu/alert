<?php

class Session {
	public function __construct()
	{
		session_start();
	}

	public function setFlash($message, $type = 'error')
	{
		$_SESSION['flash'] = array(
			'message' => $message,
			'type' => $type
		);
	}

	public function flash()
	{
		if (isset($_SESSION['flash'])) {
			# code...
			?>
			<div id="alert" class="alert alert-<?= $_SESSION['flash']['type']; ?>" role="alert">
				<?php echo $_SESSION['flash']['message']; ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php
			unset($_SESSION['flash']);
		}
	}
}