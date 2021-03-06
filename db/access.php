<?php
/**
 * Block Capabilities.
 *
 * @package    block_forumnotices
 * @copyright  2017 Pukunui Technology
 * @author     Kavipriya Ramakrishnan <priya@pukunui.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'block/forumnotices:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
            'student' => CAP_PREVENT
        ),
    ),
);
