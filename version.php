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
 * Block version details
 *
 * @package    block_dashboard
 * @copyright  2023 Onwards City University {@link https://www.city.ac.uk/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author     Delvon Forrester <delvon.forrester@esparanza.co.uk>
 */

defined('MOODLE_INTERNAL') || die;

$plugin->component = 'block_dashboard';
$plugin->version = 2023112700; // YYYYMMDDHH (year, month, day, 24-hr format hour).
$plugin->requires = 2022112800; // YYYYMMDDHH (Moodle v3.5.3 as at 21/01/2019).
$plugin->maturity = MATURITY_STABLE; // Code maturity/stability.
