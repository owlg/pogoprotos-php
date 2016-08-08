<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/PokemonRarity.php');

namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Enums.PokemonRarity
  abstract class PokemonRarity extends ProtobufEnum {
    const POKEMON_RARITY_NORMAL = 0;
    const POKEMON_RARITY_LEGENDARY = 1;
    const POKEMON_RARITY_MYTHIC = 2;

    public static $_values = array(
      0 => "POKEMON_RARITY_NORMAL",
      1 => "POKEMON_RARITY_LEGENDARY",
      2 => "POKEMON_RARITY_MYTHIC",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}