import $ from "./jquery.js";

$(document).ready(async function () {
  const projectData = await getProjectData();
  createDataTags(projectData);
});

async function createDataTags(projectData) {
  $(".client-tag").text(projectData.acf.client);

  $(".project-type").append(
    `${projectData.acf.type.map(
      (t) => (t = ` ${t.charAt(0).toUpperCase() + t.slice(1)}`)
    )}`
  );

  const projectTechnologies = $(".project-technologies");
  getProjectTechnologies(projectTechnologies, projectData.acf.technologies);
}

async function getProjectData() {
  const url = `${window.location.protocol}//${window.location.host}/wp-json/wp/v2/projects`;

  const data = await fetch(url);
  let res = await data.json();

  res = res.find((project) => {
    return project.slug == getProjectTitle(project.slug);
  });

  return res;
}

async function getProjectTechnologies(
  container = HTMLElement,
  technologies = Array
) {
  technologies.map((tech) => {
    container.append(
      $(
        `<span style="background-color: lightblue;">${tech.toUpperCase()}</span>`
      )
    );
  });
}

function getProjectTitle(title = String) {
    return window.location.pathname.split("/").find(element => element == title);
}
