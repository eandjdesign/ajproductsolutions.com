$(document).ready(function() {
  $('.accordion').on('click', '.section-headline', function(){
    var $this = $(this),
        parentSlide = $this.closest('.accordion-slide'),
        allSlides = parentSlide.siblings().addBack(),
        dataToggle = parentSlide.data('toggle');

    allSlides.attr('data-toggle', 'slide-closed');
    parentSlide.attr('data-toggle', 'slide-open');
  });
});
