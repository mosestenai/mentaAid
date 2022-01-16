const menuIcon = document.querySelector
  (".hamburger-menu");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", () => {
  navbar.classList.toggle("change");
});

$(window).scroll(function () {
  $('.about').each(function (i) {
    var bottom_of_object = $(this).position().top + $(this).outerHeight();
    var bottom_of_window = $(window).scrollTop() + $(window).height();

    if (bottom_of_window > bottom_of_object) {
      $(this).animate({
        'opacity': '1'
      }, 500);
    }
  });
});