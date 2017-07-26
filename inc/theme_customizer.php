<?php
new theme_customizer();

class theme_customizer
{
    public function __construct()
    {
        add_action ('admin_menu', array(&$this, 'customizer_admin'));
        add_action( 'customize_register', array(&$this, 'customize_manager_client' ));
    }

    /**
     * Add the Customize link to the admin menu
     * @return void
     */
    public function customizer_admin() {
        add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
    }

    /**
     * Customizer manager demo
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function customize_manager_client( $wp_manager )
    {
        $this->demo_section( $wp_manager );
    }

    public function demo_section( $wp_manager )
    {
        $wp_manager->add_section( 'configuration_client_section', array(
            'title'          => 'Configuration client',
            'priority'       => 35,
        ) );

        // Textbox control
        $wp_manager->add_setting( 'nom_societe', array(
            'default'        => '',
        ) );

        $wp_manager->add_control( 'nom_societe', array(
            'label'   => 'Nom de la société ',
            'description' => 'Pour le champ adresse si on veut qu\'il soit différent du titre du site',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 1
        ) );
        $wp_manager->add_setting( 'nom_societe2', array(
            'default'        => '',
        ) );

        $wp_manager->add_control( 'nom_societe2', array(
            'label'   => 'Nom de la société ligne 2 ',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 2
        ) );
        $wp_manager->add_setting( 'accroche', array(
            'default'        => '',
        ) );

        $wp_manager->add_control( 'accroche', array(
            'label'   => 'Accroche',
            'section' => 'configuration_client_section',
            'type'    => 'textarea',
            'priority' => 2
        ) );
       
        $wp_manager->add_setting( 'adresse1_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'adresse1_societe', array(
            'label'   => 'Adresse 1',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 3
        ) );
       
        $wp_manager->add_setting( 'adresse2_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'adresse2_societe', array(
            'label'   => 'Adresse 2',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 4
        ) );
       
        $wp_manager->add_setting( 'cp_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'cp_societe', array(
            'label'   => 'Code postal',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 4
        ) );
       
        $wp_manager->add_setting( 'ville_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'ville_societe', array(
            'label'   => 'Ville',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 4
        ) );
       
        $wp_manager->add_setting( 'email_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'email_societe', array(
            'label'   => 'Adresse email',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 5
        ) );
        $wp_manager->add_setting( 'tel_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'tel_societe', array(
            'label'   => 'Téléphone',
            'description'   => 'Numéro de téléphone tel qu\'il doit être affiché (cf: +33 (0)2 40 00 00 00)',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 5
        ) );
        $wp_manager->add_setting( 'tel_url_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'tel_url_societe', array(
            'label'   => 'URL Téléphonique',
            'description'   => 'Numéro de téléphone sans espace ni parenthèse pour le lien téléphonique (cf: +33240000000)',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 5
        ) );
         
         
       
        $wp_manager->add_setting( 'fax_societe', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'fax_societe', array(
            'label'   => 'Fax',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 6
        ) );

        // WP_Customize_Image_Control
        //$wp_manager->add_setting( 'logo_societe', array(
        //    'default'        => '',
        //) );
        //
        //$wp_manager->add_control( new WP_Customize_Image_Control( $wp_manager, 'logo_societe', array(
        //    'label'   => 'Logo de la société',
        //    'description'   => 'Logo de la société',
        //    'section' => 'configuration_client_section',
        //    'settings'   => 'logo_societe',
        //    'priority' => 0
        //) ) );
       
        $wp_manager->add_setting( 'nom_agence', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'nom_agence', array(
            'label'   => 'Agence',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 8
        ) );
       
        $wp_manager->add_setting( 'url_agence', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'url_agence', array(
            'label'   => 'Site web Agence',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 9
        ) );
        // Checkbox control
        $wp_manager->add_setting( 'checkbox_rss', array(
            'default'        => '0',
        ) );
        
        $wp_manager->add_control( 'checkbox_rss', array(
            'label'   => 'Afficher bouton RSS',
            'section' => 'configuration_client_section',
            'type'    => 'checkbox',
            'priority' => 2
        ) );
        $wp_manager->add_setting( 'start_date', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'start_date', array(
            'label'   => 'Année de publication',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 10
        ) );
         
        $wp_manager->add_setting( 'tag_addthis', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'tag_addthis', array(
            'label'   => 'Identifiant addthis',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 10
        ) );
         
        $wp_manager->add_setting( 'tag_analytics', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'tag_analytics', array(
            'label'   => 'Code de suivi Google Analytics',
            'section' => 'configuration_client_section',
            'type'    => 'textarea',
            'priority' => 10
        ) );
         
        $wp_manager->add_setting( 'tag_manager', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'tag_manager', array(
            'label'   => 'Google tag manager',
            'section' => 'configuration_client_section',
            'type'    => 'textarea',
            'priority' => 11
        ) );
         
         
        $wp_manager->add_setting( 'tag_manager_noscript', array(
            'default'        => '',
        ) );

         $wp_manager->add_control( 'tag_manager_noscript', array(
            'label'   => 'Google tag manager no script',
            'section' => 'configuration_client_section',
            'type'    => 'textarea',
            'priority' => 11
        ) );
         
        $wp_manager->add_setting( 'cookie_message', array(
            'default'        => 'Ce site utilise des cookies pour vous offrir une meilleure navigation. En poursuivant votre visite, vous acceptez l\'utilisation de ces cookies.',
        ) );

         $wp_manager->add_control( 'cookie_message', array(
            'label'   => 'Cookie Message',
            'section' => 'configuration_client_section',
            'type'    => 'textarea',
            'priority' => 11
        ) );
        $wp_manager->add_setting( 'cookie_message_closeButton', array(
            'default'        => 'Ok !',
        ) );

         $wp_manager->add_control( 'cookie_message_closeButton', array(
            'label'   => 'Message pour le bouton de fermeture',
            'section' => 'configuration_client_section',
            'type'    => 'text',
            'priority' => 11
        ) );
         
        // Dropdown pages control
        $wp_manager->add_setting( 'page_legal', array(
            'default'        => '1',
        ) );
        
        $wp_manager->add_control( 'page_legal', array(
            'label'   => 'Page des mentions légales',
            'section' => 'configuration_client_section',
            'type'    => 'dropdown-pages',
            'priority' => 12
        ) );
        // Dropdown pages control
        $wp_manager->add_setting( 'page_contact', array(
            'default'        => '1',
        ) );
        
        $wp_manager->add_control( 'page_contact', array(
            'label'   => 'Page contact',
            'section' => 'configuration_client_section',
            'type'    => 'dropdown-pages',
            'priority' => 13
        ) );
        // Checkbox login 
        $wp_manager->add_setting( 'checkbox_login', array(
            'default'        => 0,
            'std'         => '0',
        ) );
        
        $wp_manager->add_control( 'checkbox_login', array(
            'label'   => 'Afficher login form',
            'section' => 'configuration_client_section',
            'type'    => 'checkbox',
            'priority' => 14
        ) );
         
        // Checkbox login lightbox
        $wp_manager->add_setting( 'checkbox_login_lightbox', array(
            'default'        => 0,
            'std'         => '0',
        ) );
        
        $wp_manager->add_control( 'checkbox_login_lightbox', array(
            'label'   => 'Afficher login form dans une lightbox/popup',
            'section' => 'configuration_client_section',
            'type'    => 'checkbox',
            'priority' => 15
        ) );
         
    

    }

}

?>
