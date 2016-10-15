<?php

namespace Lemming\Random;

use Discord\Parts\Channel\Message;
use Lemming\Command\Base;

class Command extends Base
{
    /**
     * Command constructor.
     *
     * @param Message $message
     * @param $params
     */
    public function __construct(Message $message, $params)
    {
        parent::__construct($message, $params);
    }

    /**
     * Search the library of gifs and attempt to find a great match.
     *
     * @return string
     */
    public function fire()
    {
        $choices = explode(' ', $this->params);
        shuffle($choices);

        return $this->message->channel->sendMessage(trans('random.choose', null, $choices[0]));
    }
}