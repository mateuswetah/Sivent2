<?php

class MyEventsDataGroups extends MyEventsDatas
{

    //*
    //* function HandleEventDataGroups, Parameter list:
    //*
    //* Handle EventDatas edit.
    //*

    function HandleEventDataGroups()
    {
        $this->GroupDatasObj(TRUE);

        $this->GroupDatasObj()->Sql_Table_Structure_Update();

        echo
            $this->EventDatasInfoTable().
            $this->EventMod_Import_Menu_Horisontal().
            $this->GroupDatasObj()->EventGroupDatasForm($this->ItemHash).
            "";

        
     }
}

?>