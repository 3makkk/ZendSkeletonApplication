<?php
/**
 * Created by PhpStorm.
 * User: emak
 * Date: 27.04.15
 * Time: 15:35
 */

namespace MailLog\Log\Formatter;

use Zend\Log\Formatter\FormatterInterface;

class MailException implements FormatterInterface {

    /**
     * Formats data into a single line to be written by the writer.
     *
     * @param array $event event data
     * @return string formatted line to write to the log
     */
    public function format($event)
    {
        $trace = $event->getTraceAsString();
        $i = 1;
        do {
            $messages[] = $i++ . ": " . $event->getMessage();
        } while ($event = $event->getPrevious());

        $log = "Exception:n" . implode("n", $messages);
        $log .= "nTrace:n" . $trace;

        return $log;
    }

    /**
     * Get the format specifier for DateTime objects
     *
     * @return string
     */
    public function getDateTimeFormat()
    {
        // TODO: Implement getDateTimeFormat() method.
    }

    /**
     * Set the format specifier for DateTime objects
     *
     * @see http://php.net/manual/en/function.date.php
     * @param string $dateTimeFormat DateTime format
     * @return FormatterInterface
     */
    public function setDateTimeFormat($dateTimeFormat)
    {
        // TODO: Implement setDateTimeFormat() method.
    }
}