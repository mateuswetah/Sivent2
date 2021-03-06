<?php

trait MyHash
{
    //*
    //* function MyHashes_Compare, Parameter list: $hash1,$hash2,$keys
    //*
    //* Compare $keys in $hash1 and $hash2.
    //*

    function MyHashes_Compare($hash1,$hash2,$keys)
    {
        $res=True;
        foreach ($keys as $key)
        {
            if ($hash1[$key ]!=$hash2[ $key ])
            {
                $res=False;
                break;
            }
        }

        return $res;
    }
    
    //*
    //* function MyHash_Show, Parameter list: $item
    //*
    //* Returns $item $datas keys.
    //*

    function MyHash_Show($item)
    {
        $text=array();
        foreach ($item as $key => $value)
        {
            if (is_array($value)) { $value=join(", ",$value); }
            
            array_push($text,$key.": ".$value);
        }

        return $text;
    }
     
    //*
    //* function MyHash_List_Unique, Parameter list: $item,$datas
    //*
    //* Returns $item $datas keys.
    //*

    function MyHash_List_Unique($list)
    {
        $values=array();
        foreach ($list as $item)
        {
            $values[ $item ]=True;
        }

        return array_keys($values);
    }
    //*
    //* function MyHash_Values_Get, Parameter list: $item,$datas
    //*
    //* Returns $item $datas keys.
    //*

    function MyHash_Values_Get($item,$datas)
    {
        $values=array();
        foreach ($datas as $data)
        {
            array_push($values,$item[ $data ]);
        }

        return $values;
    }

    //*
    //* function MyHash_2_Hash_Transfer, Parameter list: $src,&$dest,$datas
    //*
    //* If empty $list[ $key ], sets it to array().
    //*

    function MyHash_2_Hash_Transfer($src,&$dest,$datas)
    {
        foreach (array("Date","Time","Place","Room","Submission") as $data)
        {
            $dest[ $data ]=$src[ $data ];
        }
    }

    //*
    //* function MyHash_Value_Save_Set, Parameter list: &$list,$key,$value=array()
    //*
    //* If empty $list[ $key ], sets it to array().
    //*

    function MyHash_Value_Save_Set(&$list,$key,$value=array())
    {
        if (empty($list[ $key ]))
        {
            $list[ $key ]=$value;
        }
    }
    //*
    //* function MyHash_Key, Parameter list: $hash,$key
    //*
    //* Savely return $hash key $key.
    //*

    function MyHash_Key($hash,$key)
    {
        if (isset($hash[ $key ])) { return $hash[ $key ]; }

        return NULL;
    }


    //*
    //* function MyHash_Args2Object, Parameter list: $hash
    //*
    //* Reads module specific setup.
    //*

    function MyHash_Args2Object($hash,$undefsonly=FALSE)
    {
        foreach ($hash as $key => $value)
        {
            if (!$undefsonly || empty($this->$key))
            {
                $this->$key=$value;
            }
        }
    }


    //*
    //* function MyHash_AddDefaultKeys, Parameter list: &$hash,$defaults
    //*
    //* Adds all keys in $defaults, unless already defined.
    //* Guaranteeing all keys present, prevents warning messages about
    //* accessing nondefined keys in definitions using $hash.
    //*

    function MyHash_AddDefaultKeys(&$hash,$defaults)
    {
        foreach ($defaults as $key => $value)
        {
            if (!isset($hash[ $key ]))
            {
                $hash[ $key ]=$value;
            }
        }
    }

    //*
    //* function MyHash_HashesList_Values, Parameter list: $list,$key1,$key2=""
    //*
    //* Keys list in sublists by ID $key values.
    //*

    function MyHash_HashesList_Values($list,$key1,$key2="")
    {
        $rlist=array();
        foreach (array_keys($list) as $id)
        {
            $value=$list[ $id ][ $key1 ];
            if (!empty($key2))
            {
                $value=$list[ $id ][ $key1 ][ $key2 ];
            }

            $rlist[ $value ]=1;
        }

        return array_keys($rlist);
    }

    //*
    //* function MyHash_HashesList_2ID, Parameter list: $list,$key="ID"
    //*
    //* Keys list in sublists by ID $key values.
    //*

