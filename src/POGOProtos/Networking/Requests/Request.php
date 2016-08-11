<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Networking/Requests/Request.php');

namespace POGOProtos\Networking\Requests {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Networking.Requests.Request
  final class Request extends ProtobufMessage {

    private $_unknown;
    private $requestType = \POGOProtos\Networking\Requests\RequestType::METHOD_NONE; // optional .POGOProtos.Networking.Requests.RequestType request_type = 1
    private $requestMessage = ""; // optional bytes request_message = 2

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
          case 1: // optional .POGOProtos.Networking.Requests.RequestType request_type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->requestType = $tmp;

            break;
          case 2: // optional bytes request_message = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->requestMessage = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->requestType !== \POGOProtos\Networking\Requests\RequestType::METHOD_NONE) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->requestType);
      }
      if ($this->requestMessage !== "") {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, strlen($this->requestMessage));
        fwrite($fp, $this->requestMessage);
      }
    }

    public function size() {
      $size = 0;
      if ($this->requestType !== \POGOProtos\Networking\Requests\RequestType::METHOD_NONE) {
        $size += 1 + Protobuf::size_varint($this->requestType);
      }
      if ($this->requestMessage !== "") {
        $l = strlen($this->requestMessage);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearRequestType() { $this->requestType = \POGOProtos\Networking\Requests\RequestType::METHOD_NONE; }
    public function getRequestType() { return $this->requestType;}
    public function setRequestType($value) { $this->requestType = $value; }

    public function clearRequestMessage() { $this->requestMessage = ""; }
    public function getRequestMessage() { return $this->requestMessage;}
    public function setRequestMessage($value) { $this->requestMessage = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('request_type', $this->requestType, \POGOProtos\Networking\Requests\RequestType::METHOD_NONE)
           . Protobuf::toString('request_message', $this->requestMessage, "");
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Request)
  }

}