<?php

class AppHandle extends EventApp
{
    //*
    //* function HasCollaborations, Parameter list:
    //*
    //* Checks whether current event has collaborations.
    //* 
    //*

    function HasCollaborations()
    {
        return $this->EventsObj()->Event_Collaborations_Has();
    }
    
    //*
    //* function HasCaravans, Parameter list:
    //*
    //* Checks whether current event has Caravans.
    //* 
    //*

    function HasCaravans()
    {
        return $this->EventsObj()->Event_Caravans_Has();
    }
    
    //*
    //* function HasSubmissions, Parameter list:
    //*
    //* Checks whether current event has Submissions.
    //* 
    //*

    function HasSubmissions()
    {
        return $this->EventsObj()->Event_Submissions_Has();
    }
    
    //*
    //* function HasCertificates, Parameter list:
    //*
    //* Checks whether current event has Certificates.
    //* 
    //*

    function HasCertificates()
    {
        return $this->EventsObj()->Event_Certificates_Has();
    }
    
    //*
    //* function Sivent2_CGIVars_Get, Parameter list:
    //*
    //* Sivent2 CGI vars setup.
    //* 
    //*

    function Sivent2_CGIVars_Get()
    {
        $unit=$this->CGI_GETint("Unit");
        if (empty($unit))
        {
            $args=$this->CGI_URI2Hash();
            $args[ "Unit" ]=1;

            $uri="?".$this->CGI_Hash2URI($args);
            
            $this->CGI_Redirect("?".$this->CGI_Hash2URI($args));

            exit();
        }

        return array
        (
           //Read Unit
          "Unit" => array
          (
             "GlobalKey" => "Unit",
             "Compulsory" => TRUE,
             "CompulsoryAdmin" => FALSE,
             "AltAction" => "HandleShowUnits",

             "SqlObject" => "UnitsObj",
             "InitSqlTable" => TRUE,

             "From" => array
             (
                "GET" => "Unit",
                "POST" => "Unit",
                "COOKIE" => "Unit",
                "Login" => "Unit",
             ),

             "PostReads" => array
             (
                "Schools" => array
                (
                   "ReadMethod" => "ReadUnitOpenEvents",

                   "SqlObject" => "EventsObj",
                   "InitSqlTable" => TRUE,
                ),
             ),
             "CGIVars" => $this->EventApp_CGIVars_Unit()
           ),
        );
    }
    
    //*
    //* function  HtmlEventsMenuDef, Parameter list: 
    //*
    //* Returns menu def as read from system file. May be overridden.
    //*

    function HtmlEventsMenuDef()
    {
        $menudef=parent::HtmlEventsMenuDef();
        
        $this->MyMod_Profiles_Hash_Transfer($menudef,"Friend",$this->ApplicationObj()->UserProfiles,TRUE);
        
        $menudef=$this->ReadPHPArray("System/Events/LeftMenu.php",$menudef);

        return $menudef;
    }
    //*
    //* function HandleShowUnits, Parameter list: 
    //*
    //* Displays Units in DB.
    //*

    function HandleShowUnits()
    {
        $this->MyApp_Interface_Head();

        echo
            $this->UnitsObj()->ShowUnits(0);
    }
    
    //*
    //* function HandleStart, Parameter list: 
    //*
    //* Overrides Application::HandleStart.
    //*

    function HandleStart()
    {
        if ($this->GetCGIVarValue("Action")=="Start")
        {
            $this->ResetCookieVars();
        }

        $this->MyApp_Interface_Head();

        echo
            $this->AppInfo();

       if ($this->Profile=="Friend")
        {
            $this->HandleFriend();
        }
        elseif ($this->Profile=="Coordinator")
        {
            $this->HandleCoordinator();
        }
    }

    //*
    //* function GetCoordinatorEvents, Parameter list: 
    //*
    //* Handle coord entry.
    //*

    function GetCoordinatorEvents()
    {
        $events=
            $this->PermissionsObj()->Sql_Select_Unique_Col_Values
            (
               "Event",
               array("User" => $this->LoginData("ID"))
            );

        if (preg_grep('/^0$/',$events))
        {
            $events=$this->EventsObj()->Sql_Select_Unique_Col_Values("ID");
        }

        return
            
            $this->EventsObj()->Sql_Select_Hashes
            (
               array
               (
                  "ID" => $this->Sql_Where_IN($events)
               ),
               array(),
               "Date"
            );
    }
    
    //*
    //* function HandleCoordinator, Parameter list: 
    //*
    //* Handle coord entry.
    //*

    function HandleCoordinator()
    {
        $this->EventsObj()->ItemData();
        $this->EventsObj()->ItemDataGroups();
        $this->EventsObj()->Actions();

        
        echo
            $this->Html_Table
            (
               "",
               $this->EventsObj()->ItemsTableDataGroup
               (
                  "",
                  0,
                  "",
                  $this->GetCoordinatorEvents()
               )
            ).
            "";

        exit();
    }

    //*
    //* function HandleFriend, Parameter list: 
    //*
    //* Handle friend entry
    //*

    function HandleFriend()
    {
        $this->FriendsObj()->Friend_Events_Table();
    }

}