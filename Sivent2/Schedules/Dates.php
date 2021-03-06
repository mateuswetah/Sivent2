<?php

class SchedulesDates extends SchedulesTimes
{
    var $DatesSelectField="Dates";
    var $DateGETField="Date";
    
    //*
    //* function Dates, Parameter list: 
    //*
    //* Reads event dates, if necessary.
    //*

    function Dates()
    {
        if (empty($this->Dates))
        {
            $this->Dates=
                $this->DatesObj()->Sql_Select_Hashes
                (
                   array
                   (
                      "Unit" => $this->Unit("ID"),
                      "Event" => $this->Event("ID"),
                    )
                );

            foreach (array_keys($this->Dates) as $did)
            {
                $this->Dates[ $did ][ "Text" ]=$this->MyTime_Sort2Date($this->Dates[ $did ][ "Name" ]);
            }
        }

        return $this->Dates;
    }
        
    //*
    //* function Dates_Menu, Parameter list: 
    //*
    //* Creates Date's select menu
    //*

    function Dates_Menu()
    {
        $args=$this->CGI_URI2Hash();
        unset($args[ "Place" ]);

        return $this->DatesObj()->MyMod_Items_Menu($args,$this->Dates(),"Date",$idkey="ID",$titlekey="Title");
    }

    
    //*
    //* function Date, Parameter list: $key=""
    //*
    //* Reads event date, if necessary.
    //*

    function Date($key="")
    {
        if (empty($this->Date))
        {
            $date=$this->CGI_GETOrPOSTint($this->DateGETField);
            if (!empty($date))
            {
                $this->Date=
                    $this->DatesObj()->Sql_Select_Hash
                    (
                       array
                       (
                          "ID" => $date,
                          "Unit" => $this->Unit("ID"),
                          "Event" => $this->Event("ID"),
                        )
                    );
            }
            
        }

        if (!empty($key)) { return $this->Date[ $key ]; }
        
        return $this->Date;
    }
    
    //*
    //* function DateTimes, Parameter list: $date
    //*
    //* Returns $date hours.
    //*

    function DateTimes($date)
    {
        return
            $this->TimesObj()->Sql_Select_Hashes
            (
               array
               (
                  "Date" => $date[ "ID" ],
                  "Unit" => $this->Unit("ID"),
                  "Event" => $this->Event("ID"),
               )
            );
    }
    
    
    //*
    //* function ScheduleDates, Parameter list: 
    //*
    //* Returns dates to include in schedule.
    //*

    function ScheduleDates()
    {
        $dateids=$this->CGI2Dates();

        $dates=array();
        foreach ($this->Dates() as $did => $date)
        {
            if (preg_grep('/^'.$date[ "ID" ].'$/',$dateids))
            {
                array_push($dates,$date);
            }
        }

        return $dates;
    }

    
    
    //*
    //* function CGI2Dates, Parameter list: 
    //*
    //* Detects Dates ids to include.
    //*

    function CGI2Dates()
    {
        $dateids=$this->CGI_POSTint($this->DatesSelectField);
        if (empty($dateids))
        {
            $date=$this->CGI_GETOrPOSTint($this->DateGETField);
            if (!empty($date))
            {
                $dateids=array($date);
            }
            else
            {
                $dateids=array();
                foreach ($this->Dates() as $did => $date)
                {
                    array_push($dateids,$date[ "ID" ]);
                }
            }
        }

        return $dateids;
    }
    //*
    //* function DatesSelectField, Parameter list: $dates=array()
    //*
    //* Creates multiple dates select field.
    //*

    function DatesSelectField($dates=array())
    {
        if (empty($dates)) { $dates=$this->Dates(); }
        return
            $this->Html_Select_Multi_Field
            (
               $dates,
               "Dates",
               "ID",
               "#Text",
               "",
               $this->CGI2Dates(),
               $addempty=FALSE
            );
    }
    
    //*
    //* function DateScheduleTitle, Parameter list: $date
    //*
    //* Generates date scedule date.
    //*

    function DateScheduleTitle($date)
    {
        return
            $this->MyLanguage_GetMessage("Schedule_Date_Title").": ".
            $this->MyTime_Sort2Date($date[ "Name" ]).
            "";
    }

    //*
    //* function DateScheduleTable, Parameter list: $edit,$date
    //*
    //* Generates $date scedule.
    //*

    function DateSchedulesTable($edit,$date)
    {
        if ($edit==1 && $this->CGI_POSTint("Save")==1)
        {
            $this->UpdateScheduleDate($date);
        }

        $dateid=$date[ "ID" ];

        $this->Schedules=$this->ReadDateSchedules($date);
        
        $table=
            array
            (
               $this->Dates_Menu(),
               $this->Places_Menu()
            );
        foreach ($this->SchedulePlaces() as $place)
        {
            $table=array_merge
            (
               $table,
               $this->PlaceSchedulesTableHtml($edit,$date,$place)
            );
        }

        return $this->FrameIt($table);
    }
    
    //*
    //* function DatesSchedulesTables, Parameter list: $edit
    //*
    //* Generates all dates schedule.
    //*

    function DatesSchedulesTables($edit)
    {
        $tables=array();
        foreach ($this->ScheduleDates() as $date)
        {
            array_push($tables,$this->DateSchedulesTable($edit,$date));
        }

        return $tables;
    }
}

?>