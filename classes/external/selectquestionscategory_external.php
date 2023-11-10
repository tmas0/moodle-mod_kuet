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

// Project implemented by the "Recovery, Transformation and Resilience Plan.
// Funded by the European Union - Next GenerationEU".
//
// Produced by the UNIMOODLE University Group: Universities of
// Valladolid, Complutense de Madrid, UPV/EHU, León, Salamanca,
// Illes Balears, Valencia, Rey Juan Carlos, La Laguna, Zaragoza, Málaga,
// Córdoba, Extremadura, Vigo, Las Palmas de Gran Canaria y Burgos.

/**
 *
 * @package    mod_jqshow
 * @copyright  2023 Proyecto UNIMOODLE
 * @author     UNIMOODLE Group (Coordinator) <direccion.area.estrategia.digital@uva.es>
 * @author     3IPUNT <contacte@tresipunt.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_jqshow\external;

use dml_exception;
use external_api;
use external_function_parameters;
use external_multiple_structure;
use external_single_structure;
use external_value;
use invalid_parameter_exception;
use mod_jqshow\models\sessions;
use moodle_exception;

defined('MOODLE_INTERNAL') || die();
global $CFG;
require_once($CFG->libdir . '/externallib.php');

class selectquestionscategory_external extends external_api {

    /**
     * @return external_function_parameters
     */
    public static function selectquestionscategory_parameters(): external_function_parameters {
        return new external_function_parameters(
            [
                'categorykey' => new external_value(PARAM_RAW, 'key for category selected'),
                'cmid' => new external_value(PARAM_INT, 'cmid for course module')
            ]
        );
    }

    /**
     * @param string $categorykey
     * @param int $cmid
     * @return array
     * @throws moodle_exception
     * @throws dml_exception
     * @throws invalid_parameter_exception
     */
    public static function selectquestionscategory(string $categorykey, int $cmid): array {
        global $DB;
        self::validate_parameters(
            self::selectquestionscategory_parameters(),
            ['categorykey' => $categorykey, 'cmid' => $cmid]
        );
        [$course, $cm] = get_course_and_cm_from_cmid($cmid, 'jqshow');
        $jqshow = $DB->get_record('jqshow', ['id' => $cm->instance], '*', MUST_EXIST);
        return ['questions' => (new sessions($jqshow, $cmid))->get_questions_for_category($categorykey)];
    }

    /**
     * @return external_single_structure
     */
    public static function selectquestionscategory_returns(): external_single_structure {
        return new external_single_structure([
            'questions' => new external_multiple_structure(
                new external_single_structure(
                    [
                        'status'   => new external_value(PARAM_RAW, 'Question status'),
                        'categoryid' => new external_value(PARAM_INT, 'Category Id'),
                        'version' => new external_value(PARAM_INT, 'Number of question version'),
                        'versionid' => new external_value(PARAM_INT, 'Id of question version'),
                        'questionbankentryid' => new external_value(PARAM_INT, 'Entry id'),
                        'id' => new external_value(PARAM_INT, 'Question id'),
                        'qtype' => new external_value(PARAM_RAW, 'Question type'),
                        'name' => new external_value(PARAM_RAW, 'Name of question'),
                        'idnumber' => new external_value(PARAM_RAW, 'Idnumber of question', VALUE_OPTIONAL),
                        'contextid' => new external_value(PARAM_INT, 'Id of question context'),
                        'issuitable' => new external_value(PARAM_BOOL, 'Compatible with jqshow'),
                        'questionpreview' => new external_value(PARAM_URL, 'Url for Moodle preview'),
                        'questionedit' => new external_value(PARAM_URL, 'Url for Moodle edit question'),
                        'icon' => new external_single_structure([
                            'key' => new external_value(PARAM_RAW, 'Image name'),
                            'component' => new external_value(PARAM_RAW, 'component of icon'),
                            'title' => new external_value(PARAM_RAW, 'title for alt', VALUE_OPTIONAL),
                        ]),
                    ], ''
                ), ''
            )
        ]);
    }
}
