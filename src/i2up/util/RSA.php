<?php

namespace i2up\util;

class RSA {
    function encrypt_with_public_key($raw_str)
    {
        if (!is_string($raw_str)) {
            return $raw_str;
        }
        $public_key = $this -> get_public_key();
        $r = openssl_public_encrypt($raw_str, $encrypted, $public_key, OPENSSL_PKCS1_PADDING);
        return $r ? base64_encode($encrypted) : null;
    }
    function decrypt_with_private_key($encrypted)
    {
        if (!is_string($encrypted)) {
            return $encrypted;
        }
        $private_key = $this -> get_private_key();
        $bin_cipher_text = base64_decode($encrypted);
        // get plant text
        $r = openssl_private_decrypt($bin_cipher_text, $decrypted, $private_key, OPENSSL_PKCS1_PADDING);
        return $r ? $decrypted : null;
    }
    private function get_public_key() {
        $file_content = file_get_contents(__DIR__ . '/public_key.pem');
        return openssl_pkey_get_public($file_content);
    }
    private function get_private_key()
    {
        $file_content = file_get_contents(__DIR__ . 'private_key.pem');
        return openssl_pkey_get_private($file_content);
    }
}