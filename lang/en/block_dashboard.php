<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * All the configurable strings used throughout the plugin.
 *
 * @package    block_dashboard
 * @copyright  2023 Onwards City University {@link https://www.city.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Delvon Forrester <delvon.forrester@esparanza.co.uk>
 */
$string['add_announcement_global_notice'] = 'This announcement will be displayed globally/site-wide!';
$string['add_notif_local_notice'] = 'This announcement will <em>only</em> be displayed on the page you\'re managing this block from!';
$string['dashboard'] = 'Culcourse dashboard';
$string['dashboard:addinstance'] = 'Add a new Culcourse dashboard block';
$string['dashboard:manageannouncements'] = 'Manage announcements and the relative settings';
$string['dashboard:manageownannouncements'] = 'Manage own announcements and the relative settings';
$string['dashboard:myaddinstance'] = 'Add a new Culcourse dashboard block to the my Moodle page';
$string['dashboard_add_done'] = 'Done!';
$string['dashboard_add_heading'] = 'New announcement';
$string['dashboard_add_option_announcement'] = 'Announcement';
$string['dashboard_add_option_danger'] = 'Danger';
$string['dashboard_add_option_info'] = 'Information';
$string['dashboard_add_option_success'] = 'Success';
$string['dashboard_add_option_warning'] = 'Warning';
$string['dashboard_add_saving'] = 'Saving...';
$string['dashboard_aicon'] = 'Icon?';
$string['dashboard_audience'] = 'Target audience';
$string['dashboard_audience_label'] = 'The audience you want to target with this message';
$string['dashboard_audience_option_all'] = 'All';
$string['dashboard_audience_option_staff'] = 'Staff';
$string['dashboard_audience_option_student'] = 'Student';
$string['dashboard_cancel'] = 'Cancel';
$string['dashboard_cell_no'] = 'No';
$string['dashboard_cell_yes'] = 'Yes';
$string['dashboard_class'] = 'Block class:';
$string['dashboard_cron_auto_delete'] = 'Add deleted flag to announcements that have passed their end-date...';
$string['dashboard_cron_auto_delete_udata'] = 'Remove user records that relates to announcements that don\'t exist anymore...';
$string['dashboard_cron_auto_perma_delete'] = 'Permanently delete announcements that have the deleted flag for more than 30 days...';
$string['dashboard_cron_heading'] = 'Cleaning advanced announcements';
$string['dashboard_date_from'] = 'From:';
$string['dashboard_date_info'] = 'Same date = forever';
$string['dashboard_date_to'] = 'To:';
$string['dashboard_delete_label'] = 'Delete';
$string['dashboard_dismissible'] = 'Dismissible?';
$string['dashboard_edit_label'] = 'Edit';
$string['dashboard_enabled'] = 'Enabled?';
$string['dashboard_err_forbidden'] = 'Forbidden, please login again...';
$string['dashboard_err_nocapability'] = 'You don\'t have permission to do that...';
$string['dashboard_err_nojsedit'] = 'Editing only supported with JavaScript enabled. Re-create the desired announcement or enable JavaScript and try again.';
$string['dashboard_err_req'] = 'The following fields are required: {$a}';
$string['dashboard_field_actions'] = 'Actions';
$string['dashboard_field_aicon'] = 'Icon';
$string['dashboard_field_audience'] = 'Audience';
$string['dashboard_field_date_from'] = 'From';
$string['dashboard_field_date_to'] = 'To';
$string['dashboard_field_dismissible'] = 'Dismissible';
$string['dashboard_field_enabled'] = 'Enabled';
$string['dashboard_field_global'] = 'Global';
$string['dashboard_field_id'] = 'ID';
$string['dashboard_field_times'] = 'View Times';
$string['dashboard_field_title'] = 'Title';
$string['dashboard_field_type'] = 'Type';
$string['dashboard_global'] = 'Global announcement?';
$string['dashboard_join'] = ' & ';
$string['dashboard_limits'] = 'Character limits (Title = <b>{$a->title}</b>, Message = <b>{$a->message}</b>). Only the characters within the limit will be saved!';
$string['dashboard_message'] = 'Message';
$string['dashboard_nav_heading'] = 'Notifications:';
$string['dashboard_nav_manage'] = 'Manage';
$string['dashboard_nav_restore'] = 'Restore';
$string['dashboard_nav_settings'] = 'Settings';
$string['dashboard_preview'] = 'Preview';
$string['dashboard_req'] = 'Required...';
$string['dashboard_restore_label'] = 'Restore';
$string['dashboard_restore_table_heading'] = 'Culcourse dashboard restore';
$string['dashboard_restore_table_title'] = 'Restore announcements';
$string['dashboard_restore_table_title_short'] = 'Restore announcements';
$string['dashboard_restore_table_warning'] = '<strong>Warning!</strong> Deleting announcements from this table will permanently delete it from the database. It is recommended to use the auto-delete features of the plugin...';
$string['dashboard_save'] = 'Save';
$string['dashboard_table_empty'] = 'No announcements to show!';
$string['dashboard_table_heading'] = 'Culcourse dashboard';
$string['dashboard_table_title'] = 'Manage announcements';
$string['dashboard_table_title_short'] = 'Manage';
$string['dashboard_task_name'] = 'Culcourse dashboard';
$string['dashboard_times'] = '# of times';
$string['dashboard_times_label'] = 'Number of times to display the announcement to a user (0 = forever)';
$string['dashboard_title'] = 'Title';
$string['dashboard_type'] = 'Type';
$string['dashboard_update'] = 'Update';
$string['event_announcement_created'] = 'Marketing message created';
$string['event_announcement_deleted'] = 'Marketing message deleted';
$string['event_announcement_updated'] = 'Marketing message updated';
$string['pluginname'] = 'Culcourse dashboard';
$string['privacy:metadata:block_dashboard'] = 'Information about announcements the user has been exposed to and recorded interactions.';
$string['privacy:metadata:block_dashboard:blockid'] = 'The ID of the block from which the announcement was created (if any).';
$string['privacy:metadata:block_dashboard:created_by'] = 'The ID of the user that created the announcements (if any).';
$string['privacy:metadata:block_dashboard:deleted'] = 'Whether the announcement has been deleted from the site (1 = deleted).';
$string['privacy:metadata:block_dashboard:deleted_by'] = 'The ID of the user that deleted the announcement (if any).';
$string['privacy:metadata:block_dashboard:message'] = 'The body/message of the announcement.';
$string['privacy:metadata:block_dashboard:title'] = 'The title of the announcement.';
$string['privacy:metadata:block_dashboarddiss'] = 'Information about the user (as consumer)/announcement relationship.';
$string['privacy:metadata:block_dashboarddiss:dismissed'] = 'Flag of whether the announcement has been dismissed by the user or not (1 = dismissed).';
$string['privacy:metadata:block_dashboarddiss:not_id'] = 'The associated announcement ID.';
$string['privacy:metadata:block_dashboarddiss:seen'] = 'A count of how many times the user has seen/been shown the announcement.';
$string['privacy:metadata:block_dashboarddiss:user_id'] = 'The ID of the user that has seen/dismissed the announcement.';
$string['setting/audience'] = 'Target by student email';
$string['setting/audience_desc'] = 'Whether to use the \'@stu\' email to differentiate students from staff or use the mod/assign:submit capability.';
$string['setting/auto_delete'] = 'Auto delete:';
$string['setting/auto_delete_default'] = '';
$string['setting/auto_delete_desc'] = 'Toggles whether an announcement that goes past the set end-date is automatically deleted - but can be restored again.<br>(Helps with housekeeping/management)';
$string['setting/auto_delete_user_data'] = 'Auto delete user data:';
$string['setting/auto_delete_user_data_default'] = '';
$string['setting/auto_delete_user_data_desc'] = 'Toggle whether user data (such as whether the user has seen/dismissed announcements that don\'t exist anymore, etc) related to advanced announcements is automatically deleted.<br>(Helps with housekeeping/management)<hr>';
$string['setting/auto_perma_delete'] = 'Auto permanent delete:';
$string['setting/auto_perma_delete_default'] = '';
$string['setting/auto_perma_delete_desc'] = 'Toggles whether announcements that have been deleted for more than 30 days are automatically permanently deleted from the database.<br>(Helps with housekeeping/management)';
$string['setting/carousel'] = 'Enable carousel';
$string['setting/carousel_default'] = '1';
$string['setting/carousel_desc'] = 'Enable a \'carousel mode\' which means messages are displayed in a single row and circle through each active message<hr>';
$string['setting/dateformat'] = 'Date format:';
$string['setting/dateformat_desc'] = 'Dates will be shown in the chosen format.<hr>';
$string['setting/enable'] = 'Enable:';
$string['setting/enable_default'] = '';
$string['setting/enable_desc'] = 'Toggles whether all announcements are enabled/disabled<hr>';
$string['setting/html'] = 'Allow HTML:';
$string['setting/html_default'] = '';
$string['setting/html_desc'] = 'Toggles whether basic HTML is allowed in announcements\' titles/messages';
$string['setting/interval'] = 'Message interval';
$string['setting/interval_default'] = '2';
$string['setting/interval_desc'] = 'The number of seconds a message is shown before transistioning to the next message (if \'carousel mode\' is enabled';
$string['setting/messagelimit'] = 'Message limit';
$string['setting/messagelimit_default'] = '100';
$string['setting/messagelimit_desc'] = 'The number of characters that the message should be limited to.';
$string['setting/multilang'] = 'Multi-lang/Filter support:';
$string['setting/multilang_default'] = '';
$string['setting/multilang_desc'] = 'Toggles whether the multilang filter (and others) are supported in announcements\' titles/messages.<br>Note - This is for more advanced users & HTML needs to be enabled (above).<hr>';
$string['setting/navigation'] = 'Navigation:';
$string['setting/navigation_desc'] = '{$a->left}{$a->right}';
$string['setting/settings'] = 'Settings:';
$string['setting/titlelimit'] = 'Message title limit';
$string['setting/titlelimit_default'] = '25';
$string['setting/titlelimit_desc'] = 'The number of characters that the title should be limited to.';
