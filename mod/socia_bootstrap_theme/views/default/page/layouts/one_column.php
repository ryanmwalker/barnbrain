<?php
/**
 * Twitter&reg; Bootstrap 4.1 Theme for Elgg
 *
 * Converts all Elgg css elements to Twitter&reg; Bootstrap elements.  Helps 
 * Designers create beautiful Bootstrap themes for Elgg.
 *
 * @category   Elgg Themes
 * @author     Shane Barron <admin@socia.us>
 * @copyright  2018 SocialApparatus / ElggDesign
 * @version    1.0
 * @link       http://socia.us
 */
$class = '';
if (isset($vars['class'])) {
    $class = "$class {$vars['class']}";
}
?>
<div class="<?php echo $class; ?>">
    <?php
    echo elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

    echo elgg_view('page/layouts/elements/header', $vars);

    echo $vars['content'];

// @deprecated 1.8
    if (isset($vars['area1'])) {
        echo $vars['area1'];
    }

    echo elgg_view('page/layouts/elements/footer', $vars);
    ?>
</div>