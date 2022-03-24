<?php


class Website
{
    const SITE_PATH = 'websites/' ;

    public function __construct( $site = 'iwindsor' )
    {
        if ( !isset($site) ) {
            $site = 'iwindsor' ;
        }

        $site = htmlentities($site) ;
        $full_path = __DIR__ . '/' . self::SITE_PATH . "$site/public/index.php" ;

        if ( !file_exists($full_path) ) {
            echo "$full_path does not seem to exist" ;
            exit ;
        }

        $this->full_path = $full_path ;
    }

    public function getIncludePath()
    {
        return $this->full_path ;
    }

}


?>
