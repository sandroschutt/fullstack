import $ from "../jquery.js";

$(document).ready(() => {
  try {
    $(".container").toggleClass("transparency-off");

    const button = document.querySelector(
      ".wp-block-navigation__responsive-container-open "
    );

    const buttonClose = document.querySelector(
      ".wp-block-navigation__responsive-container-close "
    );

    const hideOnTouch = document.querySelector(".hide-on-touch");
    const hideOnTouchTransparency = document.querySelector(
      ".hide-on-touch--transparency"
    );

    if (hideOnTouch != null || hideOnTouch != undefined) {
      button.addEventListener("touchstart", () => {
        hideOnTouch.style.display = "none";

        if (
          hideOnTouchTransparency != null ||
          hideOnTouchTransparency != undefined
        ) {
          hideOnTouchTransparency.style.opacity = "0";
        }

        $("footer").css({ display: "none" });
      });

      buttonClose.addEventListener("touchstart", () => {
        hideOnTouch.style.display = "block";

        if (
          hideOnTouchTransparency != null ||
          hideOnTouchTransparency != undefined
        ) {
          hideOnTouchTransparency.style.opacity = "1";
        }

        $("footer").css({ display: "flex" });
      });
    }
  } catch (error) {
    console.log(error);
  }
});
