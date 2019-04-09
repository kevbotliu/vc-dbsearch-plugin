<?php
function vc_dbsearch_options_page_html() {
    // check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    ?>
    <div class="wrap">
      <h1><?php esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "vc_dbsearch_options"
        settings_fields( 'vc_dbsearch_options' );
        // output setting sections and their fields
        // (sections are registered for "vc_dbsearch", each field is registered to a specific section)
        do_settings_sections( 'vc_dbsearch' );
        // output save settings button
        submit_button( 'Save Settings' );
        ?>
      </form>
    </div>
    <?php
}