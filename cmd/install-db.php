<?php


$db = new SQLite3('mysqlitedb.db');

//$db->exec("DROP TABLE `eventlog`;");

$db->exec("
CREATE TABLE IF NOT EXISTS `eventlog` (
  `ts` text NOT NULL,
  `type` varchar(128) ,
  `data` text ,
  `sess` varchar(1024) ,
  `gamets` bigint NOT NULL,
  `localts` bigint NOT NULL
);");

//$db->exec("DROP TABLE `responselog`;");

$db->exec("
CREATE TABLE IF NOT EXISTS `responselog` (
  `localts` bigint NOT NULL,
  `sent` bigint NOT NULL,
  `actor` varchar(128) ,
  `text` text,
  `action` varchar(256),
  `tag` varchar(256)

);");

//$db->exec("DROP TABLE `log`;");

$db->exec("
CREATE TABLE IF NOT EXISTS `log` (
  `localts` bigint NOT NULL,
  `prompt` text,
  `response` text,
  `url` text
);");

//$db->exec("DROP TABLE `quests`;");

$db->exec("
CREATE TABLE IF NOT EXISTS `quests` (
  `ts` text NOT NULL,
  `sess` varchar(1024) ,
  `id_quest` varchar(1024) NOT NULL,
  `name` text,
  `editor_id` text,
  `giver_actor_id` bigint,
  `reward` text,
  `target_id` text,
  `is_uniqe` bool,
  `mod` text,
  `stage` int,
  `briefing` text,
  `briefing2` text,
  `localts` bigint NOT NULL,
  `gamets` bigint NOT NULL,
  `data` text,
  `status` text
);");

//$db->exec("DROP TABLE `speech`;");

$db->exec("
CREATE TABLE IF NOT EXISTS `speech` (
  `ts` text NOT NULL,
  `sess` varchar(1024) ,
  `speaker` text,
  `speech` text,
  `location` text,
  `listener` text,
  `topic` text,
  `localts` bigint NOT NULL,
  `gamets` bigint NOT NULL
);");


$db->exec("
CREATE TABLE IF NOT EXISTS `diarylog` (
  `ts` text NOT NULL,
  `sess` varchar(1024) ,
  `topic` text,
  `content` text,
  `tags` text,
  `people` text,
  `localts` bigint NOT NULL,
  `location` text,
  `gamets` bigint NOT NULL
);");

$db->exec("
CREATE TABLE IF NOT EXISTS `books` (
  `ts` text NOT NULL,
  `sess` varchar(1024) ,
  `title` text,
  `content` text,
  `localts` bigint NOT NULL,
  `gamets` bigint NOT NULL
);");

$db->exec("
CREATE TABLE IF NOT EXISTS `currentmission` (
  `ts` text NOT NULL,
  `sess` varchar(1024) ,
  `description` text,
  `localts` bigint NOT NULL,
  `gamets` bigint NOT NULL
);");

$db->exec("
CREATE VIRTUAL TABLE diarylogv2 
USING FTS5(topic,content,tags,people,location);");

@mkdir(__DIR__ .DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR."soundcache");

?>
