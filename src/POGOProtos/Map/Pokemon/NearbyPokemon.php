<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Map/Pokemon/NearbyPokemon.php');

namespace POGOProtos\Map\Pokemon {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Map.Pokemon.NearbyPokemon
  final class NearbyPokemon extends ProtobufMessage {

    private $_unknown;
    private $pokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
    private $distanceInMeters = 0; // optional float distance_in_meters = 2
    private $encounterId = 0; // optional fixed64 encounter_id = 3
    private $fortId = ""; // optional string fort_id = 4
    private $fortImageUrl = ""; // optional string fort_image_url = 5

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Enums.PokemonId pokemon_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokemonId = $tmp;

            break;
          case 2: // optional float distance_in_meters = 2
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->distanceInMeters = $tmp;

            break;
          case 3: // optional fixed64 encounter_id = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->encounterId = $tmp;

            break;
          case 4: // optional string fort_id = 4
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->fortId = $tmp;

            break;
          case 5: // optional string fort_image_url = 5
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->fortImageUrl = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->pokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
      if ($this->distanceInMeters !== 0) {
        fwrite($fp, "\x15", 1);
        Protobuf::write_float($fp, $this->distanceInMeters);
      }
      if ($this->encounterId !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_uint64($fp, $this->encounterId);
      }
      if ($this->fortId !== "") {
        fwrite($fp, "\"", 1);
        Protobuf::write_varint($fp, strlen($this->fortId));
        fwrite($fp, $this->fortId);
      }
      if ($this->fortImageUrl !== "") {
        fwrite($fp, "*", 1);
        Protobuf::write_varint($fp, strlen($this->fortImageUrl));
        fwrite($fp, $this->fortImageUrl);
      }
    }

    public function size() {
      $size = 0;
      if ($this->pokemonId !== \POGOProtos\Enums\PokemonId::MISSINGNO) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      if ($this->distanceInMeters !== 0) {
        $size += 5;
      }
      if ($this->encounterId !== 0) {
        $size += 9;
      }
      if ($this->fortId !== "") {
        $l = strlen($this->fortId);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->fortImageUrl !== "") {
        $l = strlen($this->fortImageUrl);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearPokemonId() { $this->pokemonId = \POGOProtos\Enums\PokemonId::MISSINGNO; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function clearDistanceInMeters() { $this->distanceInMeters = 0; }
    public function getDistanceInMeters() { return $this->distanceInMeters;}
    public function setDistanceInMeters($value) { $this->distanceInMeters = $value; }

    public function clearEncounterId() { $this->encounterId = 0; }
    public function getEncounterId() { return $this->encounterId;}
    public function setEncounterId($value) { $this->encounterId = $value; }

    public function clearFortId() { $this->fortId = ""; }
    public function getFortId() { return $this->fortId;}
    public function setFortId($value) { $this->fortId = $value; }

    public function clearFortImageUrl() { $this->fortImageUrl = ""; }
    public function getFortImageUrl() { return $this->fortImageUrl;}
    public function setFortImageUrl($value) { $this->fortImageUrl = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('pokemon_id', $this->pokemonId, \POGOProtos\Enums\PokemonId::MISSINGNO)
           . Protobuf::toString('distance_in_meters', $this->distanceInMeters, 0)
           . Protobuf::toString('encounter_id', $this->encounterId, 0)
           . Protobuf::toString('fort_id', $this->fortId, "")
           . Protobuf::toString('fort_image_url', $this->fortImageUrl, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Map.Pokemon.NearbyPokemon)
  }

}