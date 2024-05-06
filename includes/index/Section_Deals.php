<section class="bg-black mt-3 h-96 flex flex-col items-center px-5 py-3 gap-5">
	<h1 class="text-3xl text-white">PROMOCIONES</h1>
	<article class="grid grid-cols-2 h-[100%] w-[100%] gap-10">
	<?php
		for($i=0; $i<2; $i++){
			include "Section_Deals_Card.php";
		}
	?>	
	</article>
</section>
