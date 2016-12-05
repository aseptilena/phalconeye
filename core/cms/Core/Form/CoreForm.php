<?php
/*
  +------------------------------------------------------------------------+
  | PhalconEye CMS                                                         |
  +------------------------------------------------------------------------+
  | Copyright (c) 2013-2016 PhalconEye Team (http://phalconeye.com/)       |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconeye.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Author: Ivan Vorontsov <lantian.ivan@gmail.com>                 |
  +------------------------------------------------------------------------+
*/

namespace Core\Form;

use Engine\Application;
use Engine\Form\AbstractForm;
use Engine\Behavior\ViewBehavior;

/**
 * Main core form.
 *
 * @category  PhalconEye
 * @package   Core\Form
 * @author    Ivan Vorontsov <lantian.ivan@gmail.com>
 * @copyright 2013-2016 PhalconEye Team
 * @license   New BSD License
 * @link      http://phalconeye.com/
 */
class CoreForm extends AbstractForm
{
    const
        /**
         * Default layout path.
         */
        LAYOUT_DEFAULT_PATH = 'partials/form/default';

    use EntityForm,
        ViewBehavior;

    /**
     * Get layout view path.
     *
     * @return string
     */
    public function getLayoutView()
    {
        return $this->resolveView(self::LAYOUT_DEFAULT_PATH, Application::CMS_MODULE_CORE);
    }

    /**
     * Get element view path.
     *
     * @return string
     */
    public function getElementView()
    {
        return $this->getLayoutView() . '/element';
    }

    /**
     * Get errors view path.
     *
     * @return string
     */
    public function getErrorsView()
    {
        return $this->getLayoutView() . '/errors';
    }

    /**
     * Get notices view path.
     *
     * @return string
     */
    public function getNoticesView()
    {
        return $this->getLayoutView() . '/notices';
    }

    /**
     * Get fieldset view path.
     *
     * @return string
     */
    public function getFieldSetView()
    {
        return $this->getLayoutView() . '/fieldSet';
    }
}