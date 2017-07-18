<?php
/*
 *	Made by ArisC
 *  https://github.com/Ar1sC
 *  https://twitter.com/Ar1cC
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-dev
 *
 *  License: MIT
 *
 *  Greek Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Παρακαλώ Πιστοποιήστε την αυθεντικότητα',

	// Sidebar
	'admin_cp' => 'AdminCP',
	'administration' => 'Διαχείριση',
	'overview' => 'Επισκόπηση',
	'core' => 'Πυρήνας',
	'minecraft' => 'Minecraft',
	'modules' => 'Modules',
	'security' => 'Ασφάλεια',
	'styles' => 'Styles',
	'users_and_groups' => 'Χρήστες και Ομάδες',

	// Overview
	'running_nameless_version' => 'Τρέχουσα NamelessMC έκδοση <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Τρέχουσα PHP έκδοση <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Στατιστικά',
    'notices' => 'Notices',
    'no_notices' => 'No notices.',
    'email_errors_logged' => 'Email errors have been logged. Click <a href="{x}">here</a> to view.', // Don't replace "{x}"

	// Core
	'settings' => 'Ρυθμίσης',
	'general_settings' => 'Γενικές Ρυθμίσεις',
	'sitename' => 'Ονομα ιστοσελίδας',
	'default_language' => 'Προεπιλεγμένη γλώσσα',
	'default_language_help' => 'Οι χρήστες θα έχουν τη δυνατότητα να επιλέξουν από τις εγκατεστημένες γλώσσες.',
	'installed_languages' => 'Κάθε νέα γλώσσα έχει εγκατασταθεί με επιτυχία.',
	'default_timezone' => 'Προεπιλεγμένη ζώνη ώρας',
	'registration' => 'Εγγραφή',
	'enable_registration' => 'Ενεργοποίηση εγγραφής?',
	'verify_with_mcassoc' => 'Verify user accounts με MCAssoc?',
	'email_verification' => 'Ενεργοποίηση επαλήθευσης ηλεκτρονικού ταχυδρομείου?',
	'homepage_type' => 'Αρχική Σελίδα τύπος',
	'post_formatting_type' => 'Αλληλογραφία μορφοποίηση τύπος',
	'portal' => 'Πύλη',
	'missing_sitename' => 'Παρακαλώ εισάγετε ένα όνομα ιστοσελίδα μήκους μεταξύ 2 έως 64 χαρακτήρων.',
	'use_friendly_urls' => 'Φιλικό URLs',
	'use_friendly_urls_help' => 'ΣΗΜΑΝΤΙΚΟ: Ο διακομιστής σας πρέπει να ρυθμιστεί ώστε να επιτρεπεί την χρήση mod_rewrite και αρχεία .htaccess για να λειτουργήσει.',
	'config_not_writable' => 'Το <strong>core/config.php</strong> αρχείο δεν είναι εγγράψιμο. Παρακαλώ ελέγξτε τις άδειες του αρχείου.',
	'social_media' => 'Social Media',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Use Twitter dark theme?',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'successfully_updated' => 'Επιτυχής ενημέρωση',
    'debugging_and_maintenance' => 'Debugging and Maintenance',
    'enable_debug_mode' => 'Enable debug mode?',
    'force_https' => 'Force https?',
    'force_https_help' => 'If enabled, all requests to your website will be redirected to https. You must have a valid SSL certificate active for this to work correctly.',
    'contact_email_address' => 'Contact Email Address',
    'emails' => 'Emails',
    'email_errors' => 'Email Errors',
    'registration_email' => 'Registration Email',
    'contact_email' => 'Contact Email',
    'forgot_password_email' => 'Forgot Password Email',
    'unknown' => 'Unknown',
    'delete_email_error' => 'Delete error',
    'confirm_email_error_deletion' => 'Are you sure you want to delete this error?',
    'viewing_email_error' => 'Viewing error',
    'unable_to_write_email_config' => 'Unable to write to file <strong>core/email.php</core>. Please check file permissions.',
    'enable_mailer' => 'Enable PHPMailer?',
    'enable_mailer_help' => 'Enable this if emails aren\'t being sent by default. The use of PHPMailer requires you to have a service capable of sending emails, such as Gmail or an SMTP provider.',
    'outgoing_email' => 'Outgoing Email Address',
    'outgoing_email_info' => 'This is the email address which NamelessMC will use to send emails from.',
    'mailer_settings_info' => 'The following fields are required if you have enabled PHPMailer. For more information on how to fill out these fields, check out <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">the wiki</a>.',
    'host' => 'Host',
    'email_port' => 'Port',
    'email_password_hidden' => 'The password is not shown for security reasons.',
    'send_test_email' => 'Send Test Email',
    'send_test_email_info' => 'The following button will attempt to send an email to your email address, <strong>{x}</strong>. Any errors thrown whilst sending the email will be displayed.', // Don't replace {x}
    'send' => 'Send',
    'test_email_error' => 'Test email error:',
    'test_email_success' => 'Test email sent successfully!',
    'terms_error' => 'Please ensure your terms and conditions are no longer than 2048 characters.',
    'terms_updated' => 'Terms updated successfully.',
    'avatars' => 'Avatars',
    'allow_custom_avatars' => 'Allow custom user avatars?',
    'default_avatar' => 'Default avatar',
    'custom_avatar' => 'Custom avatar',
    'minecraft_avatar' => 'Minecraft avatar',
    'minecraft_avatar_source' => 'Minecraft avatar source',
    'built_in_avatars' => 'Built-in avatar service',
    'minecraft_avatar_perspective' => 'Minecraft avatar perspective',
    'face' => 'Face',
    'head' => 'Head',
    'select_default_avatar' => 'Select a new default avatar:',
    'no_avatars_available' => 'No avatars available. Please upload a new image above first.',
    'avatar_settings_updated_successfully' => 'Avatar settings updated successfully.',

	// Reactions
	'icon' => 'Icon',
	'type' => 'Τύπος',
	'positive' => 'Θετικός',
	'neutral' => 'Ουδέτερος',
	'negative' => 'Αρνητικός',
	'editing_reaction' => 'Επεξεργασία Αντίδρασης',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> New Reaction',
	'creating_reaction' => 'Δημιουργία Αντίδρασης',

	// Custom profile fields
	'custom_fields' => 'Προσαρμοσμένα Πεδία προφίλ',
	'new_field' => '<i class="fa fa-plus-circle"></i> New Field',
	'required' => 'Απαιτείται',
	'public' => 'Δημόσιο',
	'text' => 'Κείμενο',
	'textarea' => 'Περιοχή κειμένου',
	'date' => 'Ημερομηνία',
	'creating_profile_field' => 'Δημιουργία προφίλ Πεδίο',
  	'editing_profile_field' => 'Επεξεργασία Προφίλ πεδίο',
	'field_name' => 'Ονομα πεδίου',
	'profile_field_required_help' => 'Τα υποχρεωτικά πεδία πρέπει να συμπληρωθούν από το χρήστη, και θα εμφανίζονται κατά την εγγραφή.',
	'profile_field_public_help' => 'Δημόσια πεδία θα εμφανίζονται σε όλους τους χρήστες, αν αυτό είναι απενεργοποιημένο μόνο οι διαμεσολαβητές να δουν τις τιμές.',
	'profile_field_error' => 'Εισάγετε ένα όνομα πεδίου μήκους μεταξύ 2 εώς 16 χαρακτήρες.',
	'description' => 'Description',
	'display_field_on_forum' => 'Θέλω να δείξω το πεδίο στο φόρουμ?',
	'profile_field_forum_help' => 'Αν είναι ενεργοποιημένο, το πεδίο θα εμφανιστεί από το χρήστη δίπλα στης δημοσιεύσεις.',

	// Minecraft
	'enable_minecraft_integration' => 'Enable Minecraft integration?',
    'mc_service_status' => 'Minecraft Service Status',
    'service_query_error' => 'Unable to retrieve service status.',
    'authme_integration' => 'AuthMe Integration',
    'authme_integration_info' => 'When AuthMe integration is enabled, users can only register ingame.',
    'enable_authme' => 'Enable AuthMe integration?',
    'authme_db_address' => 'AuthMe Database Address',
    'authme_db_port' => 'AuthMe Database Port',
    'authme_db_name' => 'AuthMe Database Name',
    'authme_db_user' => 'AuthMe Database Username',
    'authme_db_password' => 'AuthMe Database Password',
    'authme_hash_algorithm' => 'AuthMe Hashing Algorithm',
    'authme_db_table' => 'AuthMe User Table',
    'enter_authme_db_details' => 'Please enter valid database details.',
    'authme_password_sync' => 'Synchronise AuthMe password?',
    'authme_password_sync_help' => 'If enabled, whenever a user\'s password is updated ingame, the password will also be updated on the website.',
    'minecraft_servers' => 'Minecraft Servers',
    'account_verification' => 'Minecraft Account Verification',
    'server_banners' => 'Server Banners',
    'query_errors' => 'Query Errors',
    'add_server' => '<i class="fa fa-plus-circle"></i> Add Server',
    'no_servers_defined' => 'No servers have been defined yet',
    'query_settings' => 'Query Settings',
    'default_server' => 'Default Server',
    'no_default_server' => 'No default server',
    'external_query' => 'Use external query?',
    'external_query_help' => 'If the default server query does not work, enable this option.',
    'adding_server' => 'Adding Server',
    'server_name' => 'Server Name',
    'server_address' => 'Server Address',
    'server_address_help' => 'This is the IP address or domain used to connect to your server, without the port.',
    'server_port' => 'Server Port',
    'parent_server' => 'Parent Server',
    'parent_server_help' => 'A parent server is typically the Bungee instance the server is connected to, if any.',
    'no_parent_server' => 'No parent server',
    'bungee_instance' => 'BungeeCord Instance?',
    'bungee_instance_help' => 'Select this option if the server is a BungeeCord instance.',
    'server_query_information' => 'In order to display a list of online players on your website, your server <strong>must</strong> have the \'enable-query\' option enabled in your server\'s <strong>server.properties</strong> file',
    'enable_status_query' => 'Enable status query?',
    'status_query_help' => 'If this is enabled, the status page will show this server as being online or offline.',
    'enable_player_list' => 'Enable player list?',
    'pre_1.7' => 'Minecraft version older than 1.7?',
    'player_list_help' => 'If this is enabled, the status page will display a list of online players.',
    'server_query_port' => 'Server Query Port',
    'server_query_port_help' => 'This is the query.port option in your server\'s server.properties file, provided the enable-query option in the same file is set to true.',
    'server_name_required' => 'Please enter the server name',
    'server_name_minimum' => 'Please ensure your server name is a minimum of 1 character',
    'server_name_maximum' => 'Please ensure your server name is a maximum of 20 characters',
    'server_address_required' => 'Please enter the server address',
    'server_address_minimum' => 'Please ensure your server address is a minimum of 1 character',
    'server_address_maximum' => 'Please ensure your server address is a maximum of 64 characters',
    'server_port_required' => 'Please enter the server port',
    'server_port_minimum' => 'Please ensure your server port is a minimum of 2 characters',
    'server_port_maximum' => 'Please ensure your server port is a maximum of 5 characters',
    'server_parent_required' => 'Please select a parent server',
    'query_port_maximum' => 'Please ensure your query port is a maximum of 5 characters',
    'server_created' => 'Server created successfully.',
    'confirm_delete_server' => 'Are you sure you want to delete this server?',
    'server_updated' => 'Server updated successfully.',
    'editing_server' => 'Editing Server',
    'server_deleted' => 'Server deleted successfully',
    'unable_to_delete_server' => 'Unable to delete server.',
    'leave_port_empty_for_srv' => 'You can the port empty if it is 25565, or if your domain uses an SRV record',
    'viewing_query_error' => 'Viewing Query Error',
    'confirm_query_error_deletion' => 'Are you sure you want to delete this query error?',
    'no_query_errors' => 'No query errors logged.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> New Banner',
    'purge_errors' => 'Purge Errors',
    'confirm_purge_errors' => 'Are you sure you want to purge all errors?',
    'mcassoc_help' => 'mcassoc is an external service which can be used to verify users own the Minecraft account they have registered with. To use this feature, you will need to sign up for a shared key <a href="https://mcassoc.lukegb.com/" target="_blank">here</a>.',
    'mcassoc_key' => 'mcassoc Shared Key',
    'mcassoc_instance' => 'mcassoc Instance Key',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Click to generate an instance key</a>',
    'mcassoc_error' => 'Please ensure you that have entered your shared key correctly, and that you have generated an instance key correctly.',
    'updated_mcassoc_successfully' => 'mcassoc settings updated successfully.',
    'force_premium_accounts' => 'Force premium Minecraft accounts?',
    'banner_background' => 'Banner background',

	// Modules
	'modules_installed_successfully' => 'Any new modules have been installed successfully.',
	'enabled' => 'Ενεργοποιήθηκε',
	'disabled' => 'Απενεργοποιήθηκε',
	'enable' => 'Ενεργοποιώ',
	'disable' => 'Απενεργοποιώ',
	'module_enabled' => 'Το τμήμα Ενεργοποιήθηκε.',
	'module_disabled' => 'Τμήμα Απενεργοποιήθηκε.',
	'author' => 'Author:',

	// Styles
	'templates' => 'Templates',
	'template_outdated' => 'We have detected that your template is intended for Nameless version {x}, but you are running Nameless version {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Ενεργός',
	'deactivate' => 'Απενεργοποίηση',
	'activate' => 'Ενεργοποιώ',
	'warning_editing_default_template' => 'Προειδοποίηση! Συνιστάται να μην επεξεργαστείτε το προεπιλεγμένο template.',
	'images' => 'Eικόνες',
	'upload_new_image' => 'Μεταφόρτωση Νέας Εικόνας',
	'reset_background' => 'Επαναφορά Background',
	'install' => '<i class="fa fa-plus-circle"></i> Εγκαταστασή',
	'template_updated' => 'Template ενημερώθηκε με επιτυχία.',
	'default' => 'Προκαθορισμένο',
	'make_default' => 'Κάντε Προεπιλογή',
	'default_template_set' => 'Προεπιλεγμένο template οριστεί σε {x} επιτυχώς.', // Don't replace {x}
	'template_deactivated' => 'Template απενεργοποιήθηκε.',
	'template_activated' => 'Template ενεργοποιήθηκε.',
	'permissions' => 'Άδειες',
	'setting_perms_for_x' => 'Setting permissions for template {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Any new templates have been installed successfully.',

	// Users & groups
	'users' => 'Χρήστες',
	'groups' => 'Ομάδες',
	'group' => 'Ομάδα',
	'new_user' => '<i class="fa fa-plus-circle"></i> Νέος Χρήστης',
	'creating_new_user' => 'Δημιουργία νέου χρήστη',
	'registered' => 'Εγγεγραμμένος',
	'user_created' => 'Ο Χρήστης δημιουργήθηκε με επιτυχία.',
	'cant_delete_root_user' => 'Can\'t delete the root user!',
	'cant_modify_root_user' => 'Can\'t modify the root user\'s group!',
	'user_deleted' => 'Ο Χρήστης διαγράφηκε με επιτυχία.',
	'confirm_user_deletion' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε το χρήστη <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Επικύρωση Χρήστη',
	'update_uuid' => 'Ενήμερωση UUID',
	'update_mc_name' => 'Ενήμερωση Minecraft Username',
	'reset_password' => 'Επαναφέρετε τον κωδικό πρόσβασης',
	'punish_user' => 'Τιμωρία χρήστη',
	'delete_user' => 'Διαγραφή χρήστη',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Αλλες ενέργειες',
	'disable_avatar' => 'Απενεργοποίηση Avatar',
	'select_user_group' => 'You must select a user\'s group.',
	'uuid_max_32' => 'The UUID must be a maximum of 32 characters.',
	'title_max_64' => 'The user title must be a maximum of 64 characters.',
	'minecraft_uuid' => 'Minecraft UUID',
	'group_id' => 'Group ID',
	'name' => 'Όνομα',
	'title' => 'Τίτλος Xρήστη',
	'new_group' => '<i class="fa fa-plus-circle"></i> Νέα Ομάδα',
	'group_name_required' => 'Εισάγετε ένα όνομα ομάδας.',
	'group_name_minimum' => 'Βεβαιωθείτε ότι το όνομα της ομάδας σας είναι τουλάχιστον 2 χαρακτήρες.',
	'group_name_maximum' => 'Βεβαιωθείτε ότι το όνομα της ομάδας σας είναι το μέγιστο μήκος 20 χαρακτήρων.',
	'creating_group' => 'Creating new group',
	'group_html_maximum' => 'Please ensure your group HTML is no longer than 1024 characters long.',
	'group_html' => 'Group HTML',
	'group_html_lg' => 'Group HTML Large',
	'group_username_colour' => 'Group Username Color',
	'group_staff' => 'Is the group a staff group?',
	'group_modcp' => 'Μπορεί η ομάδα να δεί το ModCP?',
	'group_admincp' => 'Μπορεί η ομάδα να δεί το AdminCP?',
	'delete_group' => 'Διαγραφή ομάδας',
	'confirm_group_deletion' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε την ομάδα {x}?', // Don't replace {x}
	'group_not_exist' => 'Αυτή η ομάδα δεν υπάρχει.',

	// General Admin language
	'task_successful' => 'Task successful.',
	'invalid_action' => 'Μη έγκυρη ενέργεια.',
	'enable_night_mode' => 'Ενεργοποιήστε τη λειτουργία νύχτας',
	'disable_night_mode' => 'Απενεργοποιήστε τη λειτουργία νύχτας',
	'view_site' => 'Προβολή ιστότοπου',
	'signed_in_as_x' => 'Signed in as {x}', // Don't replace {x}
    'warning' => 'Προειδοποίηση',

    // Maintenance
    'maintenance_mode' => 'Λειτουργία Συντήρησης',
    'maintenance_enabled' => 'Λειτουργία συντήρησης είναι ενεργοποιημένη.',
    'enable_maintenance_mode' => 'Ενεργοποίηση λειτουργίας συντήρησης?',
    'maintenance_mode_message' => 'Μήνυμα λειτουργία συντήρησης',
    'maintenance_message_max_1024' => 'Βεβαιωθείτε οτι το μήνυμα συντήρηση σας είναι το μέγιστο 1024 χαρακτήρες.',

	// Security
	'acp_logins' => 'AdminCP Logins',
	'please_select_logs' => 'Επιλέξτε τα αρχεία καταγραφής για να δείτε',
	'ip_address' => 'Διεύθυνση IP',
	'template_changes' => 'Template Αλλαγές',
	'file_changed' => 'Το αρχείο άλλαξε',

	// Updates
	'update' => 'Ενημέρωση',
	'current_version_x' => 'Τρέχουσα Έκδοση: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Καινούργια Έκδοση: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Υπάρχει μια νέα διαθέσιμη ενημέρωση',
	'up_to_date' => 'Your   NamelessMC installation is up to date!',
	'urgent' => 'Αυτή η ενήμερωση είναι μια επείγουσα ενημέρωση',
	'changelog' => 'Αλλαγές',
	'update_check_error' => 'Παρουσιάστικε σφάλμα ενώ γινόταν ο έλεγχος ενημέρωσης:',
	'instructions' => 'Οδηγίες',
	'download' => 'Λήψη',
	'install' => 'Εγκατάσταση',
	'install_confirm' => 'Παρακαλούμε βεβαιωθείτε ότι έχετε κατεβάσει το πακέτο και να έχετε ανεβάσει τα αρχεία πρώτα!',

	// File uploads
	'drag_files_here' => 'Σύρετε αρχεία εδώ για μεταφόρτωση.',
	'invalid_file_type' => 'Μη έγκυρος τύπος αρχείου!',
	'file_too_big' => 'Πολύ μεγάλο αρχείο! Το αρχείο σας ήταν {{filesize}} και το όριο είναι {{maxFilesize}}' // Don't replace {{filesize}} or {{maxFilesize}}
);
