document.addEventListener("DOMContentLoaded", function () {
    const tituloCabecalho = document.getElementById("dynamic-title");
    
    const pageTitle = document.title;
    
    tituloCabecalho.textContent = pageTitle;
});
