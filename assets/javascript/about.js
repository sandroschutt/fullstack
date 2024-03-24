import $ from "./jquery.js";

$(".info p a").css({ color: "white" });

$(document).ready(() => {
    const engCvURI = `${window.location.protocol}//${window.location.host}/wp-content/uploads/2023/10/Sanddro_Schutt_Jr_2023-1.png`;
    const downloadLink = $('#downloadLink');
    downloadLink.css({'color':'white','text-decoration':'none'})
    downloadLink.attr('download', 'cv')
    downloadLink.attr('href', engCvURI)
})
