<?php
/**
 * Forkel Grids
 *
 * @category    Forkel
 * @package     Forkel_Grids
 * @copyright   Copyright (c) 2015 Tobias Forkel (http://www.tobiasforkel.de)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

$model = Mage::getModel(Forkel_Grids_Helper_Data::MODEL_DEMO);

if ($model->getCollection()->count() == 0)
{

    $values = array(
        array(
            'name' => 'Lorem Ipsum',
            'description' => 'Ea per utinam philosophia, ei eum sint natum molestiae. Pro vocibus dissentiet voluptatibus ex, sit aperiri consetetur ex. Per legimus graecis ea, eu ius meis elaboraret. Ferri justo dicat qui ne, sed labores albucius necessitatibus at. Sed ut aeque omittam phaedrum. Vis id percipitur conclusionemque, his eu probo feugait neglegentur, his quodsi voluptatibus te.',
            'email' => 'lorem.ipsum@gmail.com',
        ),
        array(
            'name' => 'Natum Augue',
            'description' => 'Vis id percipitur conclusionemque, his eu probo feugait neglegentur, his quodsi voluptatibus te.',
            'email' => 'n.augue@gmail.com',
        ),
        array(
            'name' => 'Iriure ea pri',
            'description' => 'Probo ullum et per. Pro vocibus dissentiet voluptatibus ex, sit aperiri consetetur ex. Per legimus graecis ea, eu ius meis elaboraret. Ferri justo dicat qui ne, sed labores albucius necessitatibus at. Sed ut aeque omittam phaedrum. Vis id percipitur conclusionemque, his eu probo feugait neglegentur, his quodsi voluptatibus te.',
            'email' => 'iriure.ea@hotmail.com',
        ),
        array(
            'name' => 'Labitur Adipisci',
            'description' => 'Ea per utinam philosophia, ei eum sint natum molestiae. Veri alterum corpora sit ad, tempor epicurei has ut, vis mundi abhorreant disputando no. Euripidis adipiscing cu mei. Suas possim veritus in cum. Quo cu primis molestiae concludaturque. In dicta graeco usu, ei his nibh partem.',
            'email' => 'labitur.adipisci@yahoo.com',
        )
    );

    foreach($values as $value)
    {
        $model->setData($value)->save();
    }
}