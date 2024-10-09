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
 * Edit form to manipulate block configuration.
 *
 * @package    block_dashboard
 * @copyright  2023 Onwards City University {@link https://www.city.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Delvon Forrester <delvon.forrester@esparanza.co.uk>
 */

/**
 * Form displayed when configuring block.
 *
 * @copyright  2023 Onwards City University {@link https://www.city.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_dashboard_edit_form extends block_edit_form {

    /**
     * Build form.
     *
     * @param object $mform
     */
    protected function specific_definition($mform) {
        $id = $this->block->instance->id;
        $dashboardclass = "local_culcourse_dashboard\\format\dashboard";
        $dashboardoptions = [];
        if (class_exists($dashboardclass)) {
            $dashboard = new $dashboardclass();
            $dashboardoptions = $dashboard->get_dashboard_block_options($id);
        }

        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
        foreach ($dashboardoptions as $element => $data) {
            $default = '';
            if (isset($data['default']) && $data['default']) {
                $default = is_number($data['default']) ? $data['default'] : $data['default'];
            }
            $type = isset($data['name']) && $data['name'] ? 'selectyesno' : 'hidden';
            $settype = isset($data['type']) && $data['type'] ? $data['type'] : '';
            $name = isset($data['name']) && $data['name'] ? $data['name'] : '';
            if (in_array($element, ['quicklinksequence', 'activitylinksequence'])) {
                $type = 'text';
                $name = get_string('setshowsequence', 'local_culcourse_dashboard', $element);
            }
            $mform->addElement($type, 'config_'.$element, $name);
            if (isset($data['help']) && $data['help']) {
                $mform->addHelpButton('config_'.$element, $data['help'], 'local_culcourse_dashboard');
            }
            if ($default) {
                $mform->setDefault('config_'.$element, $default);
            }
            if ($settype) {
                $mform->setType('config_'.$element, $settype);
            }
        }
    }
}
