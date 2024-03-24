import $ from "../jquery.js";

$(document).ready(() => {
  const projectCards = Array(
    {
      selector: "[alt='katchau-card']",
      slug: "/projects/katchau",
    },
    {
      selector: "[alt='superdifusora-card']",
      slug: "/projects/radio-super-difusora",
    },
    {
      selector: "[alt='dorotech-card']",
      slug: "/projects/dorotech",
    },
    {
      selector: "[alt='21-driver-card']",
      slug: "/projects/21-driver",
    },
    {
      selector: "[alt='isalu-card']",
      slug: "/projects/isalu-store",
    },
    {
      selector: "[alt='re3-card']",
      slug: "/projects/r3e",
    },
    {
      selector: "[alt='sdf-card']",
      slug: "/projects/swim-drink-fish",
    },
    {
      selector: "[alt='educajogos-card']",
      slug: "/projects/educajogos",
    },
    {
      selector: "[alt='myops-card']",
      slug: "/projects/myops",
    }
  );

  try {
    addCardLink(projectCards);
  } catch (error) {
    console.log(error);
  }
});

function addCardLink(projectCards = Array) {
  projectCards.forEach((card) => {
    $(card.selector).on("click", () => {
      window.location.href = window.location.origin + card.slug;
    });
  });
}
