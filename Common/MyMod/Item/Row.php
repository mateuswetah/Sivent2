<?php


trait MyMod_Item_Row
{
    //*
    //* Creates row with item cells.
    //*

    function MyMod_Item_Row($edit,$item,$datas,$even=FALSE,$plural=TRUE)
    {
        $row=array();
        foreach ($datas as $data)
        {
            if (!is_array($data)) { $data=array($data); }
            
            $cells=array();
            foreach ($data as $rdata)
            {
                array_push
                (
                   $cells,
                   $this->MyMod_Item_Cell($edit,$item,$rdata,$even,$plural)
                );
            }

            $row=array_merge
            (
               $row,
               $cells
            );
        }

        return $row;
    }
    
    //*
    //* Creates item table datas row.
    //* Plural default,as we generate $date => $value row.
    //*

    function MyMod_Item_Table_Row($edit,$item,$datas,$plural=TRUE)
    {
        $this->ItemData("ID");
        
        if (!is_array($datas)) { $datas=array($datas); }

        $row=array();
        foreach ($datas as $rdata)
        {
            //Trick to be able to have one level sublists
            if (!is_array($rdata)) { $rdata=array($rdata); }

            foreach ($rdata as $data)
            {
                $access=$this->MyMod_Data_Access($data,$item);

                $redit=$edit;

                $cell="";
                if ($access<=1) { $redit=0; }
                if ($access>=1)
                {
                    array_push
                    (
                       $row,
                       $this->MyMod_Item_Data_Cell_Title
                       (
                          $data,
                          TRUE,
                          array("CLASS" => 'title'),
                          FALSE
                       ),
                       $this->MyMod_Item_Table_Row_Data_Cell
                       (
                          $redit,
                          $item,
                          $data,
                          $plural
                       )
                    );
                }
                elseif (!empty($this->Actions[ $data ]))
                {
                    array_push
                    (
                       $row,
                       $this->MyMod_Item_Action_Cell_Title($data).":",
                       $this->MyActions_Entry($data,$item)
                    );
                }
                elseif (!empty($this->CellMethods[ $data ]))
                {
                    array_push
                    (
                       $row,
                       $this->B($this->$data().":"),
                       $this->$data($edit,$item,$data)
                    );
                }
            }
        }

        return $row;
    }
    //*
    //* Creates item table datas row.
    //* Plural default,as we generate $date => $value row.
    //*

    function MyMod_Item_Table_Row_Data_Cell($edit,$item,$data,$plural=TRUE)
    {
        if ($this->MyMod_Data_Languaged_Is($data))
        {
            return
                $this->MyMod_Group_Row_Item_Languaged_Data_Field($edit,$item,$data,$even=False);
        }
        
        return
            $this->MyMod_Item_Data_Cell
            (
                $edit,
                $item,
                $data,
                $plural
            );
    }
}

?>