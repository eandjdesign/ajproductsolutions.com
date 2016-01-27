$(document).ready(function() {
  $('.accordion').on('click', '.section-headline', function() {
    var $this = $(this),
        parentSlide = $this.closest('.accordion-slide'),
        allSlides = parentSlide.siblings().addBack(),
        dataToggle = parentSlide.data('toggle');

    allSlides.attr('data-toggle', 'slide-closed');
    parentSlide.attr('data-toggle', 'slide-open');
  });

  $('.main-header').on('click', '.nav-icon', function() {
    var $this = $(this);

    $this.parent().toggleClass('nav-opened');

    console.log($this.next().height() + 20);
  });
});
