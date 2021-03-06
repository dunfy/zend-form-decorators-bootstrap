<?php
/**
 * Form definition
 *
 * @category Forms
 * @package Twitter_Bootstrap
 * @subpackage Form
 * @author Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * An "horizontal" Twitter Bootstrap's UI form
 *
 * @category Forms
 * @package Twitter_Bootstrap
 * @subpackage Form
 * @author Christian Soronellas <csoronellas@emagister.com>
 */
abstract class Twitter_Bootstrap_Form_Horizontal extends Twitter_Bootstrap_Form_Vertical
{
    public function __construct($options = null)
    {
        parent::__construct($options);

        $this->setDisposition(self::DISPOSITION_HORIZONTAL);

        $this->setElementDecorators(array(
            array('FieldSize'),
            array('ViewHelper'),
            array('ElementErrors'),
            array('Description', array('tag' => 'p', 'class' => 'help-block')),
            array('Addon'),
            array('HtmlTag', array('tag' => 'div', 'class' => 'controls')),
            array('Label', array('class' => 'control-label')),
            array('Wrapper')
        ));
    }
}
