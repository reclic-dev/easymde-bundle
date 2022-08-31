import EasyMDE from "easymde";
import '../node_modules/easymde/dist/easymde.min.css';
import './easymde.css';

let editors = [];

function buildToolbar(list) {
    let tools = [];

    list.split(',').forEach(element => {
        tools.push(element.trim());
    });

    return tools;
}

document.addEventListener('append', (e) => {
    editors[e.target.id] = new EasyMDE({
        element: e.target,
        toolbar: buildToolbar(e.target.dataset.toolbar),
        spellChecker: false,
    });

    editors[e.target.id].codemirror.on("blur", () => {
        e.target.value = editors[e.target.id].value();
    });
});