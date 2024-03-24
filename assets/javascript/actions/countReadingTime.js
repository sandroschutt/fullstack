import $ from "../jquery.js";

$(document).ready(() => {
  const readTime = calculateReadTime();
  $('.read-time').html(`<strong>Reading time:</strong> ${readTime}`)
});

function calculateReadTime() {
  const article = $(".post-content").text();
  var wordCount = countWords(article);

  var settings = $.extend({
    wordsPerMinute: 150, // Velocidade de leitura padrão em palavras por minuto
  });

  var readTime = wordCount / settings.wordsPerMinute;
  var minutes = Math.floor(readTime);
  var seconds = Math.round((readTime - minutes) * 60);

  var readTimeText = minutes + " min";
  if (seconds > 0) {
    readTimeText += " " + seconds + " seg";
  }

  return readTimeText;
}

function countWords(article) {
  var wordCount = article.split(/\s+/).length;

  return wordCount;
}

function escapeHtml(html) {
  var escapeMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#39;",
  };

  return html.replace(/[&<>"']/g, function (match) {
    return escapeMap[match];
  });
}
