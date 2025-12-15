<?php

namespace Rboschin\DockernatorRevamped;

class Generator
{
    use Names;

    /**
     * @var string
     */
    protected $delimiter = '-';

    /**
     * Generate a new name for use in your applications.
     *
     * @return string
     */
    public function generate(string $rumor = ''): string
    {
        $rumorString = self::setRumor($rumor);

        $prefix = $this->prefix[mt_rand(0, count($this->prefix) - 1)];
        $name = $this->names[mt_rand(0, count($this->names) - 1)];

        $sections = [$prefix, $name];

        return implode($this->delimiter, array_filter($sections)) . $rumorString;
    }

    /**
     * Generate a new prefix for use in your applications.
     *
     * @return string
     */
    public function generatePrefix(string $rumor = ''): string
    {
        $rumorString = self::setRumor($rumor);

        $prefix = $this->prefix[mt_rand(0, count($this->prefix) - 1)];

        return $prefix . $rumorString;
    }


    /**
     * Set custom delimiter string.
     *
     * @return \Rboschin\DockernatorRevamped\Generator
     */
    public function setDelimiterString(string $delimiter): \Rboschin\DockernatorRevamped\Generator
    {
        $this->delimiter = $delimiter;

        return $this;
    }

    /**
     * Adds a final string/number.
     * 
     * `level` can be:
     * day / shortday / daynumber / month / shortmonth / date / unique / random / a custom string/number
     *
     * @return string
     */
    public function setRumor(string $level): string
    {
        switch ($level) {
            case 'day':
                return $this->delimiter . strtolower(date('l'));
            case 'shortday':
                return $this->delimiter . strtolower(date('D'));
            case 'daynumber':
                return $this->delimiter . strtolower(date('j'));
            case 'month':
                return $this->delimiter . strtolower(date('F'));
            case 'shortmonth':
                return $this->delimiter . strtolower(date('M'));
            case 'date':
                return $this->delimiter .
                    date("Y" . $this->delimiter . "m" . $this->delimiter . "d");
            case 'unique':
                return $this->delimiter . uniqid();
            case 'random':
                return $this->delimiter . mt_rand(1000, 9999);
            default:
                return empty($level) ? '' : $this->delimiter . $level;
        }
    }
}
