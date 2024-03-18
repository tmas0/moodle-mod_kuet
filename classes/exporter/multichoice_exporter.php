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
// Córdoba, Extremadura, Vigo, Las Palmas de Gran Canaria y Burgos

/**
 * Multichoice question exporter
 *
 * @package    mod_kuet
 * @copyright  2023 Proyecto UNIMOODLE
 * @author     UNIMOODLE Group (Coordinator) <direccion.area.estrategia.digital@uva.es>
 * @author     3IPUNT <contacte@tresipunt.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_kuet\exporter;

/**
 *   Exporter to take a stdClass and prepare it for return by webservice, or as the context for a template.
 */
class multichoice_exporter extends commondata_exporter {

    /**
     * Properties definition
     *
     * @return array[]
     */
    public static function define_properties(): array {
        return [
            'numanswers' => [
                'type' => PARAM_INT,
                'optional' => true
            ],
            'name' => [
                'type' => PARAM_RAW,
                'optional' => true
            ],
            'answers' => [
                'type' => answer_exporter::read_properties_definition(),
                'multiple' => true,
                'optional' => true
            ],
            'multianswers' => [
                'type' => PARAM_BOOL,
                'optional' => true
            ],
            'multichoice' => [
                'type' => PARAM_BOOL,
                'optional' => true
            ],
        ];
    }
}
