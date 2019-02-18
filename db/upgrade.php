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
 * This file keeps track of upgrades to the vuetest module
 *
 * Sometimes, changes between versions involve alterations to database
 * structures and other major things that may break installations. The upgrade
 * function in this file will attempt to perform all the necessary actions to
 * upgrade your older installation to the current version. If there's something
 * it cannot do itself, it will tell you what you need to do.  The commands in
 * here will all be database-neutral, using the functions defined in DLL libraries.
 *
 * @package     mod_vuetest
 * @copyright   2019 Benedikt Kulmann <b@kulmann.biz>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Execute vuetest upgrade from the given old version
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_vuetest_upgrade($oldversion) {
    global $DB;
    // Load ddl manager and xmldb classes.
    $dbman = $DB->get_manager();
    // run updates
//    if ($oldversion < 2019011601) {
//        // add field for answer labels in gs_question
//        $table_gs_questions = new xmldb_table('vuetest_gs_questions');
//        $field_answer_labels = new xmldb_field('answers_labels', XMLDB_TYPE_CHAR, 255, null, null, null, '', 'answers_list');
//        if (!$dbman->field_exists($table_gs_questions, $field_answer_labels)) {
//            $dbman->add_field($table_gs_questions, $field_answer_labels);
//        }
//        // finalize
//        upgrade_mod_savepoint(true, 2019011601, 'vuetest');
//    }
    return true;
}
