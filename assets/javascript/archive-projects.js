/**
 * Add javascript to your Projects home.
 */

import $ from "./jquery.js";

$(document).ready(() => {
  const projectLinks = $("li.type-projects figure a");
  const projectButtons = $(".project-button");
  const linksList = Array();

  $.map(projectLinks, (link) => {
    linksList.push(link.href);
  });

  $.map(projectButtons, (button, index) => {
    button.addEventListener("click", () => {
      window.location.href = linksList[index];
    });
  });
});
