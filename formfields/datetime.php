<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldDateTime extends JFormField {

    protected $type = 'DateTime';

    public function getInput() {
        JHtml::_('jquery.framework');  
        JHtml::_('bootstrap.framework');
        
        $doc = JFactory::getDocument();
        $doc->addStylesheet('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css');
        $doc->addScript('//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.min.js');
        $doc->addScript('//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js');
        $doc->addScript('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js');
         
        $javascript = 'jQuery(function() {';
          $javascript .= 'jQuery("#'.$this->id.'").datetimepicker({';
            $javascript .= 'locale: "nl",';
              $javascript .= 'icons: {';
                $javascript .= 'time: "fa fa-clock-o",';
                  $javascript .= 'date: "fa fa-calendar",';
                    $javascript .= 'up: "fa fa-arrow-up",';
                  $javascript .= 'down: "fa fa-arrow-down",';
                $javascript .= '},';
              $javascript .= 'format: "YYYY-MM-DD HH:mm:ss",';
            $javascript .= 'debug: false,'; 
          $javascript .= '});';
        $javascript .= '});'; 
        
        $doc->addScriptDeclaration($javascript);
        
        $html = '<div class="form-group">';
          $html .= '<div class="input-group date" id="'. $this->id . '">';
            $html .= '<input type="text" name="'. $this->name . '" class="form-control" value="'. $this->value . '"/>';
              $html .= '<span class="input-group-addon">';
              $html .= '<span class="fa fa-calendar"></span>';
            $html .= '</span>';
          $html .= '</div>';
        $html .= '</div>';

        return $html;
                    
    }
}