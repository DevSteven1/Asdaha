<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>Roles</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-row">
	<?php
	define("Base", "../../includes/admin/menu/");
	define("Table", "../../includes/admin/searchBar/");
	include_once("../../includes/admin/table/Table.php");

	include Base . "Menu.php";
	?>
	<section class="h-full w-full flex flex-col">
		<?php
		include Table . "SearchBar.php";
		?>
		<div class=" w-full h-[100%] flex justify-center items-center p-10">
			<?php
				$content = file_get_contents("../../data/Rol.json");
				renderTable($content);
			?>
		</div>
	</section>
</body>
</html>