    function MyHash_HashesList_2ID($list,$key="ID")
    {
        $rlist=array();
        foreach (array_keys($list) as $id)
        {
            $val=$list[ $id ][ $key ];
            $this->MyHash_Value_Save_Set($rlist,$val);
            $rlist[ $val ]=$list[ $id ];
        }

        return $rlist;
    }

    //*
    //* function MyHash_HashesList_2IDs, Parameter list: $list,$key="ID"
    //*
    //* Keys list in sublists by ID $key values.
    //*

    function MyHash_HashesList_2IDs($list,$key="ID",$sortorder=array())
    {
        $rlist=array();
        foreach (array_keys($list) as $id)
        {
            $val=$list[ $id ][ $key ];
            $this->MyHash_Value_Save_Set($rlist,$val);
            $rlist[ $val ][ $id ]=$list[ $id ];
        }

        if (!empty($sortorder))
        {
            $rrlist=array();
            foreach ($sortorder as $val)
            {
                if (isset($rlist[ $val ]))
                {
                    $rrlist[ $val ]=$rlist[ $val ];
                }
            }

            return $rrlist;
        }

        return $rlist;
    }

    //*
    //* function MyHash_HashesList_Key, Parameter list: $list,$key="ID"
    //*
    //* Keys list in sublists by ID $key values.
    //*

    function MyHash_HashesList_Key($list,$key="ID")
    {
        $rlist=array();
        foreach (array_keys($list) as $id)
        {
            $val=$list[ $id ][ $key ];
            $this->MyHash_Value_Save_Set($rlist,$val);
            array_push($rlist[ $val ],$list[ $id ]);
        }

        return $rlist;
    }


    //*
    //* function MyHash_HashesList_Key2, Parameter list: $list,$key1,$key2
    //*
    //* Keys list in sublists by ID the two $key1 and $key2 values.
    //*

    function MyHash_HashesList_Key2($list,$key1,$key2)
    {
        $rlist=array();
        foreach (array_keys($list) as $id)
        {
            $val1=$list[ $id ][ $key1 ];
            $this->MyHash_Value_Save_Set($rlist,$val1);

            
            $val2=$list[ $id ][ $key2 ];
            $this->MyHash_Value_Save_Set($rlist[ $val1 ],$val2);

            array_push($rlist[ $val1 ][ $val2 ],$list[ $id ]);
        }

        return $rlist;
    }

    //*
    //* function MyHash_HashesList_Key3, Parameter list: $list,$key1,$key2,$key3
    //*
    //* Keys list in sublists by ID $key1,$key2,$key3 values.
    //*

    function MyHash_HashesList_Key3($list,$key1,$key2,$key3)
    {
        $rlist=array();
        foreach (array_keys($list) as $id)
        {
            $val1=$list[ $id ][ $key1 ];
            $this->MyHash_Value_Save_Set($rlist,$val1);

            
            $val2=$list[ $id ][ $key2 ];
            $this->MyHash_Value_Save_Set($rlist[ $val1 ],$val2);

            $val3=$list[ $id ][ $key3 ];
            $this->MyHash_Value_Save_Set($rlist[ $val1 ][ $val2 ],$val3);


            
            array_push($rlist[ $val1 ][ $val2 ][ $val3 ],$list[ $id ]);
        }

        return $rlist;
    }


    
   
    //*
    //* function MyHash_HashHashes_Get, Parameter list: $hashes,$key1="",$key2=""
    //*
    //* Returns $hashes[ $key1 ][ $key2 ] if both keys defined,
    //* $hashes[ $key1 ] if first key defined,
    //* elsewise return full hash.
    //*

    function MyHash_HashHashes_Get($hashes,$key1="",$key2="")
    {
        if (!empty($key1))
        {
            if (!empty($hashes[ $key1 ]))
            {
                if (!empty($key2))
                {
                    if (!empty($hashes[ $key1 ][ $key2 ]))
                    {
                        return $hashes[ $key1 ][ $key2 ];
                    }
                }
                else
                {
                    return $hashes[ $key1 ];
                }
            }
        }
        else
        {
            return $hashes;
        }

        return NULL;
    }

