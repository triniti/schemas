<?php
declare(strict_types=1);

use Gdbots\Common\Util\ArrayUtils;
use Gdbots\Pbj\Message;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\MessageResolver;
use PHPUnit\Framework\TestCase;

final class SchemaTest extends TestCase
{
    public function testCanCreateAllMessages(): void
    {
        /** @var Message $className */
        foreach (MessageResolver::all() as $curie => $className) {
            $message = $className::create();
            $this->assertInstanceOf($className, $message);
            $this->assertInstanceOf(Message::class, $message);

            $ref = $message->generateMessageRef('tag');
            $this->assertInstanceOf(MessageRef::class, $ref);
            $this->assertSame($ref->toString(), $message->generateMessageRef('tag')->toString());

            $this->assertTrue(ArrayUtils::isAssoc($message->getUriTemplateVars()));
        }
    }
}
