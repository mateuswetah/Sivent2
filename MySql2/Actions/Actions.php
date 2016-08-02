array
    (
       "Help" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Ajuda #ItemsName",
        "Title_UK" => "Help #ItemsName_UK",
        "Name"     => "Ajuda #ItemsName",
        "Name_UK"  => "Help #ItemsName_UK",
        "ShortName"     => "Ajuda #ItemsName",
        "ShortName_UK"  => "Help #ItemsName_UK",

        "Icon"     => "help_dark.png",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"    => 1,

        "Handler"       => "MyMod_Handle_Help",
        "AccessMethod"  => "MyMod_Handle_Help_Has",

        "Singular"   => FALSE,
       ),
       "Search" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Pesquisar #ItemsName",
        "Title_UK" => "Search #ItemsName_UK",
        "Name"     => "Pesquisar #ItemsName",
        "Name_UK"  => "Search #ItemsName_UK",
        "ShortName"     => "Pesquisar",
        "ShortName_UK"  => "Search",

        "Icon"     => "show_dark.png",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyMod_Handle_Search",
        //"AltAction"   => "EditList",
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "Add" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Criar novo(a) #ItemName",
        "Title_UK" => "Create #ItemName_UK",
        "Name"     => "Adicionar #ItemName",
        "Name_UK"  => "Add #ItemName_UK",
        "ShortName"     => "Adicionar",
        "ShortName_UK"  => "Add",

        "PName"     => "#ItemName adicionado com êxito",
        "PName_UK"  => "#ItemName_UK successfully added",
        "Icon"     => "add_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleAdd",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 1,
        "Singular"   => FALSE,
       ),
       "ComposedAdd" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Criar novo(a) #ItemName",
        "Title_UK" => "Create #ItemName_UK",
        "Name"     => "Adicionar #ItemsName",
        "Name_UK"  => "Add #ItemsName_UK",
        "ShortName"     => "Adicionar #ItemsName",
        "ShortName_UK"  => "Add #ItemsName_UK",
        "PName"     => "#ItemName adicionado com êxito",
        "PName_UK"  => "#ItemName_UK successfully added",
        "Icon"     => "add_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleComposedAdd",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 1,
        "Singular"   => FALSE,
       ),
       "Copy" => array
       (
        "Href"     => "",
        "HrefArgs" => "ID=#ID",
        "Title"    => "Copiar #ItemName #Name",
        "Title_UK" => "Copy #ItemName_UK #Name_UK",
        "Name"     => "Copiar",
        "Name_UK"  => "Copy",
        "PName"     => "#ItemName copiado com êxito",
        "PName_UK"  => "#ItemName_UK successfully copied",
        "Icon"     => "copy_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleCopy",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 1,
        "Singular"   => TRUE,
       ),
       "Show" => array
       (
        "Href"     => "",
        "HrefArgs" => "ID=#ID",
        "Title"    => "Mostrar #ItemName #Name",
        "Title_UK" => "Show #ItemName_UK #Name",
        "Name_UK"  => "Show #ItemName_UK",
        "Name"     => "Mostrar #ItemName",
        "Icon"     => "show_light.png",
        "ShowIDCols"     => array(),
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "HandleShow",
        //"Target"   => "_#Module",
        "Edits"   => 0,
        "Singular"   => TRUE,
        "AltAction"   => "Edit",
       ),
       "Edit" => array
       (
        "Href"     => "",
        "HrefArgs" => "ID=#ID",
        "Title"    => "Editar #ItemName #Name",
        "Title_UK" => "Edit #ItemName_UK #Name",
        "Name"     => "Editar #ItemName",
        "Name_UK"  => "Edit #ItemName_UK",
        "Icon"     => "edit_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "AltAction"   => "Show",
        "Handler"   => "HandleEdit",
        //"Target"   => "_#Module",
        "Edits"   => 1,
        "Singular"   => TRUE,
       ),
       "ShowList" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Mostrar todo(a)s #ItemsName",
        "Title_UK" => "Show all #ItemsName_UK",
        "Name"     => "Mostrar #ItemsName",
        "Name_UK"  => "Show #ItemsName_UK",
        "Icon"     => "show_dark.png",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyMod_Handle_Search",
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "EditList" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Editar #ItemsName Pesquisandos",
        "Title_UK" => "Edit #ItemsName_UK Searching",
        "Name"     => "Editar #ItemsName",
        "Name_UK"  => "Edit #ItemsName_UK",
        "ShortName"     => "Editar em Lista",
        "ShortName_UK"  => "Edit in List",
        "Icon"     => "edit_dark.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "MyMod_Handle_Search",
        //"AltAction"   => "Search",
        "Edits"   => 1,
        "Singular"   => FALSE,
       ),
       "Delete" => array
       (
        "Href"     => "",
        "HrefArgs" => "ID=#ID",
        "Title"    => "Deletar #ItemName #Name",
        "Title_UK" => "Delete #ItemName_UK #Name",
        "Name"     => "Deletar",
        "Name_UK"  => "Delete",
        "PName"     => "#ItemName deletado com êxito",
        "PName_UK"  => "#ItemName_UK successfully deleted",
        "Icon"     => "delete_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 0,
        //"Target"   => "_delete",
        "Handler"   => "HandleDelete",
        "Edits"   => 1,
        "Singular"   => TRUE,
       ),
       "Latex" => array
       (
        "Href"     => "",
        "HrefArgs" => "Latex=1&ID=#ID",
        "Title"    => "Imprimir #Name",
        "Title_UK" => "Print #Name",
        "Name"     => "Versão Imprimível",
        "Name_UK"  => "Printable Version",
        "Icon"     => "print_dark.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 0,
        "Admin"   => 0,
        "Handler"   => "HandleLatexItem",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 0,
        "Singular"   => TRUE,
       ),
       "LatexList" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Imprimir",
        "Title_UK" => "Print",
        "Name"     => "Versão Imprimível",
        "Name_UK"  => "Printable Version",
        "Icon"     => "print_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 0,
        "Handler"   => "HandleLatexItems",
        "NoHeads"   => 1,
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "Print" => array
       (
        "Href"     => "",
        "HrefArgs" => "ID=#ID",
        "Title"    => "Imprimir #ItemName: #Name",
        "Title_UK" => "Print #Name",
        "Name"     => "Imprimir",
        "Name_UK"  => "Print",
        "Icon"     => "print_light.png",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "HandlePrint",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 0,
        "Singular"   => TRUE,
       ),
       "PrintList" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Gerar PDF todo(a)s #ItemsName",
        "Title_UK" => "Generate PDF for all #ItemsName_UK",
        "Name"     => "Imprimir #ItemsName",
        "Name_UK"  => "Printable Version",
        "Icon"     => "print_dark.png",
        "Public"   => 1,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "MyMod_Handle_Prints",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 0,
       ),
       "Download" => array
       (
        "Href"     => "",
        "HrefArgs" => "ID=#ID",
        "Title"    => "Baixar #Name",
        "Title_UK" => "Download #Name",
        "Name"     => "Baixar",
        "Name_UK"  => "Download",
        "Icon"     => "schedule_light.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleDownload",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "Export" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Exportar #ItemsName",
        "Title_UK" => "Export #ItemsName_UK (dump)",
        "Name"     => "Exportar #ItemsName",
        "Name_UK"  => "Export #ItemsName_UK",
        //"Icon"     => "rubik.png",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleExport",
        "NoHeads"   => 1,
        "NoInterfaceMenu"   => 1,
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "Import" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Importar #ItemsName do Arquivo",
        "Title_UK" => "Import #ItemsName_UK (restore)",
        "Name"     => "Importar #ItemsName do Arquivo",
        "Name_UK"  => "Import #ItemsName_UK",
        //"Icon"     => "rubik.png",
        "Public"   => 0,
        "Person"   => 1,
        "Admin"   => 1,
        "Handler"   => "HandleImport",
        "Singular"   => FALSE,
       ),
       "Zip" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Zip Arquivos Carregados",
        "Title_UK" => "Zip Uploaded Files",
        "Name"     => "Zip Arquivos",
        "Name_UK"  => "Zip Files",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleZip",
        //"NoHeads"   => 1,
        //"NoInterfaceMenu"   => 1,
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "Files" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "Title"    => "Arquivos Carregados",
        "Title_UK" => "Uploaded Files",
        "Name"     => "Arquivos",
        "Name_UK"  => "Files",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleFiles",
        "Edits"   => 0,
        "Singular"   => FALSE,
       ),
       "Process" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "AddIDArg"   => 0,
        "Title"    => "Processar #ItemsName",
        "Title_UK" => "Process #ItemsName_UK",
        "Name"     => "Processar",
        "Name_UK"  => "Process",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Handler"   => "HandleProcess",
        "Singular"   => FALSE,
       ),
       "Info" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "AddIDArg"   => 0,
        "Title"    => "SysInfo",
        "Title_UK" => "SysInfo",
        "Name"     => "SysInfo",
        "Name_UK"  => "SysInfo",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Singular"   => FALSE,
        "Handler"  => "MyMod_Handle_Info",
       ),
       "Profiles" => array
       (
        "Href"     => "",
        "HrefArgs" => "",
        "AddIDArg"   => 0,
        "Title"    => "Perfis e Permissões do Módulo",
        "Title_UK" => "Module Profiles and Permissions",
        "Name"     => "Perfis e Permissões",
        "Name_UK"  => "Profiles and Permission",
        "Public"   => 0,
        "Person"   => 0,
        "Admin"   => 1,
        "Singular"   => FALSE,
       ),
    );
