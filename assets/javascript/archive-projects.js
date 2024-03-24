import $ from './jquery.js';
import './actions/sliceArchiveExcerpt.js';

$(document).ready(() => {
    const projects = $('li.type-projects')

    $.map(projects, (p) => {
        let projectButton = document.createElement('button')
        let buttonLink = p.children[1].children[0].attributes[0].value

        projectButton.innerText = "View"
        projectButton.setAttribute('class', 'project-button')
        projectButton.addEventListener('click', () => {
            window.location.href = buttonLink
        })
        p.appendChild(projectButton)
    })
})