    //*
    //* function MyHash_HashHashes_Set, Parameter list: &$hashes,$value,$key1="",$key2=""
    //*
    //* Sets $hashes[ $key1 ][ $key2 ] if both keys defined,
    //* $hashes[ $key1 ] if first key defined,
    //* elsewise does nothing.
    //*

    function MyHash_HashHashes_Set(&$hashes,$value,$key1="",$key2="")
    {
        if (!empty($key1))
        {
            if (!empty($key2))
            {
                $hashes[ $key1 ][ $key2 ]=$value;
            }
            else
            {
                $hashes[ $key1 ]=$value;
            }
        }
    }



    //*
    //* function MyHash_Hash2Access, Parameter list: $hash,$value=array(1)
    //*
    //* Tests if $hash, as an ItemData, Actions entry (or other hash), is
    //* permitted for current user.
    //*
    //* Considered are LoginType and Profile keys. 
    //*

    function MyHash_Hash2Access($hash,$values=array(1),$profile="",$logintype="")
    {
        if (!is_array($values)) { $values=array($values); }


        if (empty($profile)) { $profile=$this->Profile(); }
        
        if (empty($logintype))
        {
            if (!preg_match('/^(Admin|Public)/',$profile))
            {
                $logintype="Person";
            }
        }
        if (empty($logintype)) { $logintype=$this->LoginType(); }

        $res=FALSE;
        if ($logintype=="Admin")
        {
            if (isset($hash[ "Admin" ]))
            {
                if (preg_grep('/^'.$hash[ "Admin" ].'$/',$values))
                {
                    $res=TRUE;
                }
            }
        }
        elseif ($logintype=="Person")
        {
            if (isset($hash[ $profile ]))
            {
                if (preg_grep('/^'.$hash[ $profile ].'$/',$values))
                {
                    $res=TRUE;
                }
            }

            if (isset($hash[ $logintype ]))
            {
                if (preg_grep('/^'.$hash[ $logintype ].'$/',$values))
                {
                    $res=TRUE;
                }
            }
        }
        elseif ($logintype=="Public")
        {
            if (isset($hash[ "Public" ]))
            {
                if (preg_grep('/^'.$hash[ "Public" ].'$/',$values))
                {
                    $res=TRUE;
                }
            }
        }

        return $res;
    }

    
    //*
    //* function MyHash_HashHashes_Find_First, Parameter list: $hashes,$where
    //*
    //* Returns first found item confirming 
    //*

    function MyHash_HashHashes_Find_First($hashes,$where)
    {
        foreach ($hashes as $id => $hash)
        {
            $found=TRUE;
            foreach ($where as $key => $value)
            {
                if ($hash[ $key ]!=$value)
                {
                    $found=FALSE;
                }
            }

            if ($found)
            {
                return $hash;
            }
        }
        
        return NULL;
    }
    
    //*
    //* function MyHash_Create_SubHashes_1, Parameter list: &$hash,$key1,$value=array()
    //*
    //* Creates one level hash $keys, with values $value.
    //*

    function MyHash_Create_KeyHashes_1(&$hash,$key1,$value=array())
    {
        if (!isset($hash[ $key1 ]))
        {
            $hash[ $key1 ]=array();
        }
    }
    
    //*
    //* function MyHash_Create_SubHashes_2, Parameter list: &$hash,$key1,$key2,$value=array()
    //*
    //* Creates 2 level hash $keys, with values $value.
    //*

    function MyHash_Create_KeyHashes_2(&$hash,$key1,$key2,$value=array())
    {
        $this->MyHash_Create_KeyHashes_1($hash,$key1,$value);
        $this->MyHash_Create_KeyHashes_1($hash[ $key1 ],$key2,$value);
    }
    
    //*
    //* function MyHash_Create_SubHashes_3, Parameter list: &$hash,$key1,$key2,$key3,$value=array()
    //*
    //* Creates 3 level hash $keys, with values $value.
    //*

