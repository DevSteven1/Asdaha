<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php
        for ($i=0; $i<9; $i++) { 
            echo(`<div class='swiper-slide'>$i</div>`);
        }
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
    loop:true,
    pagination: {
            el: ".swiper-pagination",  
        },
    });
</script>