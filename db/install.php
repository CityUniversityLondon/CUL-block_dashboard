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
 *
 * @since Moodle 4.1
 * @package block_dashboard
 * @copyright 2024 David Scotson
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Add block dashboard to all culcourse format courses.
 */
function add_block_dashboard_to_culcourse() {
    global $DB;

    // SQL statement to insert block_dashboard into courses with format 'culcourse'.
    $sql = "
        INSERT INTO {block_instances} (
            blockname,
            parentcontextid,
            showinsubcontexts,
            pagetypepattern,
            subpagepattern,
            defaultregion,
            defaultweight,
            configdata,
            timecreated,
            timemodified
        )
        SELECT
            'dashboard' AS blockname,
            ctx.id AS parentcontextid,
            0 AS showinsubcontexts,
            'course-view-*' AS pagetypepattern,
            NULL AS subpagepattern,
            'side-pre' AS defaultregion,
            5 AS defaultweight,
            '' AS configdata,
            :timecreated AS timecreated,
            :timemodified AS timemodified
        FROM
            {course} c
        JOIN
            {context} ctx ON ctx.instanceid = c.id AND ctx.contextlevel = :contextlevel
        WHERE
            c.format = :format";

    $time = time();
    $params = [
        'contextlevel' => CONTEXT_COURSE,
        'format' => 'culcourse',
        'timecreated' => $time,
        'timemodified' => $time,
    ];

    $DB->execute($sql, $params);
}

/**
 * Post-install routine.
 */
function xmldb_block_dashboard_install() {
    global $CFG;
    add_block_dashboard_to_culcourse();
}
