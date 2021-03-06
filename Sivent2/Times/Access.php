<?php

class TimesAccess extends ModulesCommon
{
    var $Access_Methods=array
    (
       "Show"   => "CheckShowAccess",
       "Edit"   => "CheckEditAccess",
       "Delete"   => "CheckDeleteAccess",
    );
    
    //*
    //* function HasModuleAccess, Parameter list: $event=array()
    //*
    //* Determines if we have access to module.
    //*

    function HasModuleAccess($event=array())
    {
        $res=$this->SubmissionsObj()->HasModuleAccess($event);

        return $res;
    }
    
    //*
    //* function CheckAddAccess, Parameter list: $item=array()
    //*
    //* Checks if $item may be viewed. Admin may -
    //* and Person, if LoginData[ "ID" ]==$item[ "ID" ]
    //*

    function CheckAddAccess($item=array())
    {
        if (empty($item)) { return TRUE; }

        $res=$this->HasModuleAccess();
        
        return $res;
    }


    //*
    //* function CheckShowAccess, Parameter list: $item=array()
    //*
    //* Checks if $item may be viewed. Admin may -
    //* and Person, if LoginData[ "ID" ]==$item[ "ID" ]
    //*

    function CheckShowAccess($item=array())
    {
        if (empty($item)) { return TRUE; }

        $res=$this->HasModuleAccess();

        return $res;
    }

    //*
    //* function CheckShowListAccess, Parameter list: $item=array()
    //*
    //* Checks if $item may be viewed. Admin may -
    //* and Person, if LoginData[ "ID" ]==$item[ "ID" ]
    //*

    function CheckShowListAccess($item=array())
    {
        $res=$this->HasModuleAccess();

        return $res;
    }
    
    //*
    //* function CheckEditAccess, Parameter list: $item=array()
    //*
    //* Checks if $item may be edited. Admin may -
    //* and Person, if LoginData[ "ID" ]==$item[ "ID" ].
    //*

    function CheckEditAccess($item=array())
    {
        if (empty($item)) { return TRUE; }
         
        $res=
            $this->Current_User_Coordinator_Is()
            &&
            $this->HasModuleAccess();
        
        return $res;
    }
    
    //*
    //* function CheckEditListAccess, Parameter list: $item=array()
    //*
    //* Checks if $item may be edited. Admin may -
    //* and Person, if LoginData[ "ID" ]==$item[ "ID" ].
    //*

    function CheckEditListAccess($item=array())
    {
        $res=
            $this->Current_User_Coordinator_Is()
            &&
            $this->HasModuleAccess();
       
        return $res;
    }
    
    //*
    //* function CheckDeleteAccess, Parameter list: $item=array()
    //*
    //* Checks if $item may be deleted.
    //*

    function CheckDeleteAccess($item=array())
    {
        if (empty($item)) { return TRUE; }
         
        $res=
            $this->Current_User_Coordinator_Is()
            &&
            $this->HasModuleAccess();
       

        //Check if allocated in Schedules
        if ($res)
        {
            $nitems=
                $this->SchedulesObj()->Sql_Select_NHashes
                (
                   $this->UnitEventWhere(array("Time" => $item[ "ID" ]))
                );
            if ($nitems>0) { $res=FALSE; }
        }
        
        return $res;
    }
}

?>