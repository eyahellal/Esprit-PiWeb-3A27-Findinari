<?php


namespace App\Service;


class WebSocketService
{
    private string $host = '127.0.0.1';
    private int $port = 8888;


    public function sendMessage(int $ticketId, string $content, ?string $fileUrl = 'null', string $senderType = 'User', ?int $senderId = 0, ?int $messageId = 0): void
    {
        $fileUrl = $fileUrl ?? 'null';
        $senderId = $senderId ?? 0;
        $messageId = $messageId ?? 0;
        // Format: ticketId|senderType|content|fileUrl|senderId|messageId
        $payload = "$ticketId|$senderType|$content|$fileUrl|$senderId|$messageId";


        try {
            $sp = fsockopen($this->host, $this->port, $errno, $errstr, 2);
            if (!$sp) return;


            stream_set_timeout($sp, 1);


            // 1. WebSocket Handshake
            $key = base64_encode(random_bytes(16));
            $header = "GET / HTTP/1.1\r\n" .
                "Host: $this->host:$this->port\r\n" .
                "Upgrade: websocket\r\n" .
                "Connection: Upgrade\r\n" .
                "Sec-WebSocket-Key: $key\r\n" .
                "Sec-WebSocket-Version: 13\r\n\r\n";


            fwrite($sp, $header);
            fread($sp, 1024); // Read response (101 Switching Protocols)


            // 2. Send Masked Frame (Required for clients)
            $frame = $this->encodeFrame($payload);
            fwrite($sp, $frame);
           
            fclose($sp);
        } catch (\Exception $e) {
            // Silently fail if server is down
        }
    }


    private function encodeFrame(string $text): string
    {
        $b1 = 0x81; // FIN + Opcode text
        $length = strlen($text);
        $header = "";


        if ($length <= 125) {
            $header = pack('CC', $b1, $length | 0x80);
        } elseif ($length <= 65535) {
            $header = pack('CCn', $b1, 126 | 0x80, $length);
        } else {
            $header = pack('CCJ', $b1, 127 | 0x80, $length);
        }


        // Masking key (required by RFC 6455 for client-to-server)
        $mask = random_bytes(4);
        $header .= $mask;


        $maskedText = "";
        for ($i = 0; $i < $length; $i++) {
            $maskedText .= $text[$i] ^ $mask[$i % 4];
        }


        return $header . $maskedText;
    }
}