    function MyHash_Create_KeyHashes_3(&$hash,$key1,$key2,$key3,$value=array())
    {
        $this->MyHash_Create_KeyHashes_2($hash,$key1,$key2,$value);
        $this->MyHash_Create_KeyHashes_1($hash[ $key1 ][ $key2 ],$key3,$value);
    }
    //*
    //* function MyHash_Create_SubHashes_4, Parameter list: &$hash,$key1,$key2,$key3,$key4,$value=array()
    //*
    //* Creates 4 level hash $keys, with values $value.
    //*

    function MyHash_Create_KeyHashes_4(&$hash,$key1,$key2,$key3,$key4,$value=array())
    {
        $this->MyHash_Create_KeyHashes_2($hash,$key1,$key2,$value);
        $this->MyHash_Create_KeyHashes_2($hash[ $key1 ][ $key2 ],$key3,$key4,$value);
    }
    
    //*
    //* function MyHash_Max, Parameter list: $hash
    //*
    //* Returns maximum value, looping over all keys.
    //*

    function MyHash_Max($hash)
    {
        $max=0;
        foreach ($hash as $key => $value) { $max=$this->Max($max,$value); }

        return $max;
    }
    
    //*
    //* function MyHash_List_Number, Parameter list: $items
    //*
    //* Creates 4 level hash $keys, with values $value.
    //*

    function MyHash_List_Number($items)
    {
        $n=1;
        foreach (array_keys($items) as $id)
        {
            array_unshift($items[ $id ],$n++);
        }

        return $items;
    }
    
    //*
    //* function MyHash_Keys_Take, Parameter list: $src,$keys,&$dest
    //*
    //* Takes undefined keys, $keys, in $dest from $src.
    //* Returns keys altered.
    //*

    function MyHash_Keys_Take($src,$keys,&$dest)
    {
        $changed=array();
        foreach ($keys as $key)
        {
            if (!empty($src[ $key ]) && empty($dest[ $key ]))
            {
                $dest[ $key ]=$src[ $key ];
                array_push($changed,$key);
            }
        }
    
        return $changed;
    }
    
    //*
    //* Filter $lines according to $hash. Pre adds $key.
    //*

    function MyHash_Filter($lines,$hash,$prekey="")
    {
        $datas=array();
        if ($hash) { $datas=array_keys($hash); }

        //this way shortest filtered first (#Line before #Lines)
        sort($datas);

        $datas=array_reverse($datas);
        foreach ($datas as $data)
        {
            $value=$hash[ $data ];
            $rdata=$prekey.$data;

            if (!is_array($value))
            {
                $vvalue=preg_replace('/\\\\\\\\/',"__NEWLINE__",$value);
                $lines=preg_replace('/#'.$rdata.'\b/',$vvalue,$lines);
                $lines=preg_replace('/#'.$rdata.'_/',$vvalue."_",$lines);
                $lines=preg_replace('/__NEWLINE__/',"\\\\\\\\",$lines);
                while (preg_match("/#{([^}]+)}$rdata/",$lines,$matches))
                {
                    $format=$matches[1];
                    $value=sprintf($format,$value);

                    $format=preg_replace('/%/',"\\%",$format);
                    $lines=preg_replace('/'.$matches[0].'/',$value,$lines);
               }
            }
        }

        return $lines;
    }
    
    //*
    //* function MyHashes_Page, Parameter list: $list,$maxnitems,$ditem=1
    //*
    //* Splits a list in sublists, with max of $nlines per item.
    //* Elements in $leadingrows is prepended in each sublists.
    //*

    function MyHashes_Page($list,$maxnitems,$ditem=1)
    {
        $items=array();
        $plist=array();
        $nitems=0;
        foreach ($list as $id => $item)
        {
            $nitems+=$ditem;
            if ($nitems<=$maxnitems)
            {
                array_push($items,$item);
            }
            else
            {
                array_push($plist,$items);
                $items=array($item);
                $nitems=$ditem;
            }
        }

        if (count($items)>0)
        {
            array_push($plist,$items);
        }

        return $plist;
    }
    
    
    //*
    //* function MyHashes_Files_Show, Parameter list: $hashes
    //*
    //* Displays $hashes key and File entry, for each hash.
    //*

