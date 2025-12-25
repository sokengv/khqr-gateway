<?php

declare(strict_types=1);

namespace KHQR\Config;

class Constants
{
    /**
     * Get the production base URL
     */
    public static function baseUrl(): string
    {
        return $_ENV['BAKONG_API_BASE_URL'] 
            ?? getenv('BAKONG_API_BASE_URL') 
            ?? 'https://api-bakong.nbc.gov.kh';
    }

    /**
     * Get the SIT (testing) base URL
     */
    public static function sitBaseUrl(): string
    {
        return $_ENV['BAKONG_API_SIT_BASE_URL'] 
            ?? getenv('BAKONG_API_SIT_BASE_URL') 
            ?? 'https://sit-api-bakong.nbc.gov.kh';
    }
    
    public static function isProxyEnabled(): bool
    {
        $value = $_ENV['BAKONG_API_PROXY_ENABLED']
            ?? getenv('BAKONG_API_PROXY_ENABLED')
            ?? null;

        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }


    // -------- Production URLs --------
    public static function accountUrl(): string { return self::baseUrl() . '/v1/check_bakong_account'; }
    public static function renewTokenUrl(): string { return self::baseUrl() . '/v1/renew_token'; }
    public static function deeplinkUrl(): string { return self::baseUrl() . '/v1/generate_deeplink_by_qr'; }
    public static function checkTransactionMd5Url(): string { return self::baseUrl() . '/v1/check_transaction_by_md5'; }
    public static function checkTransactionMd5ListUrl(): string { return self::baseUrl() . '/v1/check_transaction_by_md5_list'; }
    public static function checkTransactionFullHashUrl(): string { return self::baseUrl() . '/v1/check_transaction_by_hash'; }
    public static function checkTransactionFullHashListUrl(): string { return self::baseUrl() . '/v1/check_transaction_by_hash_list'; }
    public static function checkTransactionShortHashUrl(): string { return self::baseUrl() . '/v1/check_transaction_by_short_hash'; }
    public static function checkTransactionInstructionRefUrl(): string { return self::baseUrl() . '/v1/check_transaction_by_instruction_ref'; }
    public static function checkTransactionExternalRefUrl(): string { return self::baseUrl() . '/v1/check_transaction_by_external_ref'; }

    // -------- SIT (testing) URLs --------
    public static function sitAccountUrl(): string { return self::sitBaseUrl() . '/v1/check_bakong_account'; }
    public static function sitRenewTokenUrl(): string { return self::sitBaseUrl() . '/v1/renew_token'; }
    public static function sitDeeplinkUrl(): string { return self::sitBaseUrl() . '/v1/generate_deeplink_by_qr'; }
    public static function sitCheckTransactionMd5Url(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_md5'; }
    public static function sitCheckTransactionMd5ListUrl(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_md5_list'; }
    public static function sitCheckTransactionFullHashUrl(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_hash'; }
    public static function sitCheckTransactionFullHashListUrl(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_hash_list'; }
    public static function sitCheckTransactionShortHashUrl(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_short_hash'; }
    public static function sitCheckTransactionInstructionRefUrl(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_instruction_ref'; }
    public static function sitCheckTransactionExternalRefUrl(): string { return self::sitBaseUrl() . '/v1/check_transaction_by_external_ref'; }
}
