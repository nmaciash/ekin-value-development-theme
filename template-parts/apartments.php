<?php
/**
 * Template part for displaying a single apartment card.
 * /template-parts/apartments.php
 */

// BEGIN Variables - Declarar aquí para que estén disponibles en este scope
$reference = get_field('reference');

$get_price = get_field('price');
$price = ''; // Inicializar por si no hay valor
if ($get_price) { // Comprobar si $get_price tiene un valor antes de usarlo
    if (fmod((float)$get_price, 1) == 0.0) {
        $price = number_format((float)$get_price, 0, ',', '.');
    } else {
        $price = number_format((float)$get_price, 2, ',', '.');
    }
}

$rooms = get_field('rooms');
$bedrooms = get_field('bedrooms');
$beds = get_field('beds');
$baths = get_field('baths');
$built = get_field('built');
$terrace = get_field('terrace');
$plot = get_field('plot');
$location = get_field('location');
$pool = get_field('pool');
$garden = get_field('garden');
$garage = get_field('garage');

$get_ibi = get_field('ibi');
$ibi = ''; // Inicializar por si no hay valor
if ($get_ibi) { // Comprobar si $get_ibi tiene un valor
    if (fmod((float)$get_ibi, 1) == 0.0) {
        $ibi = number_format((float)$get_ibi, 0, ',', '.');
    } else {
        $ibi = number_format((float)$get_ibi, 2, ',', '.');
    }
}

$community = get_field('community');
$garbage = get_field('garbage');
// END Variables
?>

<a href="<?php the_permalink(); ?>">
    <li class="propertie-card">
        <?php if (has_post_thumbnail()): ?>
            <div class="relative aspect-[4/3] bg-center bg-no-repeat">
                <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover aspect-[4/3] rounded-2xl']); ?>
            </div>
        <?php endif; ?>

        <div class="propertie_content">
            <div class="row justify-content-space-between">
                <div class="col-8 text-start">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="col-4 text-end">
                    <?php if ($reference): ?>
                        <p><?php echo esc_html($reference); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-left">
                    <?php if ($price): // Usar la variable $price procesada ?>
                        <p class="price-tag-format"><?php echo $price; ?> €</p> <?php // Añadí el símbolo de € como ejemplo ?>
                    <?php endif; ?>
                    </div>
            </div>


            
            <div class="row details">
                <div class="col-3 content-detail first__column">
                    <span>Baños:</span>
                    <?php if ($baths): ?>
                        <p><?php echo esc_html($baths); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-3 content-detail second__column">
                    <span>Dormitorios:</span>
                    <?php if ($bedrooms): ?>
                        <p><?php echo esc_html($bedrooms); ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-3 content-detail third__column">
                    <span>Parcela:</span>
                    <?php if ($plot): ?>
                        <p><?php echo esc_html($plot); ?><span class="normal__weight"> m<sup>2</sup></span></p>
                    <?php endif; ?>
                </div>
                <div class="col-3 content-detail fourth__column">
                    <span>Interior:</span>
                    <?php if ($built): ?>
                        <p><?php echo esc_html($built); ?><span class="normal__weight"> m<sup>2</sup></span></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </li>
</a>