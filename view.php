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
 * Prints an instance of mod_vuetest.
 *
 * @package     mod_vuetest
 * @copyright   2019 Benedikt Kulmann <b@kulmann.biz>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require(__DIR__.'/../../config.php');
require_once(__DIR__.'/lib.php');

// add js and css from compiled vue app
global $PAGE;
$PAGE->requires->css('/mod/vuetest/assets/css/app.f1e580f372fb5bc667a41007ec0b1c14.css');
$PAGE->requires->js('/mod/vuetest/assets/js/manifest.2ae2e69a05c33dfc65f8.js', '*');
$PAGE->requires->js('/mod/vuetest/assets/js/vendor.43dfcc5ff4d06d39b5fe.js', '*');
$PAGE->requires->js('/mod/vuetest/assets/js/app.96a0eed12aa7a12b0e81.js', '*');

// Course_module ID, or
$id = optional_param('id', 0, PARAM_INT);

// ... module instance id.
$v  = optional_param('v', 0, PARAM_INT);

if ($id) {
    $cm             = get_coursemodule_from_id('vuetest', $id, 0, false, MUST_EXIST);
    $course         = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
    $moduleinstance = $DB->get_record('vuetest', array('id' => $cm->instance), '*', MUST_EXIST);
} else if ($v) {
    $moduleinstance = $DB->get_record('vuetest', array('id' => $n), '*', MUST_EXIST);
    $course         = $DB->get_record('course', array('id' => $moduleinstance->course), '*', MUST_EXIST);
    $cm             = get_coursemodule_from_instance('vuetest', $moduleinstance->id, $course->id, false, MUST_EXIST);
} else {
    print_error(get_string('missingidandcmid', 'vuetest'));
}

require_login($course, true, $cm);

$modulecontext = context_module::instance($cm->id);

//$event = \mod_vuetest\event\course_module_viewed::create(array(
//    'objectid' => $moduleinstance->id,
//    'context' => $modulecontext
//));
//$event->add_record_snapshot('course', $course);
//$event->add_record_snapshot('mod_vuetest', $moduleinstance);
//$event->trigger();

$PAGE->set_url('/mod/vuetest/view.php', array('id' => $cm->id));
$PAGE->set_title(format_string($moduleinstance->name));
$PAGE->set_heading(format_string($course->fullname));
$PAGE->set_context($modulecontext);

echo $OUTPUT->header();
echo html_writer::tag('mod-vue-test', '&nbsp;', ['id' => 'app']);
echo $OUTPUT->footer();
