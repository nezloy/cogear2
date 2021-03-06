<?php

/**
 * Modal Window
 *
 * @author		Dmitriy Belyaev <admin@cogear.ru>
 * @copyright		Copyright (c) 2012, Dmitriy Belyaev
 * @license		http://cogear.ru/license.html
 * @link		http://cogear.ru
 * @package		Core
 * @subpackage
 * @version		$Id$
 */
class Modal_Window extends Object {

    public $options = array(
        'name' => '',
        'header' => '',
        'body' => '',
        'actions' => array(
        ),
        'destroy' => FALSE,
        'settings' => array(
            'show' => false,
            'keyboard' => true,
            'backdrop' => true,
        ),
    );

    /**
     * Get name
     * @return type
     */
    public function id() {
        return 'modal-' . $this->name;
    }

    /**
     * Get modal scripts
     *
     * @return string
     */
    public function script() {
        $script = "$('#{$this->id}').modal(" . json_encode($this->settings) . ");";
        return $script;
    }

    /**
     * Render
     */
    public function render() {
        event('Modal.window', $this);
        event('Modal.window.' . $this->name, $this);
        $tpl = new Template('Modal.window');
        $this->options->id = $this->id();
        $tpl->assign($this->options);

        inline_js($this->script(), 'after');
        return $tpl->render();
    }

}