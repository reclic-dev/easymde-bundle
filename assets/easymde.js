import EasyMDE from "easymde";
import '../node_modules/easymde/dist/easymde.min.css';

export default () => {
    let editors = [];
    document.querySelectorAll('.easymde').forEach((easymde, index) => {
        editors[index] = new EasyMDE({
            element: easymde,
            toolbar: ["bold", "italic", "|", "heading", "|", "unordered-list"],
            spellChecker: false
        });

        editors[index].codemirror.on("blur", () => {
            easymde.value = editors[index].value();
        });
    });
}