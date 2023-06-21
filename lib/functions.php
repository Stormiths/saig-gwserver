<?php

// FUnctions to be provided to CHATGPT

$FUNCTIONS = [
    [
        "name" => "Inspect",
        "description" => "Look at or Inspects NPC, Actor, or being",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Target NPC, Actor, or being",
                ]
            ],
            "required" => ["target"],
        ],
    ],
     [
        "name" => "InspectSurroundings",
        "description" => "Looks for beings nearby",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => []
        ],
    ],
    [
        "name" => "MoveTo",
        "description" => "Moves to a visible building or visible target, also used to guide {$GLOBALS["PLAYER_NAME"]} to a target o building.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Visible Target NPC, Actor, or being, or building.",
                ]
            ],
            "required" => ["target"],
        ],
    ],
    [
        "name" => "OpenInventory",
        "description" => "Initiates trading or exchange items with {$GLOBALS["PLAYER_NAME"]}",
         "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" => []
        ],
    ],
    [
        "name" => "Attack",
        "description" => "Engages combat with actor, npc or being.Subject to moral interpretations ",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Target NPC, Actor, or being",
                ]
            ],
            "required" => ["target"],
        ]
    ],
    [
        "name" => "Follow",
        "description" => "Moves to and follow a NPC, an actor or being",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Target NPC, Actor, or being",
                ]
            ],
            "required" => ["target"],
        ]
    ],
    [
        "name" => "CheckInventory",
        "description" => "Search in Herika\'s inventory.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "item to look for, if empty all items will be returned",
                ]
            ],
            "required" =>[]
        ]
    ],
     [
        "name" => "SheatheWeapon",
        "description" => "Sheates current weapon",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" =>[]
        ]
    ],
     [
        "name" => "Relax",
        "description" => "Makes Herika to stop current action and relax herself",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Keep it blank",
                ]
            ],
            "required" =>[]
        ]
    ],
    [
        "name" => "TravelTo",
        "description" => "Start travelling to Town or City,  also used to guide {$GLOBALS["PLAYER_NAME"]} to a Town o City. ",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "target" => [
                    "type" => "string",
                    "description" => "Town or City to travel to",
                ]
            ],
            "required" =>["target"]
        ]
    ]
    /*[
        "name" => "GetTopicInfo",
        "description" => "Get information about a topic or character on Herika's long-term memory.",
        "parameters" => [
            "type" => "object",
            "properties" => [
                "topic" => [
                    "type" => "string",
                    "description" => "Topic or Characters",
                ]
            ],
            "required" =>["topic"]
        ]
    ]*/
];




?>