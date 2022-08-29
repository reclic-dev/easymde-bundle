document.addEventListener("DOMContentLoaded", () => {
    let easymdeElements = document.querySelectorAll('.easymde');
    if (easymdeElements.length > 0) {
        import(/* webpackChunkName: "easymde" */ './easymde').then(module => {
            module.default();
        });
    }

});