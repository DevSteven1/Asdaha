<nav class="h-full w-72 bg-black flex flex-col p-4 space-y-5">
	<?php
		include_once "Button.php";
		$json = file_get_contents("../../data/Buttons.json");
		$data = json_decode($json, true);

		foreach ($data as $btn) {
			echo Button($btn["name"]);
		}
	?>
</nav>

