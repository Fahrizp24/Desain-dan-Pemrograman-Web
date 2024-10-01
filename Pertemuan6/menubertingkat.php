<?php 

$menu = [
    ["nama" => "Beranda"],
    ["nama" => "Berita ", "subMenu" => [["nama"=>"Wisata",
                                                "subMenu" =>[  ["nama" => "Pantai"],
                                                                ["nama" => "Gunung"] 
                                                            ]
                                        ],
                                        ["nama"=> "Kuliner"],
                                        ["nama"=> "Hiburan"]
                                        ]
                                        ],
    ["nama"=> "Tentang"],
    ["nama"=> "Kontak"]
];

function tampilkanMenuBertingkat (array $menu){
    echo"<ul>";
    foreach ($menu as $key => $value) {
        echo "<li> {$value ['nama']}</li>";
    }
    echo"</ul>";
}

tampilkanMenuBertingkat($menu);
?>