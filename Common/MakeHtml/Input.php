<?php

include_once("Input/Select.php");
include_once("Input/Buttons.php");
include_once("Input/CheckBoxes.php");


trait MakeHtml_Input
{
    use
        Html_Input_Buttons,
        Html_Input_Select,
        Html_Input_CheckBoxes;
        
    //*
    //* sub Html_Input, Parameter list: $type,$name,$value,$options=array()
    //*
    //* HTML hidden input field.
    //*

    function Html_Input($type,$name,$value,$options=array())
    {
        $options[ "TYPE" ]=strtolower($type);
        $options[ "NAME" ]=$name;
        $options[ "VALUE" ]=$value;
        return $this->Html_Tag
        (
           "INPUT",
           $options
        );
    }

    //*
    //* sub Html_Hidden, Parameter list: $name,$value,$options=array()
    //*
    //* HTML hidden input field.
    //*

    function Html_Hidden($name,$value,$options=array())
    {
       return $this->Html_Input("hidden",$name,$value,$options);
    }

    //*
    //* sub Html_Input_Field, Parameter list: $name,$value,$options=array()
    //*
    //* HTML text type input field.
    //*

    function Html_Input_Field($name,$value,$options=array())
    {
        $options[ "TYPE" ]='text';
        $options[ "NAME" ]=$name;
        $options[ "VALUE" ]=$value;
        return $this->Html_Tag
        (
           "INPUT",
           $options
        );
    }


}
?>