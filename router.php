<?php
if(isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'visi';
            Include (__DIR__.'/templates/'.activetemplate.'/pages/all-movie-pages.php' );
            break;
        case 'prideti';
            Include (__DIR__.'/templates/'.activetemplate.'/pages/add-movie-page.php' ) ;
            break;
        case 'valdymas';
            Include (__DIR__.'/templates/'.activetemplate.'/pages/add-genre-pages.php' );
            break;
        case 'Edit';
            Include (__DIR__.'/templates/'.activetemplate.'/pages/edit-movie-pages.php' );
            break;
        case 'delete';
            Include (__DIR__.'/templates/'.activetemplate.'/pages/delete-movie-pages.php' );
            break;
        case 'manage';
            Include (__DIR__.'/templates/'.activetemplate.'/pages/show-movie-pages.php' );
            break;
            case 'all';
                Include (__DIR__.'/templates/'.activetemplate.'/pages/main-page.php' );
                break;
    }
} else {
    Include (__DIR__.'/templates/'.activetemplate.'/pages/main-page.php' ) ;
}
?>
