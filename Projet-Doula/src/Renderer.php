<?php
/* class traitant le rendu html de la page en fonction du contenu dynamique et du template */

class Renderer {
    
    /**
     * La fonction render() permet d'afficher un template avec le header et le footer qui l'accompagnent.
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
     * La fonction whow() permet d'afficher un template avec le header et le footer qui l'accompagnent.
     *
     * @param string $template Le chemin vers le fichier .phtml sans l'extension
     * @param array $variables Le tableau associatif contenant les variables utilisées dans le template PHTML
     * @return void
     */
     
    public static function subRender(string $template, array $variables =[])
    {
        extract($variables);

        ob_start();
        
        require("src/templates/partials/sub/$template.phtml");
        $pageContent = ob_get_clean();

        require('src/templates/layout.phtml');

    }
    
        /**
     * La fonction showAdmin() permet d'afficher un template Admin avec le header et le footer qui l'accompagnent.
     *
     * @param string $template Le chemin vers le fichier .phtml sans l'extension
     * @param array $variables Le tableau associatif contenant les variables utilisées dans le template PHTML
     * @return void
     */
    public static function showAdmin(string $template, array $variables = [])
    {
        extract($variables);
        
        ob_start();
        
        require("src/templates/partials/admin/$template.phtml");
        $pageContent = ob_get_clean();
        
        require('src/templates/layoutAdmin.phtml');

    }
    
            /**
     * La fonction showAdmin() permet d'afficher un template Admin avec le header et le footer qui l'accompagnent.
     *
     * @param string $template Le chemin vers le fichier .phtml sans l'extension
     * @param array $variables Le tableau associatif contenant les variables utilisées dans le template PHTML
     * @return void
     */
    public static function showSubAdmin(string $template, array $variables = [])
    {
        extract($variables);
        
        ob_start();
        
        require("src/templates/partials/admin/subAdmin/$template.phtml");
        $pageContent = ob_get_clean();
        
        require('src/templates/layoutAdmin.phtml');

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