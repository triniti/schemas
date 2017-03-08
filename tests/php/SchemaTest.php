<?php

namespace Triniti\Tests\Schemas;

use Gdbots\Pbj\MessageResolver;

class SchemaTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateAllMessages()
    {
        /** @var \Gdbots\Pbj\Message $className */
        foreach (MessageResolver::all() as $curie => $className) {
            $message = $className::create();
            $this->assertInstanceOf($className, $message);
            $this->assertInstanceOf('Gdbots\Pbj\Message', $message);
        }
    }
}
