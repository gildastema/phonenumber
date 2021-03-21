<?php

namespace Tematech\Phonenumber;

class Phonenumber
{
    const ORANGE = 10;
    const MTN = 11;
    const NEXTTEL = 12;
    const CAMTEL = 13;
    const UNKOWN = -1;
    /**
     * get operator from phone
     *
     * @param string $phone
     * @return integer
     */
    public static function getOperator(string $phone): int
    {
        $phone = self::getPhoneWithoutPrefix(trim($phone));
        
        if(strlen($phone) !== 9) return self::UNKOWN;
        if (startsWith($phone, '69')) {
            return self::ORANGE;
        }
        if (
            startsWith($phone, '655') || startsWith($phone, '656') || startsWith($phone, '657')
            || startsWith($phone, '658') || startsWith($phone, '659')
        ) {
            return self::ORANGE;
        }
        if (startsWith($phone, '67'))
            return self::MTN;
        if (
            startsWith($phone, '650') || startsWith($phone, '651') || startsWith($phone, '652')
            || startsWith($phone, '653') || startsWith($phone, '654') || startsWith($phone, '680') || startsWith($phone, '681')
            || startsWith($phone, '682')
        ) {
            return self::MTN;
        }
        if (startsWith($phone, '66'))
            return self::NEXTTEL;
        return self::UNKOWN;
    }
    /**
     * Undocumented function
     *
     * @param string $phone
     * @return string
     */
    public static function getPhoneWithoutPrefix(string $phone): string
    {
        if (strlen($phone) == 12) {
            return substr($phone, 3,9);
        }
        if (strlen($phone) == 11) {
            return '6' . str_replace('237', '', $phone);
        }
        if (strlen($phone) == 9) {
            return $phone;
        }
        if (strlen($phone) == 8)
            return '6' . $phone;
        return $phone;
    }
}
