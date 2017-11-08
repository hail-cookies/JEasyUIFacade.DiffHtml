<?php
namespace exface\JEasyUiTemplate\Template\Elements;

class euiTextHeading extends euiText
{

    function generateHtml()
    {
        $widget = $this->getWidget();
        $prefix = ! $widget->getHideCaption() && $widget->getCaption() ? $widget->getCaption() . ' "' : '';
        $output = '<h' . $this->getWidget()->getHeadingLevel() . ' id="' . $this->getId() . '">' . $prefix . $this->getWidget()->getText() . ($prefix ? '"' : '') . '</h' . $this->getWidget()->getHeadingLevel() . '>';
        return $this->buildHtmlGridItemWrapper($output);
    }
    
    public function getHeight()
    {
        if ($this->getWidget()->getHeight()->isUndefined()){
            return 'auto';
        } else {
            return parent::getHeight();
        }
    }
}
?>