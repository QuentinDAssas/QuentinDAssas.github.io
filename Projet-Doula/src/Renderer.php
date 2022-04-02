<?php
/* class traitant le rendu html de la page en fonction du contenu dynamique et du template */

class Renderer {
    
    /**
     * La fonction show() permet d'afficher un template avec le header et le footer qui l'accompagnent.
     *
     * @param string $template Le chemin vers le fichier .phtml sans l'extension
     * @param array $variables Le tableau associatif contenant les variables utilisées dans le template PHTML
     * @return void
     */
     
    public static function render(string $template, array $variables =[])
    {
        extract($variables);

        ob_start();
        
        require("src/templates/partials/$template.phtml");
        $pageContent = ob_get_clean();

        require('src/templates/layout.phtml');

    }
    
    /**
     * La fonction showError() permet d'afficher une exception
     *
     * @param array $variables Le tableau associatif contenant les variables utilisées dans le template PHTML
     * @return void
     */
    public static function showError($template)
    {

        require("src/templates/partials/error.phtml");

    }
    
}