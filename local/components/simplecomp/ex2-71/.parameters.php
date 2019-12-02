<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = [
    "GROUPS"     => [
    ],
    "PARAMETERS" => [
        "ID_IB_CATALOG" => [
            "PARENT" => "BASE",
            "NAME"   => GetMessage("EX2_71_ID_IB_CATALOG"),
            "TYPE"   => "STRING",
        ],
        "ID_IB_CLASS"   => [
            "PARENT" => "BASE",
            "NAME"   => GetMessage("EX2_71_ID_IB_CLASS"),
            "TYPE"   => "STRING",
        ],
        "CODE_PROPERTY" => [
            "PARENT" => "BASE",
            "NAME"   => GetMessage("EX2_71_CODE_PROPERTY"),
            "TYPE"   => "STRING",
        ],
        "CACHE_TIME"    => ["DEFAULT" => 3600],
        "CACHE_GROUPS"  => [
            "PARENT"  => "CACHE_SETTINGS",
            "NAME"    => GetMessage("CP_BPR_CACHE_GROUPS"),
            "TYPE"    => "CHECKBOX",
            "DEFAULT" => "Y",
        ],
    ],
];