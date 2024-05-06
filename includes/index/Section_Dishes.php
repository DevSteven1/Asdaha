<section class="bg-black text-white h-80 mt-2 px-5 pb-1 flex flex-col items-center">
	<h1 class="text-white text-4xl py-2">Platos</h1>
	<article class="grid grid-cols-3 gap-10 w-[100%] h-[100%]">
		<?php
			for($i = 0;$i<3 ;$i++){
				include "Section_Dishes_Card.php";
			}
		?>
	</article>
</section>
