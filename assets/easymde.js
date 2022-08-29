import EasyMDE from "easymde";
import '../node_modules/easymde/dist/easymde.min.css';
import './easymde.css';

export default () => {
    function buildToolbar(list) {
        let tools = [];

        list.split(',').forEach(element => {
            tools.push(element.trim());
        });

        return tools;
    }

    let editors = [];
    document.querySelectorAll('.easymde').forEach((easymde, index) => {
        editors[index] = new EasyMDE({
            element: easymde,
            toolbar: buildToolbar(easymde.dataset.toolbar),
            spellChecker: false,
        });

        editors[index].codemirror.on("blur", () => {
            easymde.value = editors[index].value();
        });
    });
}