import $ from "../jquery.js";

const wpLogo = $(".wp-logo");
const wpParent = $(".wp-parent");

const evolutionLogo = $(".evolution-logo");
const evolutionParent = $(".evolution-parent");

const alLogo = $(".al-logo");
const alParent = $(".al-parent");

function moveElementUp(elementSelector, parentSelector) {
  if ($(window).width() <= 450) {
    $(elementSelector).prependTo(parentSelector);
  }
}

export {
    moveElementUp,
    wpLogo,
    wpParent,
    evolutionLogo,
    evolutionParent,
    alLogo,
    alParent
};
