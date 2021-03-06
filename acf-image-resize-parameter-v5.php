<?php

class acf_field_image_resize_parameter extends acf_field {
	
	
	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		/*
		*  name (string) Single word, no spaces. Underscores allowed
		*/
		
		$this->name = 'image_resize_parameter';
		
		
		/*
		*  label (string) Multiple words, can include spaces, visible when selecting a field type
		*/
		
		$this->label = __('Image Resize Parameter', 'acf-image_resize_parameter');
		
		
		/*
		*  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
		*/
		
		$this->category = 'basic';
		
		
		/*
		*  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		*/
		
		$this->defaults = array(
			'resize_image'			=> 1,
			'crop_mode'				=> 0,
			'default_image'			=> 1,
			'display_default_image'	=> 1,
			'display_resize_image'	=> 1,
			'width'					=> '',
			'height'				=> '',
			'mobile_width'			=> '',
			'mobile_height'			=> '',
		);
		
		
		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('image_resize_parameter', 'error');
		*/
		
		$this->l10n = array(
			'error'	=> __('Error! Please enter a higher value', 'acf-image_resize_parameter'),
		);
		
				
		// do not delete!
    	parent::__construct();
    	
	}
	
	
	/*
	*  render_field_settings()
	*
	*  Create extra settings for your field. These are visible when editing a field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field_settings( $field ) {
		
		/*
		*  acf_render_field_setting
		*
		*  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
		*  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
		*
		*  More than one setting can be added by copy/paste the above code.
		*  Please note that you must also have a matching $defaults value for the field name (font_size)
		*/


		acf_render_field_setting( $field, array(
            'label'         => __('Display "Resize Image"','acf-image-resize-parameter'),
			'instructions'	=> __('Display "Resize Image" to user.','acf-image_resize_parameter'),
            'type'          => 'radio',
            'name'          => 'display_resize_image',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-image-resize-parameter'),
                0 => __('No', 'acf-image-resize-parameter'),
            )
        ));
		
		acf_render_field_setting( $field, array(
            'label'         => __('Resize Image','acf-image-resize-parameter'),
			'instructions'	=> __('Enable/Disable Resize function.','acf-image_resize_parameter'),
            'type'          => 'radio',
            'name'          => 'resize_image',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-image-resize-parameter'),
                0 => __('No', 'acf-image-resize-parameter'),
            )
        ));

		acf_render_field_setting( $field, array(
            'label'         => __('Crop Mode','acf-image-resize-parameter'),
			'instructions'	=> __('Enable/Disable Crop Mode. Note: if crop mode disable, height value was ignored.','acf-image_resize_parameter'),
            'type'          => 'radio',
            'name'          => 'crop_mode',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-image-resize-parameter'),
                0 => __('No', 'acf-image-resize-parameter'),
            )
        ));

		acf_render_field_setting( $field, array(
			'label'			=> __('Width','acf-image_resize_parameter'),
			'instructions'	=> __('Note: in retina device this value scale up X2.','acf-image_resize_parameter'),
			'type'			=> 'number',
			'name'			=> 'width',
			'append'		=> 'px',
		));

		acf_render_field_setting( $field, array(
			'label'			=> __('Height','acf-image_resize_parameter'),
			'instructions'	=> __('Note: in retina device this value scale up X2.','acf-image_resize_parameter'),
			'type'			=> 'number',
			'name'			=> 'height',
			'append'		=> 'px',
		));


		acf_render_field_setting( $field, array(
			'label'			=> __('Mobile Width','acf-image_resize_parameter'),
			'instructions'	=> __('Note: in retina device this value scale up X2.','acf-image_resize_parameter'),
			'type'			=> 'number',
			'name'			=> 'mobile_width',
			'append'		=> 'px',
		));


		acf_render_field_setting( $field, array(
			'label'			=> __('Mobile Height','acf-image_resize_parameter'),
			'instructions'	=> __('Note: in retina device this value scale up X2.','acf-image_resize_parameter'),
			'type'			=> 'number',
			'name'			=> 'mobile_height',
			'append'		=> 'px',
		));

		acf_render_field_setting( $field, array(
            'label'         => __('Display "Show Default Image"','acf-image-resize-parameter'),
			'instructions'	=> __('Display "Show Default Image" to user.','acf-image_resize_parameter'),
            'type'          => 'radio',
            'name'          => 'display_default_image',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-image-resize-parameter'),
                0 => __('No', 'acf-image-resize-parameter'),
            )
        ));

		acf_render_field_setting( $field, array(
            'label'         => __('Show Default Image','acf-image-resize-parameter'),
			'instructions'	=> __('Show default image when source image doesn\'t exist.','acf-image_resize_parameter'),
            'type'          => 'radio',
            'name'          => 'default_image',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-image-resize-parameter'),
                0 => __('No', 'acf-image-resize-parameter'),
            )
        ));


	}
	
	
	
	/*
	*  render_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field (array) the $field being rendered
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field( $field ) {
		

		  // add empty value (allows '' to be selected)
        if( empty($field['value']) ){

            $field['value']['resize_image'] 	= $field['resize_image'];
            $field['value']['crop_mode'] 		= $field['crop_mode'];
            $field['value']['default_image'] 	= $field['default_image'];
            $field['value']['crop_mode'] 		= $field['crop_mode'];
            $field['value']['height']        	= $field['height'];
            $field['value']['width']          	= $field['width'];
            $field['value']['mobile_height']    = $field['mobile_height'];
            $field['value']['mobile_width']    	= $field['mobile_width'];

        }
		
		/*
		*  Review the data of $field.
		*  This will show what data is available
		*/

		$field_value = $field['value'];
		
		// echo '<pre>';
		// 	var_dump( $field['value']);
		// echo '</pre>';
		
		
		/*
		*  Create a simple text input using the 'font_size' setting.
		*/


		if ($field['display_resize_image']) {
			echo '<label class="" for="' . $field['key'] . '">' . __("Resize Image", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="">
										<input type="radio" name="' . $field['name'] . '[resize_image]"'; if ($field_value['resize_image']) { echo 'checked';}  echo ' value="1">' . __("Yes", "acf-image-resize-parameter") . '<br>
										<input type="radio" name="' . $field['name'] . '[resize_image]"'; if (!$field_value['resize_image']) { echo 'checked';} echo ' value="0">' . __("No", "acf-image-resize-parameter") . '
						</div>
					</div>';
		}


		echo '<label class="" for="' . $field['key'] . '">' . __("Crop Mode", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="">
										<input type="radio" name="' . $field['name'] . '[crop_mode]"'; if ($field_value['crop_mode']) { echo 'checked';}  echo ' value="1">' . __("Yes", "acf-image-resize-parameter") . '<br>
										<input type="radio" name="' . $field['name'] . '[crop_mode]"'; if (!$field_value['crop_mode']) { echo 'checked';} echo ' value="0">' . __("No", "acf-image-resize-parameter") . '
						</div>
					</div>';


		echo '<label class="" for="' . $field['key'] . '">' . __("Width", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="acf-input-append">px</div>
						<div class="acf-input-wrap">
							<input type="number" name="' . $field['name'] . '[width]" id="' . $field['key'] . '-width" step="1" value="' . $field_value['width'] . '" min="1" max="" step="any" placeholder="">
						</div>
					</div>';


		echo '<label class="" for="' . $field['key'] . '">' . __("Height", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="acf-input-append">px</div>
						<div class="acf-input-wrap">
							<input type="number" name="' . $field['name'] . '[height]" id="' . $field['key'] . '-height" step="1" value="' . $field_value['height'] . '" min="1" max="" step="any" placeholder="">
						</div>
					</div>';


		echo '<label class="" for="' . $field['key'] . '">' . __("Mobile Width", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="acf-input-append">px</div>
						<div class="acf-input-wrap">
							<input type="number" name="' . $field['name'] . '[mobile_width]" id="' . $field['key'] . '-mobile-width"  step="1" value="' . $field_value['mobile_width'] . '" min="1" max="" step="any" placeholder="">
						</div>
					</div>';


		echo '<label class="" for="' . $field['key'] . '">' . __("Mobile Height", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="acf-input-append">px</div>
						<div class="acf-input-wrap">
							<input type="number" name="' . $field['name'] . '[mobile_height]" id="' . $field['key'] . '-mobile-height" step="1" value="' . $field_value['mobile_height'] . '" min="1" max="" step="any" placeholder="">
						</div>
					</div>';


		if ($field_value['default_image']) {
			$set1 = 'checked';
			$set2 = '';
		} else {
			$set1 = '';
			$set2 = 'checked';
		}
		


		if ($field['display_default_image']) {
			echo '<label class="" for="' . $field['key'] . '">' . __("Show Default Image", "acf-image-resize-parameter") . '</label>';
				echo '
					<div class="">
						<div class="">
										<input type="radio" name="' . $field['name'] . '[default_image]" ' . $set1 . ' value="1">' . __("Yes", "acf-image-resize-parameter") . '<br>
										<input type="radio" name="' . $field['name'] . '[default_image]" ' . $set2 . ' value="0">' . __("No", "acf-image-resize-parameter") . '
						</div>
					</div>';
		} else {
			echo '<input type="hidden" name="' . $field['name'] . '[default_image]"  value="' . $field['default_image'] . '">' ;
		}
		


	}
	
		
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add CSS + JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function input_admin_enqueue_scripts() {
		
		$dir = plugin_dir_url( __FILE__ );
		
		
		// register & include JS
		wp_register_script( 'acf-input-image_resize_parameter', "{$dir}js/input.js" );
		wp_enqueue_script('acf-input-image_resize_parameter');
		
		
		// register & include CSS
		wp_register_style( 'acf-input-image_resize_parameter', "{$dir}css/input.css" ); 
		wp_enqueue_style('acf-input-image_resize_parameter');
		
		
	}
	
	*/
	
	
	/*
	*  input_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is created.
	*  Use this action to add CSS and JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_head)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
		
	function input_admin_head() {
	
		
		
	}
	
	*/
	
	
	/*
   	*  input_form_data()
   	*
   	*  This function is called once on the 'input' page between the head and footer
   	*  There are 2 situations where ACF did not load during the 'acf/input_admin_enqueue_scripts' and 
   	*  'acf/input_admin_head' actions because ACF did not know it was going to be used. These situations are
   	*  seen on comments / user edit forms on the front end. This function will always be called, and includes
   	*  $args that related to the current screen such as $args['post_id']
   	*
   	*  @type	function
   	*  @date	6/03/2014
   	*  @since	5.0.0
   	*
   	*  @param	$args (array)
   	*  @return	n/a
   	*/
   	
   	/*
   	
   	function input_form_data( $args ) {
	   	
		
	
   	}
   	
   	*/
	
	
	/*
	*  input_admin_footer()
	*
	*  This action is called in the admin_footer action on the edit screen where your field is created.
	*  Use this action to add CSS and JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_footer)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
		
	function input_admin_footer() {
	
		
		
	}
	
	*/
	
	
	/*
	*  field_group_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is edited.
	*  Use this action to add CSS + JavaScript to assist your render_field_options() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function field_group_admin_enqueue_scripts() {
		
	}
	
	*/

	
	/*
	*  field_group_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is edited.
	*  Use this action to add CSS and JavaScript to assist your render_field_options() action.
	*
	*  @type	action (admin_head)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function field_group_admin_head() {
	
	}
	
	*/


	/*
	*  load_value()
	*
	*  This filter is applied to the $value after it is loaded from the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	/*
	
	function load_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	*/
	
	
	/*
	*  update_value()
	*
	*  This filter is applied to the $value before it is saved in the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	
	
	function update_value( $value, $post_id, $field ) {

		if ($value['width'] == "") {
			$value['width'] = null;
		} else {
			$value['width'] = (int)$value['width'];
		}
		
		if ($value['height'] == "") {
			$value['height'] = null;
		} else {
			$value['height'] = (int)$value['height'];
		}
		
		if ($value['mobile_width'] == "") {
			$value['mobile_width'] = null;
		} else {
			$value['mobile_width'] = (int)$value['mobile_width'];
		}

		if ($value['mobile_height'] == "") {
			$value['mobile_height'] = null;
		} else {
			$value['mobile_height'] = (int)$value['mobile_height'];
		}
		
		
		return $value;
		
	}
	
	
	
	
	/*
	*  format_value()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value which was loaded from the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*
	*  @return	$value (mixed) the modified value
	*/
		
	/*
	
	function format_value( $value, $post_id, $field ) {
		
		// bail early if no value
		if( empty($value) ) {
		
			return $value;
			
		}
		
		
		// apply setting
		if( $field['font_size'] > 12 ) { 
			
			// format the value
			// $value = 'something';
		
		}
		
		
		// return
		return $value;
	}
	
	*/
	
	
	/*
	*  validate_value()
	*
	*  This filter is used to perform validation on the value prior to saving.
	*  All values are validated regardless of the field's required setting. This allows you to validate and return
	*  messages to the user if the value is not correct
	*
	*  @type	filter
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$valid (boolean) validation status based on the value and the field's required setting
	*  @param	$value (mixed) the $_POST value
	*  @param	$field (array) the field array holding all the field options
	*  @param	$input (string) the corresponding input name for $_POST value
	*  @return	$valid
	*/
	
	function validate_value( $valid, $value, $field, $input ){
		
	    if ($field['required']) {
	    
		    if (empty($value['height'])
		    	 || empty($value['width']) || empty($value['mobile_height']) || empty($value['mobile_width'])) {

		    	$txt = __('The value is empty!! : ','acf-image_resize_parameter');
		    	$set = 0;
		    
				if( empty($value['height'])){
		    		$txt .= __('height, ','acf-image_resize_parameter');
		    		$set = 1;
		    	}
				if( empty($value['width'])){
		    		$txt .= __('width, ','acf-image_resize_parameter');
		    		$set = 1;
		    	}
				if( empty($value['mobile_height'])){
		    		$txt .= __('mobile height, ','acf-image_resize_parameter');
		    		$set = 1;
		    	}
				if( empty($value['mobile_width'])){
		    		$txt .= __('mobile width, ','acf-image_resize_parameter');
		    		$set = 1;
		    	}

		   		if($set){
		    		$valid = $txt;
		    	}
		    }
		}

	    return $valid;
		
	}
	
	
	
	
	/*
	*  delete_value()
	*
	*  This action is fired after a value has been deleted from the db.
	*  Please note that saving a blank value is treated as an update, not a delete
	*
	*  @type	action
	*  @date	6/03/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (mixed) the $post_id from which the value was deleted
	*  @param	$key (string) the $meta_key which the value was deleted
	*  @return	n/a
	*/
	
	/*
	
	function delete_value( $post_id, $key ) {
		
		
		
	}
	
	*/
	
	
	/*
	*  load_field()
	*
	*  This filter is applied to the $field after it is loaded from the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0	
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	/*
	
	function load_field( $field ) {
		
		return $field;
		
	}	
	
	*/
	
	
	/*
	*  update_field()
	*
	*  This filter is applied to the $field before it is saved to the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	/*
	
	function update_field( $field ) {
		
		return $field;
		
	}	
	
	*/
	
	
	/*
	*  delete_field()
	*
	*  This action is fired after a field is deleted from the database
	*
	*  @type	action
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	n/a
	*/
	
	/*
	
	function delete_field( $field ) {
		
		
		
	}	
	
	*/
	
	
}


// create field
new acf_field_image_resize_parameter();

?>
