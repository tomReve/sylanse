<!DOCTYPE html>

<!--[if lt IE 7]><html class="ie ie6 no-js" dir="ltr" lang="fr-FR"><![endif]-->
<!--[if IE 7]><html class="ie ie7 no-js" dir="ltr" lang="fr-FR"><![endif]-->
<!--[if IE 8]><html class="ie ie8 no-js" dir="ltr" lang="fr-FR"><![endif]-->
<!--[if IE 9]><html class="ie ie9 no-js" dir="ltr" lang="fr-FR"><![endif]-->
<!--[if gt IE 9]><html class="no-js" dir="ltr" lang="fr-FR"><![endif]-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>
            <?php if ( is_404() ) : ?>
                <?= "Page introuvable - " . get_bloginfo("name") ?>
            <?php elseif (is_search()) : ?>
                <?= "Résultat de recherche - ".get_bloginfo("name") ?>
            <?php else: ?>
                <?=  the_title() . " - " . get_bloginfo("name") ?>
            <?php endif; ?>
        </title>

        <?= wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?= do_action('sylanse_header'); ?>
