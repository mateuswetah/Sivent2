<?php

class MyEventsDatas extends MyEventsCells
{
    
    //*
    //* function HandleEventDatas, Parameter list:
    //*
    //* Handle EventDatas edit.
    //*

    function HandleEventDatas()
    {
        $this->DatasObj(TRUE);

        $this->DatasObj()->Sql_Table_Structure_Update();
        
        echo
            $this->EventMod_Import_Menu_Horisontal().
            $this->EventDatasInfoTable().
            $this->DatasObj()->EventDatasForm($this->Event()).
            "";

        
     }
}

?>