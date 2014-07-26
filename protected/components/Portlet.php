<?php
class Portlet extends CWidget
{
    public $title; // заголовок портлета
    public $visible=true; // виден ли портлет
    // …другие свойства…

    public function init()
    {
        if($this->visible)
        {
            // отрендерить начало блока портлета
            // отрендерить заголовок портлета
        }
    }

    public function run()
    {
        if($this->visible)
        {
            $this->renderContent();
            // отрендерить конец блока портлета
        }
    }

    protected function renderContent()
    {
        // потомки класса должны переопределять этот метод
        // для рендера необходимого содержимого портлета
    }
}