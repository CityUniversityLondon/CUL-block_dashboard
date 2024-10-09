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
 * Block for displaying announcements to users.
 *
 * @package    block_dashboard
 * @copyright  2023 Onwards City University {@link https://www.city.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Delvon Forrester <delvon.forrester@esparanza.co.uk>
 */

/**
 * Class block_dashboard extends base blocks class.
 *
 * @copyright  2023 Onwards City University {@link https://www.city.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_dashboard extends block_base {

    /**
     * Initialise block, set title.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_dashboard');
    }

    /**
     * Get and render content of block.
     *
     * @return  bool|stdClass|stdObject
     * @throws  dml_exception
     */
    public function get_content() {
        global $COURSE;
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        // Get the renderer for this page.
        $dashrenderclass = "local_culcourse_dashboard\output\dashboard";
        $out = '';
        if (class_exists($dashrenderclass)) {
            $config = (array)$this->config;
            $dashboard = new $dashrenderclass($COURSE, null, $config, $frmblk = true);
            $dash = new renderer_base($this->page, $out);
            $templatecontext = $dashboard->export_for_template($dash);
            // If block in side-pre then display side template.
            if ($this->instance->region == 'side-pre') {
                $out .= $dash->render_from_template('local_culcourse_dashboard/dashboard_side', $templatecontext);
            } else {
                $out .= $dash->render_from_template('local_culcourse_dashboard/dashboard', $templatecontext);
            }
        }
        $this->content->text = $out;
        return $this->content;
    }

    /**
     * Limit the block to just specific contexts.
     */
    public function applicable_formats() {
        return [
            'all' => false,
            'course-view' => true,
        ];
    }

    /**
     * Allow multiple instances of the block throughout the site.
     *
     * @return bool
     */
    public function instance_allow_multiple() {
        // Are you going to allow multiple instances of each block?
        // If yes, then it is assumed that the block WILL use per-instance configuration.
        return false;
    }

    /**
     * Default return is false - header will be shown. Added check to show heading only if editing.
     *
     * @return boolean
     */
    public function hide_header() {
        // If editing, show header.
        if ($this->page->user_is_editing()) {
            return false;
        }
        return true;
    }
}
