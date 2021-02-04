<?php
declare(strict_types=1);

use Gdbots\Pbj\Message;
use Gdbots\Pbj\MessageResolver;
use Gdbots\Pbj\Util\ArrayUtil;
use Gdbots\Pbj\WellKnown\MessageRef;
use Gdbots\Pbj\WellKnown\NodeRef;
use PHPUnit\Framework\TestCase;

class SchemaTest extends TestCase
{
    public function testCanCreateAllMessages(): void
    {
        /** @var Message|string $className */
        foreach (MessageResolver::all() as $curie => $className) {
            $message = $className::create();
            $this->assertInstanceOf($className, $message);
            $this->assertInstanceOf(Message::class, $message);

            $ref = $message->generateMessageRef('tag');
            $this->assertInstanceOf(MessageRef::class, $ref);
            $this->assertSame($ref->toString(), $message->generateMessageRef('tag')->toString());
            $this->assertInstanceOf(NodeRef::class, $message->generateNodeRef());
            $this->assertTrue(ArrayUtil::isAssoc($message->getUriTemplateVars()));
        }
    }
}
