<?php
/**
          _____                _____                    _____                    _____
         /\    \              |\    \                  /\    \                  /\    \
        /::\    \             |:\____\                /::\____\                /::\____\
        \:::\    \            |::|   |               /:::/    /               /:::/    /
         \:::\    \           |::|   |              /:::/    /               /:::/    /
          \:::\    \          |::|   |             /:::/    /               /:::/    /
           \:::\    \         |::|   |            /:::/    /               /:::/    /
           /::::\    \        |::|   |           /:::/    /               /:::/    /
  ____    /::::::\    \       |::|___|______    /:::/    /      _____    /:::/    /      _____
 /\   \  /:::/\:::\    \      /::::::::\    \  /:::/____/      /\    \  /:::/____/      /\    \
/::\   \/:::/  \:::\____\    /::::::::::\____\|:::|    /      /::\____\|:::|    /      /::\____\
\:::\  /:::/    \::/    /   /:::/~~~~/~~      |:::|____\     /:::/    /|:::|____\     /:::/    /
 \:::\/:::/    / \/____/   /:::/    /          \:::\    \   /:::/    /  \:::\    \   /:::/    /
  \::::::/    /           /:::/    /            \:::\    \ /:::/    /    \:::\    \ /:::/    /
   \::::/____/           /:::/    /              \:::\    /:::/    /      \:::\    /:::/    /
    \:::\    \           \::/    /                \:::\__/:::/    /        \:::\__/:::/    /
     \:::\    \           \/____/                  \::::::::/    /          \::::::::/    /
      \:::\    \                                    \::::::/    /            \::::::/    /
       \:::\____\                                    \::::/    /              \::::/    /
        \::/    /                                     \::/____/                \::/____/
         \/____/                                       ~~                       ~~
 */

require_once __DIR__ . '/init.php';
echo __FILE__.PHP_EOL;
sleep(1);
use IYUU\AutoReseed;

echo microtime(true).' IYUU自动辅种正在初始化...'.PHP_EOL;
AutoReseed::init();
AutoReseed::call();
exit(0);
