import $ from "../jquery.js";

$(document).ready(function () {
  const excerpts = $(".wp-block-post-excerpt__excerpt");
  countLetters(excerpts);
});

function countLetters(text) {
  const ogText = $.map(text, (t) => {
      t.innerText = t.innerText.slice(0, 125) + '...';
  })
}
