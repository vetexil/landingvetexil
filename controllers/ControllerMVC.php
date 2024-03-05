<?php

class ControllerMVC
{
    function __construct() {
        return $this;
    }

    public function getHeaders(){
        return require ('./partials/header.php');
    }

    public function getBody(){
        echo <<<HTML
            <body id="page-top">
HTML;
        $this->getNav();
        require ('./partials/body.php');
        echo <<<HTML
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <!-- * *                               SB Forms JS                               * *-->
                <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
                <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            </body>
        </html>
HTML;

    }

    public function getNav(){
        return require ('./partials/navigation.php');
    }

}
