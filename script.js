var owl = $('.owl-carousel');

owl.owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,              
    autoplayTimeout: 4000,       
    autoplayHoverPause: true,    
    navText: [
      "<div class='my-prev'><</div>",
      "<div class='my-next'>></div>"
    ],
    responsive:{
        0:{ items:1 },
        600:{ items:3 },
        1000:{ items:3 }
    }
});

owl.on('changed.owl.carousel', function(event) {

    let index = event.item.index - 1;  
    let total = event.item.count;

    if (index < 1) index = total;
    if (index > total) index = 1;

    $("#currSlide").text(index);
});



