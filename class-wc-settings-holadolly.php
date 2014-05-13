<?php

class WC_Settings_Hola_Dolly extends WC_Settings_Page {

	public function __construct() {
		$this->id    = 'hola-dolly';
		$this->label = __( 'Hola Dolly', 'hola-dolly' );

		// Añadir pestaña
		add_filter( 'woocommerce_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );

		// Mostrar los campos
		add_action( 'woocommerce_settings_' . $this->id, array( $this, 'output' ) );

		// Guardar los cambios
		add_action( 'woocommerce_settings_save_' . $this->id, array( $this, 'save' ) );

	}

	public function get_settings() {

		$settings = array(

			array( 'title' => __( 'Opciones Generales', 'hola-dolly' ), 'type' => 'title', 'id' => 'holadolly_general_options', 'desc' => __( 'Nuestras opciones generales.', 'hola-dolly' ) ),
			array(
				'title' 		=> __( 'Un número', 'hola-dolly' ),
				'id' 			=> 'holadolly_general_options_number',
				'default'		=> 0,
				'type' 			=> 'number',
				'desc_tip'		=> __( 'Pon un número por aquí', 'hola-dolly' )
			),
			array( 'type' => 'sectionend', 'id' => 'holadolly_general_options' ),

			array( 'title' => __( 'Opciones Especiales', 'hola-dolly' ), 'type' => 'title', 'id' => 'holadolly_special_options', 'desc' => __( 'Nuestras opciones especiales.', 'hola-dolly' ) ),
			array( 'type' => 'sectionend', 'id' => 'holadolly_special_options' ),


		);

		return apply_filters( 'holadolly_woocommerce_holadolly_settings', $settings );
	}

}

new WC_Settings_Hola_Dolly();
