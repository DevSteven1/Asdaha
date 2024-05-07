<?php 
function renderTable($data) {
    $array = json_decode($data, true);
?>
    <div class="h-[38rem] bg-black w-full overflow-auto border-t-0">
        <table class="h-auto w-full bg-white">
            <thead class="border w-full border-black sticky top-0 h-14 bg-black text-white">
                <tr class="border border-black">
                    <?php foreach(array_keys($array[0]) as $clave) { ?>
                        <td class="uppercase"><?= $clave ?></td>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach($array as $usuario) { ?>
                    <tr class="h-12 border border-black" style="grid-row-end: span 1;">
                        <?php foreach($usuario as $valor) { ?>
                            <td><?= $valor ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php
}
?>
