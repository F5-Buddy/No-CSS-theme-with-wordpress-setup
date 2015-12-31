<?php

// Plugin Name: Setting SociaL media options


class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_options_page(
            'Settings Admin', 
            'Social Media Management', 
            'manage_options', 
            'my-setting-admin', 
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'my_option_name' );
        ?>
        <div class="wrap">
            <h2>Social Media Management</h2>           
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'my_option_group' );   
                do_settings_sections( 'my-setting-admin' );
                submit_button(); 
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            'my_option_group', // Option group
            'my_option_name', // Option name
            array( $this, 'sanitize' ) // Sanitize
        ); 

        
        add_settings_section(
            'setting_section_id', // ID
            'My Custom Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'my-setting-admin' // Page
        );
        
        add_settings_field(
            'facebook', // ID
            'Facebook', // Title 
            array( $this, 'facebook_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section           
        );      

        add_settings_field(
            'twitter', 
            'Twitter', 
            array( $this, 'twitter_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );    

        add_settings_field(
            'linkedin', 
            'LinkedIn', 
            array( $this, 'linkedin_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        ); 
        
        add_settings_field(
            'google', // ID
            'Google', // Title 
            array( $this, 'google_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section           
        );      

        add_settings_field(
            'vimeo', 
            'Vimeo', 
            array( $this, 'vimeo_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );    

        add_settings_field(
            'instagram', 
            'Instagram', 
            array( $this, 'instagram_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        ); 
        
        add_settings_field(
            'pinterest', 
            'Pinterest', 
            array( $this, 'pinterest_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        ); 
        
        add_settings_field(
            'copyright', 
            'Copyright Text', 
            array( $this, 'copyright_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        ); 
        
        add_settings_field(
            'address', 
            'Address', 
            array( $this, 'address_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );
        
        add_settings_field(
            'telephone', 
            'Telephone', 
            array( $this, 'telephone_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );
        
        add_settings_field(
            'fax', 
            'Fax', 
            array( $this, 'fax_callback' ), 
            'my-setting-admin', 
            'setting_section_id'
        );
        
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['facebook'] ) )
            $new_input['facebook'] = sanitize_text_field( $input['facebook'] );

        if( isset( $input['twitter'] ) )
            $new_input['twitter'] = sanitize_text_field( $input['twitter'] );
            
        if( isset( $input['linkedin'] ) )
            $new_input['linkedin'] = sanitize_text_field( $input['linkedin'] );

        if( isset( $input['google'] ) )
            $new_input['google'] = sanitize_text_field( $input['google'] );

        if( isset( $input['vimeo'] ) )
            $new_input['vimeo'] = sanitize_text_field( $input['vimeo'] );
            
        if( isset( $input['instagram'] ) )
            $new_input['instagram'] = sanitize_text_field( $input['instagram'] );

        if( isset( $input['pinterest'] ) )
            $new_input['pinterest'] = sanitize_text_field( $input['pinterest'] ); 

        if( isset( $input['copyright'] ) )
            $new_input['copyright'] = sanitize_text_field( $input['copyright'] );     
            
        if( isset( $input['address'] ) )
            $new_input['address'] = sanitize_text_field( $input['address'] );

        if( isset( $input['telephone'] ) )
            $new_input['telephone'] = sanitize_text_field( $input['telephone'] ); 

        if( isset( $input['fax'] ) )
            $new_input['fax'] = sanitize_text_field( $input['fax'] );     

        return $new_input;
    }

    /** 
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Social media links:';
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function facebook_callback()
    {
        printf(
            '<input type="text" id="facebook" name="my_option_name[facebook]" value="%s" />',
            isset( $this->options['facebook'] ) ? esc_attr( $this->options['facebook']) : ''
        );
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function twitter_callback()
    {
        printf(
            '<input type="text" id="twitter" name="my_option_name[twitter]" value="%s" />',
            isset( $this->options['twitter'] ) ? esc_attr( $this->options['twitter']) : ''
        );
    }
    
	public function linkedin_callback()
    {
        printf(
            '<input type="text" id="linkedin" name="my_option_name[linkedin]" value="%s" />',
            isset( $this->options['linkedin'] ) ? esc_attr( $this->options['linkedin']) : ''
        );
    }
    
	public function google_callback()
    {
        printf(
            '<input type="text" id="google" name="my_option_name[google]" value="%s" />',
            isset( $this->options['google'] ) ? esc_attr( $this->options['google']) : ''
        );
    }

    /** 
     * Get the settings option array and print one of its values
     */
    public function vimeo_callback()
    {
        printf(
            '<input type="text" id="vimeo" name="my_option_name[vimeo]" value="%s" />',
            isset( $this->options['vimeo'] ) ? esc_attr( $this->options['vimeo']) : ''
        );
    }
    
	public function instagram_callback()
    {
        printf(
            '<input type="text" id="instagram" name="my_option_name[instagram]" value="%s" />',
            isset( $this->options['instagram'] ) ? esc_attr( $this->options['instagram']) : ''
        );
    }
    
	public function pinterest_callback()
    {
        printf(
            '<input type="text" id="pinterest" name="my_option_name[pinterest]" value="%s" />',
            isset( $this->options['pinterest'] ) ? esc_attr( $this->options['pinterest']) : ''
        );
    }
    
    //Copyright text
    
	public function copyright_callback()
    {
        printf(
            '<input type="text" id="copyright" name="my_option_name[copyright]" value="%s" />',
            isset( $this->options['copyright'] ) ? esc_attr( $this->options['copyright']) : ''
        );
    }
    
	public function address_callback()
    {
        printf(
            '<input type="text" id="address" name="my_option_name[address]" value="%s" />',
            isset( $this->options['address'] ) ? esc_attr( $this->options['address']) : ''
        );
    }
    
	public function telephone_callback()
    {
        printf(
            '<input type="text" id="telephone" name="my_option_name[telephone]" value="%s" />',
            isset( $this->options['telephone'] ) ? esc_attr( $this->options['telephone']) : ''
        );
    }
    
    //Copyright text
    
	public function fax_callback()
    {
        printf(
            '<input type="text" id="fax" name="my_option_name[fax]" value="%s" />',
            isset( $this->options['fax'] ) ? esc_attr( $this->options['fax']) : ''
        );
    }
    
}

if( is_admin() )
    $my_settings_page = new MySettingsPage();