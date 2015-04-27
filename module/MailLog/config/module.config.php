<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'MailLog\Logger' => 'MailLog\Log\Service\MailLogLoggerFactory'
        )
    )
);