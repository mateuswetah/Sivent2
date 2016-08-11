<?php

class SchedulesUpdate extends SchedulesSpeaker
{
    //*
    //* function UpdateScheduleDate, Parameter list: $date
    //*
    //* Central schedule handler.
    //*

    function UpdateScheduleDate($date)
    {
         var_dump("here");
       foreach ($this->SchedulePlaces() as $place)
        {
         var_dump("here1");
            foreach ($this->DateTimes($date) as $id => $time)
            {
          var_dump("here2");
               foreach ($this->ScheduleRooms($place) as $room)
                {
         var_dump("here3");
                    $this->UpdateScheduleEntry($date,$time,$place,$room);
                }
            }
        }
    }
    
    //*
    //* function UpdateScheduleEntry, Parameter list: $date,$time,$place,$room
    //*
    //* Updates $schedule entry.
    //*

    function UpdateScheduleEntry($date,$time,$place,$room)
    {
        $submissionid=$this->ScheduleCGIValue($date,$time,$room);

        $where=
            $this->UnitEventWhere
            (
               array
               (
                  "Time" => $time[ "ID" ],
                  "Room" => $room[ "ID" ],
               )
            );

        $schedule=$this->Sql_Select_Unique_Item($where,array(),TRUE);
        
        
        $schedules=$this->Sql_Select_Hashes($where);

        var_dump("here id ".$submissionid);
        var_dump(count($schedules));

       
        if (count($schedules)>0)
        {
            $schedule=array_pop($schedules);
            if (count($schedules)>1)
            {
                var_dump("non-unique items");
                foreach ($schedules as $schedule)
                {
                    //$this->Sql_Delete_Item($schedule[ "ID" ]);
                }
            }

            if ($schedule[ "Submission" ]==$submissionid)
            {
                var_dump("no change");
            }
            elseif ($submissionid==0)
            {
                $schedule[ "Submission" ]=$submissionid;
                $this->Sql_Delete_Item($schedule[ "ID" ]);
            }
            elseif ($submissionid>0)
            {
                $schedule[ "Submission" ]=$submissionid;
                $this->Sql_Update_Item_Values_Set(array("Submission"),$schedule);
            }
            
                

            //$nsubmissions=$this->Sql_Select_NHashes($where);
        }
        elseif ($submissionid>0)
        {
            $schedule=
                $this->UnitEventWhere
                (
                   array
                   (
                      "Time" => $time[ "ID" ],
                      "Room" => $room[ "ID" ],
                   )
                );

            $schedule[ "Submission" ]=$submissionid;
            $this->Sql_Insert_Item($schedule);
        }
        
        /* elseif (!empty($schedule)) */
        /* { */
        /*     print "delete<BR>"; */
        /*     $this->Sql_Delete_Items */
        /*     ( */
        /*        array */
        /*        ( */
        /*           "Unit" => $this->Unit("ID"), */
        /*           "Event" => $this->Event("ID"), */
        /*           "Time" => $time[ "ID" ], */
        /*           "Room" => $room[ "ID" ], */
        /*        ) */
        /*     ); */

        /*     //unset($this->Schedules[ $time[ "ID" ] ][ $room[ "ID" ] ]); */
        /* } */
    }
}

?>