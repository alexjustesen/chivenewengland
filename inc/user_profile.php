<?php

add_action( 'show_user_profile', 'chivenewengland_edit_profile_fields' );
add_action( 'edit_user_profile', 'chivenewengland_edit_profile_fields' );

function chivenewengland_edit_profile_fields( $user ) { ?>

	<h3>Additional Profile Information</h3>

	<table class="form-table">
       
        <tr>
			<th><label for="chapter">Chapter Name</label></th>

			<td>
				<input type="text" name="chapter" id="chapter" value="<?php echo esc_attr( get_the_author_meta( 'chapter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Chapter name.</span>
			</td>
		</tr>
		
		<tr>
			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username.</span>
			</td>
		</tr>

	</table>
<?php } // end

add_action( 'personal_options_update', 'chivenewengland_save_profile_fields' );
add_action( 'edit_user_profile_update', 'chivenewengland_save_profile_fields' );

function chivenewengland_save_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
    update_usermeta( $user_id, 'chapter', $_POST['chapter'] );
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
}