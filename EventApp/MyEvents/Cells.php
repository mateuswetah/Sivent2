<?php

class MyEventsCells extends MyEventsAccess
{
    //*
    //* function InscribeLink, Parameter list:$event=array(),$edit=0
    //*
    //* Handle  open events listing.
    //*

    function InscribeLink($event=array(),$edit=0)
    {
        if (empty($event)) { return "Inscrição"; }

        $inscribed=-1;
        if ($this->Profile()!="Public")
        {
            $inscribed=
                $this->InscriptionsObj()->MySqlNEntries
                (
                   $this->ApplicationObj->SqlEventTableName("Inscriptions","",$event),
                   array
                   (
                      "Friend" => $this->ApplicationObj->LoginData[ "ID" ],
                      "Event" => $event[ "ID" ]
                   )
                );
        }
        
        $open=TRUE;
        if ($event[ "EndDate" ]<$this->TimeStamp2DateSort())
        {
            $open=FALSE;
        }

        $res="";
        if ($inscribed==0)
        {
            if ($open)
            {
                $res=$this->InscriptionsObj()->MyActions_Entry("Inscribe");
            }
            else
            {
                $res=$this->MyMod_Language_Message("Events_Closed_Title");
            }
        }
        elseif ($inscribed>0)
        {
            $res=$this->InscriptionsObj()->MyActions_Entry("Inscription");
        }

        return preg_replace('/#Event/',$event[ "ID" ],$res);
    }

    
    //*
    //* function InscriptionTableExistsCell, Parameter list:
    //*
    //* Cretaes cell informing wheter inscription table has been created or not.
    //*

    function InscriptionTableExistsCell()
    {
        $cell="Não";
        if ($this->InscriptionsObj()->Sql_Table_Exists())
        {
            $cell="Sim";
        }

        return $cell;
    }
    

    //*
    //* function InscriptionTableUpdateLink, Parameter list: $pertains
    //*
    //* Cretaes link with CGI "CreateTable" set to 1.
    //*

    function InscriptionTableUpdateLink($pertains)
    {
        $args=$this->CGI_URI2Hash();

        $args[ "CreateTable" ]=1;
        $args[ "Pertains" ]=$pertains;

        return $this->Href
        (
           "?".
           $this->CGI_Hash2URI
           (
              $args
           ),
           "Atualizar"
        );
    }

    //*
    //* function NoOfInscriptionsCell, Parameter list:
    //*
    //* Returns number of inscriptions in sql table.
    //*

    function NoOfInscriptionsCell($event=array())
    {
        if (empty($event)) { return $this->MyLanguage_GetMessage("Events_Inscriptions_Cell_Noof_Title"); }
        
        $ninscribed="-";
        if ($this->InscriptionsObj()->Sql_Table_Exists())
        {
            $table=$this->SqlEventTableName("Inscriptions",$event);
            $ninscribed=$this->InscriptionsObj()->MySqlNEntries($table,array());
        }

        return $ninscribed;
    }
        
    //*
    //* function Events_Open_Is, Parameter list: $event=array()
    //*
    //* Returns true if $evvent has inscriptions
    //*

    function Events_Open_Is($event=array())
    {
        if (empty($event)) { $event=$this->Event(); }
        
        $today=$this->MyTime_2Sort();

        $res=FALSE;
        if ($event[ "StartDate" ]<=$today && $event[ "EndDate" ]>=$today)
        {
            $res=TRUE;
        }

        return $res;
    }
    
    //*
    //* function Events_Open_Premature, Parameter list: $event=array()
    //*
    //* Returns true if $event will open inscriptions later.
    //*

    function Events_Open_Premature($event=array())
    {
        if (empty($event)) { $event=$this->Event(); }
        
        $today=$this->MyTime_2Sort();

        $res=FALSE;
        if ($event[ "StartDate" ]>$today)
        {
            $res=TRUE;
        }

        return $res;
    }
    
    //*
    //* function Events_Open_Get, Parameter list: 
    //*
    //* Returns open events.
    //*

    function Events_Open_Get()
    {
        $today=$this->MyTime_2Sort();
        return
            $this->Sql_Select_Unique_Col_Values
            (
               "ID",
               "StartDate<'".$today."'".
               " AND ".
               "EndDate>'".$today."'",
               "ID"
            );
    }
}

?>