    function MyHashes_Files_Show($hashes)
    {
        $rfiles=array();
        foreach ($hashes as $data => $hash)
        {
            if (!empty($hash[ "File" ]))
            {
                $files=$hash[ "File" ];
                if (!is_array($files)) { $files=array($files); }

                foreach ($files as $rfile)
                {
                    $rfiles[ $rfile ]=TRUE;
                }
            }
            //else { var_dump(); }
            
        }

        $files=array_keys($rfiles);

        $table=array();
        foreach ($hashes as $key => $hash)
        {
            $row=array($this->B($key.":"));

            $rfiles=array();
            if (!empty($hash[ "File" ]))
            {
                $rrfiles=$hash[ "File" ];
                if (!is_array($rrfiles)) { $rrfiles=array($rrfiles); }

                foreach ($rrfiles as $file) { $rfiles[ $file ]=TRUE; }
            }
            
            foreach ($files as $file)
            {
                $cell="-";
                if (!empty($rfiles[ $file ]))
                {
                    $cell="x";
                }

                array_push($row,$cell);
            }
            
            array_push($table,$row);
        }

        $titles=$files;
        array_unshift($titles,"Data");
        
        echo
            $this->Html_Table
            (
               $titles,
               $table
            ).
            "";
    }

    
    //*
    //* function MyHashes_Key_Make_First, Parameter list: $list,$key
    //*
    //* Tries to put $key first in $list. That is, if there.
    //* Uses regex for comparison.
    //*

    function MyHashes_Key_Make_First($list,$key)
    {
        $len=count($list);
        $list=preg_grep('/^'.strval($key).'$/',$list,PREG_GREP_INVERT);
        if (count($list)!=$len)
        {
            array_unshift($list,intval($key));
        }

        return $list;
    }
    
    //*
    //* function MyHashes_Search, Parameter list: $list,$key
    //*
    //* Returns list of $items, confirming to $where.
    //*

    function MyHashes_Search($items,$where)
    {
        foreach (array_keys($where) as $key)
        {
            $values=$where[ $key ];
            if (!is_array($where[ $key ])) { $where[ $key ]=array($where[ $key ]); }
            foreach (array_keys($where[ $key ]) as $id)
            {
                $where[ $key ][ $id ]=$this->Html2Sort(strtolower($where[ $key ][ $id ]));
                
            }
            
        }
        
        $ritems=array();
        foreach (array_keys($items) as $id)
        {
            if ($this->MyHash_Match($items[ $id ],$where))
            {
                array_push($ritems,$items[ $id ]);
            }
        }

        return $ritems;
    }
    
    //*
    //* function MyHash_Match, Parameter list: $list,$key
    //*
    //* Tests whether $item matches $where.
    //*

    function MyHash_Match($item,$where)
    {
        $match=True;
        $unmatchkey="";
        foreach ($where as $key => $values)
        {
            if (is_int($values))
            {
                if (!empty($item[ $key ]))
                {
                    $ivalue=intval($item[ $key ]);
                    if ($ivalue!=$values)
                    {
                        $match=False;
                    }
                }
            }
            else
            {
                if (!is_array($values))
                {
                    $values=array($values);
                }

                if (!empty($item[ $key ]))
                {
                    $ivalue=
                        preg_replace
                        (
                            '/\//',
                            '',
                            $this->Text2Sort
                            (
                                $this->Html2Sort($item[ $key ])
                            )
                        );

                    $match=False;
                    foreach ($values as $rkey => $rvalue)
                    {
                        if (preg_match('/'.$rvalue.'/i',$ivalue))
                        {
                            $match=True;
                            break;
                        }
                    }                
                }
                else
                {
                    $match=False;
                    break;
                }
            }

            if (!$match)
            {
                $unmatchkey=$key;
                break;
            }
        }

        return $match;
    }
    
    //*
    //* function MyHash_Default, Parameter list: $hash,$key,$default=""
    //*
    //* Returns $hash $key value or $default.
    //*

    function MyHash_Default($hash,$key,$default="")
    {
        if (isset($hash[ $key ])) { $default=$hash[ $key ]; }

        return $default;
    }
}

?>