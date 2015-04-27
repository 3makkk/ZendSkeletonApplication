<?php
/**
 * SlmLocale Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = array(
    /**
     * Default locale
     *
     * Some good description here. Default is something
     *
     * Accepted is something else
     */
    'default' => 'de',

    /**
     * Supported locales
     *
     * Some good description here. Default is something
     *
     * Accepted is something else
     */
    'supported' => array('de', 'en'),

    /**
     * Strategies
     *
     * Some good description here. Default is something
     *
     * Accepted is something else
     */
    'strategies' => array(
        array(
            'name'     => 'uripath',
            'priority' => 1,
        ),

        array(
            'name'     => 'acceptlanguage',
            'priority' => 0.5
        )
    )

    /**
     * End of SlmLocale configuration
     */
);

/**
 * You do not need to edit below this line
 */
return array(
    'slm_locale' => $settings
);
