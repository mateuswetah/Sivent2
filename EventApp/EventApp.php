<?php

include_once("../Accessor.php");

Accessor_Create
(
   array
   (
      "Unit" => array
      (
         "Type" => "Hash",
      ),
      "Event" => array
      (
         "Type" => "Hash",
      ),
      "Events" => array
      (
         "Type" => "HashList",
      ),
   )
);

include_once("../MySql2/UniqueCols.php");
include_once("../Application/DBDataObj.php");
include_once("Modules/Common.php");
include_once("../Application/Application.php");

include_once("MyApp/CGIVars.php");
include_once("MyApp/Accessors.php");
include_once("MyApp/Access.php");
include_once("MyApp/Overrides.php");
include_once("MyApp/Menues.php");
include_once("MyApp/Mail.php");


class EventApp extends MyEventApp_Mail
{
    use _accessor_;

    var $EventGroup="Inscriptions";
    
    
    var $Pertains=1; //Questionary: 1, Asssessment: 2
    var $PertainsSetup=array
    (
       1 => array
       (
          "Title" => "Questionário",
          "Title_UK" => "Questionary",
          
          "Object_Accessor" => "InscriptionsObj",
          
          "Data_Action" => "Datas",
          "Data_Form_Title" => "Dados dos Questionários",
          "Data_Form_Title_UK" => "Questionary Data",
          
          "Group_Action" => "GroupDatas",
          "Groups_Form_Title" => "Grupos dos Questionários",
          "Groups_Form_Title_UK" => "Questionary Data Groups",
          
          "Table_Method" => "ShowInscriptionQuest",
       )
    );

    
    var $Sigma="&Sigma;";
    var $Mu="&mu;";
    var $Percent="%";

    var $SqlVars=array();

    var $UserProfiles=array
    (
       "Friends"
    );
    var $AppProfiles=array
    (
       //Order in Profiles menu
       "SiPos" => array
       (
          "Public",
          "Coordinator",
          "Friend",
          "Admin",
       ),
    );

    var $Sponsors=FALSE;

    
    var $Event=array();
    var $Unit=array();
    var $Units=array();
    //var $UnitsObject=NULL;

    var $PreTextMethod="";

    //*
    //* function EventApp, Parameter list: $args=array()
    //*
    //* EventApp constructor, main object.
    //*

    function EventApp($args=array())
    {
        $unit=$this->GetGETint("Unit");

        $args[ "SessionsTable" ]=$unit."__Sessions";
        $args[ "SavePath" ]="?Unit=".$unit."&Action=Start";

        parent::Application($args);
    }

    //*
    //* function PreInitSession, Parameter list: $hash=array()
    //*
    //* Called by session initializer.
    //*

    function PreInitSession($hash=array())
    {
    }


    //*
    //* sub DetectEventGET, Parameter list:
    //*
    //* Reads Event - if possible.
    //*
    //*

    function DetectEventGET()
    {
       if (isset($_GET[ "Event" ]))
        {
            return "Event";
        }
        elseif (
                  isset($_GET[ "ModuleName" ])
                  && 
                  $_GET[ "ModuleName" ]=="Events"
                  && 
                  isset($_GET[ "ID" ])
               )
        {
            return "ID";
        }

        return "";
    }

    
    //*
    //* sub InitTInterfaceTitles, Parameter list:
    //*
    //* Overrides Application::InitTInterfaceTitles.
    //*
    //*

    function InitTInterfaceTitles()
    {
        parent::InitTInterfaceTitles();
        array_splice($this->TInterfaceTitles,1,0,$this->CompanyHash[ "Title" ]);
    }

    //*
    //* function InitApplication, Parameter list: 
    //*
    //* Application initializer.
    //*

    function InitApplication()
    {
        $this->Layout=array
        (
           "Font"      => "",
           "White"     => "#FFFFFF",
           "Black"     => "#000000",
           "Light"     => "#555555",//"#dcf7fa",
           "LightDark" => "#90a1a3",
           "DarkLight" => "#90a1a3",
           "Dark"      => "#464e4f",

           "Light"     => "#33ccff",
           "Dark"      => "#3333ff",
           "DarkLight" => "#3333ff",
           "LightDark" => "#3399ff",

           "Blue"       => "#33ccff",
           "DarkBlue"   => "#3366ff",
           "LightBlue"  => "#CEECF5",

           "LightGrey" => "#F2F2F2",
           "Grey"      => "#CCCCCC",
           "DarkGrey"  => "#333333",//848484",

           "Yellow"     => "#F5BCA9",
           "Orange"     => "#FAEBD7",
           "Red"     => "#FF6347 ",
        );

        parent::InitApplication();
    }

    //*
    //* function AppInfo, Parameter list: 
    //*
    //* Creates application info table: Unit and Event, if defined.
    //*

