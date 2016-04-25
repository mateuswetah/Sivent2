<?php


trait MyApp_Interface_LeftMenu_Generate
{
    //*
    //* function MyApp_Interface_LeftMenu_Generate, Parameter list:
    //*
    //* Generates (returns) the Left menu.
    //*

    function MyApp_Interface_LeftMenu_Generate()
    {
        $html="";

        $this->CompanyHash[ "Language" ]=$this->GetLanguage();
        $this->CompanyHash[ "Path" ]=$this->ScriptPath();

        foreach ($this->MyApp_Interface_LeftMenu_Read() as $submenuname => $submenu)
        {
            $html.=
                $this->MyApp_Interface_LeftMenu_Generate_SubMenu($submenu);
        }

        return $html;
    }


    //*
    //* function MyApp_Interface_LeftMenu_Generate_SubMenu, Parameter list: $submenu
    //*
    //* Generates (returns) full submenu entry, incl. title.
    //*

    function MyApp_Interface_LeftMenu_Generate_SubMenu($submenu)
    {
       $html="";
       if (!is_array($submenu))
       {
           $html.=$submenu;
       }
       else
       {
           if (!$this->MyMod_Access_HashAccess($submenu,1)) { return $html; }

           $menu=$this->MyApp_Interface_LeftMenu_Generate_SubMenu_List($submenu);

           if (empty($menu)) { return ""; }

           if (is_array($menu)) { $menu=join("",$menu); }
           $html.=
               $this->DIV
               (
                  $this->GetRealNameKey($submenu,"Title"),
                  array("CLASS" => 'leftmenutitle')
               ).
               $menu;
       }

       return $html;
    }


    //*
    //* function MyApp_Interface_LeftMenu_Generate_SubMenu_List, Parameter list:
    //*
    //* Generates (returns) the Left menu list.
    //*

    function MyApp_Interface_LeftMenu_Generate_SubMenu_List($submenu,$item=array())
    {
        $list=array();
        if (isset($submenu[ "Method" ]))
        {
            $method=$submenu[ "Method" ];
            $list=$this->$method();
        }
        else
        {
            $menuids=array_keys($submenu);
            sort($menuids);

            foreach ($menuids as $menuid)
            {
                if (!is_array($submenu[ $menuid ])) { continue; }
                if (!$this->MyMod_Access_HashAccess($submenu[ $menuid ],1)) { continue; }

                $url=$submenu[ $menuid ][ "Href" ];
                if (preg_match('/#/',$url))
                {
                    $url=$this->Filter($url,$_GET);
                }

                array_push
                (
                   $list,
                   $this->MyApp_Interface_LeftMenu_Bullet("+").
                   $this->Href
                   (
                      $url,
                      $this->GetRealNameKey($submenu[ $menuid ],"Name"),
                      $this->GetRealNameKey($submenu[ $menuid ],"Title"),
                      $this->GetRealNameKey($submenu[ $menuid ],"Target"),
                      "leftmenulinks"
                   )
                );
            }
        }

        if (empty($list)) { return ""; }


        return 
           $this->FilterHashes
           (
              $this->HTMLList
              (
                 $list,
                 "UL",
                 array
                 (
                    "CLASS" => 'leftmenulist',
                 )
              ),
              array($item,$this->LoginData,$this->CompanyHash),
              TRUE
           );        
    }

    //*
    //* function MyApp_Interface_LeftMenu_Generate_Items_Menu, Parameter list: $obj,$menumethod,$items,$activeid,$href,$name,$title,$class="leftmenulinks",$add="+",$sub="-"
    //*
    //* Generates (returns) the Left menu.
    //*

    function MyApp_Interface_LeftMenu_Generate_Items_Menu($obj,$menumethod,$items,$activeid,$href,$name,$title,$class="leftmenulinks",$add="+",$sub="-")
    {
        $list=array();
        foreach ($items as $id => $item)
        {
            $text="";

            $item=$obj->MyMod_Data_Fields_Enums_ApplyAll($item);

            $rhref=$this->Href
            (
               $this->Filter($href,$item),
               $this->Filter($name,$item),
               $this->Filter($title,$item),
               "",
               $class
            );
                        
            if ($item[ "ID" ]==$activeid)
            {
                $text=
                    "&nbsp;".$sub." ".
                    $rhref.
                    ":".
                    $this->BR().
                    $this->$menumethod();
            }
            else
            {
                $text=
                    $add."  ".
                    $rhref;
            }

            array_push($list,$text);
        }

        return $list;
    }
}

?>