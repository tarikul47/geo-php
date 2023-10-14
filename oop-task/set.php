<?php

class HtmlElement
{
    private $attributes = [];
    private $tag;

    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
        // print_r($this->attributes);
    }

    public function html($innerHtml = '')
    {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $key => $value) {
            $html .= ' ' . $key . '=' . $value;
        }
        $html .= ">";
        $html .= $innerHtml;
        $html .= "</{$this->tag}>";
        return $html;
    }
}

$div = new HtmlElement('div');
$div->id = 'page';
$div->class = 'page';
echo $div->html('Hello');
