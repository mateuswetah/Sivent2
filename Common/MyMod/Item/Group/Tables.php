<?php


trait MyMod_Item_Group_Tables
{
    //*
    //* Create item Group table. Returns row list.
    //*

    function MyMod_Item_Group_Table($edit,$group,$item,$plural=FALSE)
    {
        if (!empty($this->ItemDataSGroups[ $group ][ "GenTableMethod" ]))
        {
            $method=$this->ItemDataSGroups[ $group ][ "GenTableMethod" ];

            return $this->$method($edit,$item,$group);
        }

        $pre="";
        if (!empty($this->ItemDataSGroups[ $group ][ "PreText" ]))
        {
            $pre=$this->ItemDataSGroups[ $group ][ "PreText" ];
        }

        $post="";
        if (!empty($this->ItemDataSGroups[ $group ][ "PostText" ]))
        {
            $post=$this->ItemDataSGroups[ $group ][ "PostText" ];
        }

        $table="";
        if (!empty($this->ItemDataSGroups[ $group ][ "Data" ]))
        {
            $table=
                  $this->ItemTable
                  (
                     $edit,
                     $item,
                     TRUE,
                     $this->ItemDataSGroups[ $group ][ "Data" ],
                     array(),
                     $plural,
                     FALSE,
                     FALSE
                   );

            if ($this->SGroups_NumberItems)
            {
                $n=1;
                foreach (array_keys($table) as $id)
                {
                    array_unshift($table[ $id ],$this->B($n.":"));
                    $n++;
                }
            }
           
            $title=$this->GetRealNameKey($this->ItemDataSGroups[ $group ],"Name");
            if ($edit==1) { $title.=$this->SUP("","&dagger;"); }
           
            array_unshift($table,$this->H(3,$title));

            $table=
               $this->Html_Table
               (
                  "",
                  $table,
                  array("WIDTH" => '100%'),
                  array(),
                  array(),
                  TRUE,
                  TRUE
                )
            ;
        }

        return 
            $pre.
            $table.
            $post.
            "";
    }

    //*
    //* Create item Group tables. Returns row list.
    //*

    function MyMod_Item_Group_Tables($groupdefs,$item,$buttons="",$plural=FALSE)
    {
        $tables=array();
        $redit=0;
        foreach ($groupdefs as $groupdef)
        {
            $row=array();
            foreach ($groupdef as $group => $edit)
            {
                $redit=$this->Max($edit,$redit);
                
                $res=$this->MyMod_Item_Group_Allowed
                (
                   $this->ItemDataSGroups[ $group ],
                   $item
                );

                if ($res)
                {
                    array_push
                    (
                       $row,
                       $this->MyMod_Item_Group_Table($edit,$group,$item,$plural)
                    );
                }
                else { array_push($row,$group); }
                
            }

            if (!empty($row))
            {
                array_push($tables,$row);

                if ($redit==1 && !empty($buttons))
                {
                    array_push($tables,$buttons);
                }
            }
        }


        return $tables;
    }

    
    //*
    //* Create item Group tables html version.
    //*

    function MyMod_Item_Group_Tables_Html($groupdefs,$item,$buttons,$plural=FALSE,$options=array())
    {
        if (empty($options))
        {
            $options=
                array
                (
                   "BORDER" => 1,
                   "ALIGN" => 'center'
                );
        }
        
        return
            $this->Html_Table
            (
                "",
                $this->MyMod_Item_Group_Tables($groupdefs,$item,$buttons,$plural),
                $options,
                array(),
                array()
            ).
            "";
    }
}

?>