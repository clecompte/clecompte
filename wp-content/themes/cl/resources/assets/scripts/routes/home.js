export default {
  init() {
    // JavaScript to be fired on the home page

    // Equal heights for post titles
    var posts = $(".writings-content-posts");
    var postHeights = [];
    var postColors = ["#80FF72", "#FFF07C", "#EEC0C6", "#3E517A", "#7EE8FA", "#C287E8", "#E7E393", "#C0CAAD", "#DAEFB3", "#BCD8C1", "#D9F9A5", "#D8E1FF"];
    var windowWidth = 0;

    function clearHeights() {
      posts.find(".post-title").removeAttr("style");
      posts.find(".post-title").find("span").removeAttr("style");
    }

    function calcHeights() {

      posts.each(function() {

        // Random post title background color
        if (windowWidth > 768) {

          $(this).find(".post-title").each(function() {
            postHeights.push($(this).height() + 10);
            $(this).css({"background-color": postColors[Math.floor(Math.random() * postColors.length)], "position": "relative"});
          });

          var postHeight = Math.max(...postHeights);
          $(this).find(".post-title").css({"height": postHeight});
          $(this).find(".post-title").find("span").css({"position":"absolute"});
        } else {
          clearHeights();
        }

        postHeights = [];
      });
    }

    $(window).on("load resize", function() {
      windowWidth = $(window).width()
      clearHeights();
      calcHeights();
    });

    // Add a random hero background image
    var heroes = ['m_hero1','m_hero2','m_hero3','m_hero4'];
    var randomHero = Math.floor(Math.random() * heroes.length);

    $(".hero-content").addClass(heroes[randomHero]);
    $(".m_hero1 .hero-content-attribute").html("Crater Lake, Oregon");
    $(".m_hero2 .hero-content-attribute").html("Manassas National Battlefield, Virginia");
    $(".m_hero3 .hero-content-attribute").html("Sperryville, Virginia");
    $(".m_hero4 .hero-content-attribute").html("Kitty Hawk, North Carolina");

  },
  finalize() {

  },
};
