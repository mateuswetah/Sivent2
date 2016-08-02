<?php


include_once("Data/Defaults.php");
include_once("Data/Groups.php");
include_once("Data/Files.php");
include_once("Data/Read.php");
include_once("Data/Fields.php");
include_once("Data/TimeData.php");
include_once("Data/Info.php");

trait MyMod_Data
{
    use 
        MyMod_Data_Defaults,MyMod_Data_Groups,MyMod_Data_Fields,
        MyMod_Data_Files,MyMod_Data_Read,MyMod_Data_TimeData,MyMod_Data_Info;


    //*
    //* function MyMod_Data_Init, Parameter list: $initstructure=FALSE,$readitemgroupsdata=FALSE
    //*
    //* Initializes Item data; updates DB fields
    //* if $updatetable is set to TRUE in call.
    //*

    function MyMod_Data_Init($initstructure=FALSE,$readitemgroupsdata=FALSE)
    {
        $this->ItemData();

        //29/06/2016 $this->MyMod_Data_Read();

        if ($readitemgroupsdata)//??
        {
            $this->MyMod_Data_Groups_Initialize();
        }

        $this->InitDataPermissions();
        if ($initstructure)
        {
            $this->MyMod_SubModule_Structure_Init($this->ModuleName);
        }

        foreach ($this->ItemData as $data => $hash)
        {
            if (isset($this->ItemData[ $data ][ "IsDate" ]) && $this->ItemData[ $data ][ "IsDate" ])
            {
                $this->ItemData[ $data ][ "TriggerFunction" ]="TrimDateData";
            }

            foreach ($this->ItemData[ $data ] as $key => $value)
            {
                if (is_array($value))
                {
                    foreach ($value as $id => $val)
                    {
                        if (is_string($val))
                        {
                            $value[ $id ]=preg_replace('/#LoginID/',$this->LoginID,$val);
                        }
                    }

                    $this->ItemData[ $data ][ $key ]=$value;
                }
                elseif (is_string($value))
                {
                    $this->ItemData[ $data ][ $key ]=
                        preg_replace('/#LoginID/',$this->LoginID,$value);
                }
            }

            /* if ($this->ItemData[ $data ][ "SqlClass" ]) */
            /* { */
            /*     $this->InitSqlObject($data); */
            /*     array_push($this->ItemDerivers,$data); */
            /* } */

            if (
                  isset($this->ItemData[ $data ][ "TriggerFunction" ])
                  &&
                  $this->ItemData[ $data ][ "TriggerFunction" ]!=""
               )
            {
                $this->TriggerFunctions[ $data ]=$this->ItemData[ $data ][ "TriggerFunction" ];
            }
        }

        $this->MyLanguage_HashTakeNameKeys($this->ItemData);
    }

    //*
    //* function MyMod_Data_2ModuleKey, Parameter list: $data,$key
    //*
    //* Tries to convert a key, (ex SqlFilter) to value for module $data.
    //*

    function MyMod_Data_2ModuleKey($data,$key)
    {
        $rkey="";
        $class=$this->MyMod_Data_Field_Is_Sql($data);
        if (!empty($class))
        {
            if (!empty($this->ItemData[ $data ][ $key ]))
            {
                $rkey=$this->ItemData[ $data ][ $key ];
            }
            elseif (!empty($this->ApplicationObj()->SubModulesVars[ $class ][ $key ]))
            {
                $rkey=$this->ApplicationObj()->SubModulesVars[ $class ][ $key ];
            }
        }

        return $rkey;
    }
    
    //*
    //* function MyMod_Data_2Module, Parameter list: $data
    //*
    //* Tries to convert a key, (ex SqlFilter) to value for module $data.
    //*

    function MyMod_Data_2Module($data)
    {
        $rkey="";
        $method=$this->MyMod_Data_2ModuleKey($data,"SqlClass");
        if (!empty($method))
        {
            $method.="Obj";
            return $this->$method();
        }

        $this->DoDie("Error retrieving data module",$data);
    }

    
    //*
    //* Returns true if $data is Compulsory.
    //*

    function MyMod_Data_Field_Compulsory($data)
    {
        $res=FALSE;
        if (
              isset($this->ItemData[ $data ])
              &&
              $this->ItemData[ $data ][ "Compulsory" ]
           )
        {
            $res=TRUE;
        }

        return $res;
    }

    
    //*
    //* function MyMod_Data_Titles_Row, Parameter list: $datas
    //*
    //* Generates title rows based on $datas.
    //*

    function MyMod_Data_Titles_Row($datas)
    {
        return array
        (
           array
           (
              "TitleRow" => TRUE,
              "Class" => 'head',
              "Row" => $this->GetDataTitles($datas)
           ),
        );
    }

    //*
    //* function MyMod_Data_EmptyText, Parameter list: $data,$emptytext=""
    //*
    //* Generates title rows based on $datas.
    //*

    function MyMod_Data_EmptyText($data,$emptytext="")
    {
        if (!empty($this->ItemData[ $data ][ "EmptyName" ]))
        {
            $emptytext=$this->GetRealNameKey($this->ItemData[ $data ],"EmptyName");
        }

        return $emptytext;
    }

    
}

?>