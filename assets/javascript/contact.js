import $ from "./jquery.js";

const inputs = $("label span input");
const textarea = $('label span textarea[name="your-message"]');
const inputPlaceholders = Array("Name:", "E-mail:", "Subject:");

$("label br").remove();
$(".contact-text").remove();

$.map(inputs, (input, index) => {
  input.setAttribute("placeholder", inputPlaceholders[index]);
});

textarea[0].setAttribute('placeholder', 'Message:');

