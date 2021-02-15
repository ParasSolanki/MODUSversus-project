const burgerIcon = document.querySelector(".burger");
const menu = document.querySelector(".menu-list");
burgerIcon.addEventListener("click", function () {
  if (burgerIcon.classList.contains("cross")) {
    burgerIcon.classList.remove("cross");
    menu.classList.remove("show");
  } else {
    burgerIcon.classList.add("cross");
    menu.classList.add("show");
  }
});

jQuery(document).ready(function () {
  let carousel = jQuery(".image-water-slider").waterwheelCarousel({
    flankingItems: 3,
  });

  jQuery(".image-wheel-slider").waterwheelCarousel({
    startingItem: 1, // item to place in the center of the carousel. Set to 0 for auto
    separation: 350, // distance between items in carousel
    separationMultiplier: 1.2, // multipled by separation distance to increase/decrease distance for each additional item
    horizonOffset: 0, // offset each item from the "horizon" by this amount (causes arching)
    horizonOffsetMultiplier: 1, // multipled by horizon offset to increase/decrease offset for each additional item
    sizeMultiplier: 0.7, // determines how drastically the size of each item changes
    opacityMultiplier: 0.8, // determines how drastically the opacity of each item changes
    horizon: 0, // how "far in" the horizontal/vertical horizon should be set from the container wall. 0 for auto
    flankingItems: 2, // the number of items visible on either side of the center

    // animation
    speed: 500, // speed in milliseconds it will take to rotate from one to the next
    animationEasing: "linear", // the easing effect to use when animating
    quickerForFurther: true, // set to true to make animations faster when clicking an item that is far away from the center
    edgeFadeEnabled: false, // when true, items fade off into nothingness when reaching the edge. false to have them move behind the center image

    // misc
    linkHandling: 2, // 1 to disable all (used for facebox), 2 to disable all but center (to link images out)
    autoPlay: 0, // indicate the speed in milliseconds to wait before autorotating. 0 to turn off. Can be negative
    orientation: "horizontal", // indicate if the carousel should be 'horizontal' or 'vertical'
    activeClassName: "carousel-center", // the name of the class given to the current item in the center
    keyboardNav: false, // set to true to move the carousel with the arrow keys
    keyboardNavOverride: true, // set to true to override the normal functionality of the arrow keys (prevents scrolling)
    imageNav: true, // clicking a non-center image will rotate that image to the center

    // preloader
    preloadImages: true, // disable/enable the image preloader.
    forcedImageWidth: 0, // specify width of all images; otherwise the carousel tries to calculate it
    forcedImageHeight: 0, // specify height of all images; otherwise the carousel tries to calculate it

    // callback functions
    // movingToCenter: $.noop, // fired when an item is about to move to the center position
    // movedToCenter: $.noop, // fired when an item has finished moving to the center
    // clickedCenter: $.noop, // fired when the center item has been clicked
    // movingFromCenter: $.noop, // fired when an item is about to leave the center position
    // movedFromCenter: $.noop, // fired when an item has finished moving from the center
  });
});
