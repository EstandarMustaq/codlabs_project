<?php
function searchInPage($page, $searchTerm) {
    $pageContent = file_get_contents($page);
    return strpos($pageContent, $searchTerm) !== false;
}

//verifica se o formulario foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];

    // lista de caminhos das paginas a serem pesquisadas
    $paginas = array(
        "../../snippets/home.html",
        "../../snippets/contact.html",
        "../../snippets/portfolio.html",
        "../../snippets/courses.html",
        "../../snippets/about.html"
    );

    $result = "The string '{$searchTerm}' was not found on the pages."

    foreach ($paginas as $pagina) {
        // veerifica se a string de pesquisa existe na pagina
        if (searchInPage($pagina, $searchTerm)) {
            $result = "The string '{$searchTerm}' it was found on the page '{$pagina}'."
            break;
        }
    }

    // redireciona para outra pagina apos o processamento
    header("Location: search_result.php?result=" . urlencode($result));
    exit();
}
?>