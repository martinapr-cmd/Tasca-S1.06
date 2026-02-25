<?php

require 'vendor/autoload.php';

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Key;

$key = Key::createNewRandomKey();

$message ="Hola! Que tal :P";

$encrypted = Crypto::encrypt($message, $key);

$decrypted = Crypto::decrypt($encrypted, $key);

echo "Original message: $message\n";
echo "Encrypted message: $encrypted\n";
echo "Decrypted message: $decrypted\n";