    function AppInfo()
    {
        $unit=$this->Unit();
        $table=$this->AppUnitInfoTable();
               
        $event=$this->Event();
        if (!empty($event))
        {
            $table=array_merge
            (
               $table,
               $this->AppEventInfoTable($event)
            );            
        }

        return 
            $this->FrameIt
            (
                $this->H(1,$this->HtmlSetupHash[ "ApplicationName" ]).
                $this->Html_Table
                (
                   "",
                   $table,
                   array("WIDTH" => '100%'),
                   array(),
                   array(),
                   $evenodd=FALSE
                ).
                "",
                array("WIDTH" => '75%')
            ).
            $this->BR();
    }

    //*
    //* function UnitInfoRow Parameter list: $unit=array()
    //*
    //* Creates row with unit logos e title.
    //*

    function UnitInfoRow($unit=array())
    {
        if (empty($unit)) { $unit=$this->Unit(); }
        
        $logos=$this->UnitLogos($unit);
 
        return
            array
            (
               array
               (
                  $this->MultiCell($logos[0],2),
                  $this->MultiCell($this->H(3,$unit[ "Title" ]),2),
                  $this->MultiCell($logos[1],2),
               ),
            );
    }

    //*
    //* function AppUnitInfoTable, Parameter list: 
    //*
    //* Creates application info table: Unit and Event, if defined.
    //*

    function AppUnitInfoTable()
    {
        $unit=$this->Unit();
        $table=array();
        if (!empty($unit))
        {
            $table=
                array_merge
                (
                   $this->UnitInfoRow(),
                   $this->UnitsObj()->MyMod_Item_Table
                   (
                      0,
                      $this->Unit(),
                      array(array("Title","Url","Email"))
                   )
                );
        }

        return  $table;
    }
    
    //*
    //* function UnitLogos, Parameter list: $unit=array()
    //*
    //* Returns unit logos as list of (2) images..
    //*

    function UnitLogos($unit=array())
    {
        if (empty($unit)) { $unit=$this->Unit(); }

        $imgs=array();
        for ($no=1;$no<=2;$no++)
        {
            $unit[ "HtmlLogoHeight" ]=$this->Interface_Logos[ $no ][ "Height" ];
            $unit[ "HtmlLogoWidth" ]=$this->Interface_Logos[ $no ][ "Width" ];
            
            $img=$this->UnitsObj()->MyMod_Data_Field_Logo($unit,"HtmlIcon".$no);
            if (!empty($img))
            {
                array_push($imgs,$img);
            }
        }

        //Double if no second
        if (count($imgs)==1) { array_push($imgs,$imsgs[0]); }

        return $imgs;
    }
    
    //*
    //* function AppEventInfoTable, Parameter list: $event
    //*
    //* Creates application info table: Unit and Event, if defined.
    //*

    function AppEventInfoTable($event)
    {
        $tabledata=
            array
            (
               array
               (
                  "Name","Date","Announcement"
               ),
               array
               (
                  "StartDate","EndDate","EditDate",
               ),
            );
        return
            array_merge
            (
               array($this->H(3,$this->GetRealNameKey($event,"Title"))),
               $this->EventsObj()->MyMod_Item_Table
               (
                  0,
                  $event,
                  $tabledata
               )
            );            
    }

    
    //*
    //* function HandleFriend, Parameter list: 
    //*
    //* Friend handler, listing open inscriptions and history.
    //*

    function HandleFriend()
    {
        $this->InscriptionsObj()->Actions();
        
        echo
            $this->H(1,$this->EventsObj()->MyMod_Language_Message("Events_Handle_Candidate_Title")).
            $this->EventsObj()->OpenEventsHtmlTable().
            $this->EventsObj()->FriendEventsHtmlTable($this->LoginData());
        
        exit();
    }


    //*
    //* function HandleShowUnits, Parameter list: $head=TRUE
    //*
    //* Displays Units in DB.
    //*

    function HandleShowUnits($head=TRUE)
    {
        if ($head)
        {
            $this->MyApp_Interface_Head();
        }

        echo
            $this->UnitsObj()->ShowUnits(0);
    }
    
    //*
    //* function Event_DateSpan, Parameter list: $edit
    //*
    //* Returns date span title.
    //*

    function Event_DateSpan($event=array())
    {
        return $this->EventsObj()->Event_DateSpan($event);
    }
    
    //*
    //* function Event_Place, Parameter list: $edit
    //*
    //* Returns event place.
    //*

    function Event_Place($event=array())
    {
        return $this->EventsObj()->Event_Place($event);
    }

    //*
    //* function MyApp_Globals_Upload_Paths, Parameter list: 
    //*
    //* Overrides MyApp_Globals_Upload_Paths.
    //* Returns list of upload paths for system. Should consider current profile.
    //*

    function MyApp_Globals_Upload_Paths($module="")
    {
        $modules=array();
        if (preg_match('/^(Admin)/',$this->Profile()))
        {
            $paths=array("Uploads/".$this->Unit("ID"));
        }
        elseif (preg_match('/^(Coordinator)$/',$this->Profile()))
        {
            array_push($modules,"Events","Inscriptions","Sponsors");

            $paths=array();
            foreach ($modules as $module)
            {
                $module.="Obj";
                array_push
                (
                    $paths,
                    $this->$module()->MyMod_Data_Upload_Path()
                );    
            }
        }

        sort($paths);
        return $paths;
    }
    
}

?>